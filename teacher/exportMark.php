<?php
    session_start();
    if(!isset($_SESSION['CurrenUser'])){
        header('location:../accounts/login.php');
    }
?>
<?php
    require('../database/config.php');
    require('Classes/PHPExcel.php');
    if(isset($_SESSION['CurrenClass']) && isset($_SESSION['CurrenCourse'])){
        $class_id = $_SESSION["CurrenClass"];
        $course_id = $_SESSION["CurrenCourse"];
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        $sheet = $objPHPExcel->getActiveSheet()->setTitle($class_id);//xuất thành tên sheet 
    
        //Đặt tên tiêu đề các cột
        $rowCount = 1;
        $sheet->setCellValue('A' .$rowCount, 'Học kỳ');
        $sheet->setCellValue('B' .$rowCount, 'Mã lớp');
        $sheet->setCellValue('C' .$rowCount, 'Mã môn học');
        $sheet->setCellValue('D' .$rowCount, 'Môn học');
        $sheet->setCellValue('E' .$rowCount, 'Mã số sinh viên');
        $sheet->setCellValue('F' .$rowCount, 'Họ và tên');
        $sheet->setCellValue('G' .$rowCount, 'Ngày sinh');
        $sheet->setCellValue('H' .$rowCount, 'Điểm QT');
        $sheet->setCellValue('I' .$rowCount, 'Điểm CK');
        $sheet->setCellValue('J' .$rowCount, 'Điểm chữ');

        //thiết lập độ rộng cho từng cột
        $sheet->getColumnDimension("C")->setAutoSize(true);
        $sheet->getColumnDimension("D")->setAutoSize(true);
        $sheet->getColumnDimension("E")->setAutoSize(true);
        $sheet->getColumnDimension("F")->setAutoSize(true);
        $sheet->getColumnDimension("G")->setAutoSize(true);

        //In đậm cho tiêu đề cột
        $sheet->getStyle('A1:J1')->getFont()->setBold(true);
        //Căn giữa tiêu đề
        $sheet->getStyle('A1:J1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    
        // biến $conn là biến kết nối trong ../database/config.php
        $diem = $conn->query("SELECT mark_data.subject_id, mark_data.midterm, mark_data.final_mark, mark_data.s_mark, 
        couse.couse_id, 
        student.student_id, student.fullname, student.birth_day,
        classes.class_id, 
        subject.subject_name FROM ((((mark_data 
        INNER JOIN couse ON mark_data.couse_id=couse.couse_id)
        INNER JOIN student ON mark_data.student_id=student.student_id)
        INNER JOIN classes ON mark_data.class_id=classes.class_id)
        INNER JOIN subject ON classes.subject_id=subject.subject_id)  
        WHERE classes.class_id=$class_id AND couse.couse_id=$course_id");

        while($row = mysqli_fetch_array($diem)){
            $rowCount++;
            $sheet->setCellValue('A' .$rowCount, $row['couse_id']);
            $sheet->setCellValue('B' .$rowCount, $row['class_id']);
            $sheet->setCellValue('C' .$rowCount, $row['subject_id']);
            $sheet->setCellValue('D' .$rowCount, $row['subject_name']);
            $sheet->setCellValue('E' .$rowCount, $row['student_id']);
            $sheet->setCellValue('F' .$rowCount, $row['fullname']);
            $sheet->setCellValue('G' .$rowCount, $row['birth_day']);
            $sheet->setCellValue('H' .$rowCount, $row['midterm']);
            $sheet->setCellValue('I' .$rowCount, $row['final_mark']);
            $sheet->setCellValue('J' .$rowCount, $row['s_mark']);
        }

        //Căn giữa
        $sheet->getStyle('A2:' . 'E'.($rowCount))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('G2:' . 'J'.($rowCount))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        
        //Tạo boder
        $styleArray = array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            )
        );
        $sheet->getStyle('A1:' . 'J'.($rowCount))->applyFromArray($styleArray);

        //Lưu file
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $filename = $class_id.'_'.$course_id.'.xlsx';//tên file xuất ra
        $objWriter->save($filename);
        
        //trả về dữ liệu
        ob_end_clean();
        header('Content-Disposition: attachment; filename="' .$filename . '"');//trả về kiểu file attachment, dowload filename
        header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');// xuất file excel đuôi .xlsx
        header('Content-Length: ' .filesize($filename));//trả về file size
        header('Content-Transfer-Encoding: binary');//kiểu mã hoá được sdung để truyền dữ liệu trong giao thức HTTP
        header('Cache-Control: must-revalidate');
        header('Pragma: no-cache');
        readfile($filename);//đọc file
        return;
    
    }// đóng if
?>