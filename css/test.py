

# a = float(input("nhap a:"))
# C = 4*a
# # S = a*a

# print("Chu vi la: ",C)

# print("Dien tich la:", S )

# QuangDuong = 1
# ThoiGian = 1
# min = 0
# while QuangDuong != 0 and ThoiGian != 0:
#     QuangDuong = float(input("Nhap quang duong:"))
#     ThoiGian = float(input("Nhap thoi gian:"))
#     if ThoiGian == 0:
#         break
#     VanToc = QuangDuong/ThoiGian 
#     print("Van toc: ",QuangDuong/ThoiGian)
#     if VanToc > min:
#         min = VanToc 
# print(min) 



# x = int(input("nhap x:"))
# y = int(input("nhap y:"))

# if -2<=x<=2 and -3<=y<=2:
#     print("Nam trong vung gach cheo.")
# else:
#     print("Khong nam trong vung gach cheo.")




# a = float(input("nhap a: "))
# b = float(input("nhap b: "))
# chuvi = 2*(a+b)
# dientich = a*b
# chuvi = round(chuvi,2)
# dientich = round(dientich,2)
# print("chu vi :",chuvi)
# print("dien tich :",dientich)




# a = int(input("Nhap canh thu nhat: "))
# b = int(input("Nhap canh thu hai: "))
# c = int(input("Nhap canh thu ba:"))

# if a + b < c or a + c < b or b + c < a:
#     print("Khong ton tai tam giac")
# else:
#     if a == b == c:
#         print("Tam giac deu")
#     elif a == b or b == c or c == a:
#         print("Tam giac can")
#     elif a*a + b*b == c*c or b*b + c*c == a*a or a*a + c*c == b*b:
#         print("Tam giac vuong")
#     else:
#         print("Tam giac thuong")



# a = int(input("Nhap a: "))
# b = int(input("Nhap b: "))
# c = int(input("Nhap c: "))
# d = int(input("Nhap d: "))

# if a >=b and a >= c and a >= d:
#     print("max: ",a)
# elif b >= a and b >= c and b >= d:
#     print("max: ",b)
# elif c >= a and c >= b and c >= d:
# #     print("max: ",c)
# # else:
#     print("max: ",d)

# tong = 0
# i = 0
# while i < 100:
#     tong = tong + i
#     i = i + 1
# print("tong 100 so tu nhien dau tien: ",tong)

# n = int(input("n = "))
# for i in range(1,11):
#     s = n * i
#     print(n," x ",i," = ",s)
# a = int(input("nhap a: "))
# tong = 0
# for i in range(1,11):
#     tong = tong + (a/i)
# print("tich la: ",tong)


# i = 1
# tong = 0
# while i<=30:
#     print("Nhap nhiet do ngay thu ",i," :")
#     a = float(input())
#     tong = tong + a
#     i = i + 1
# trungbinh = tong /30
# print("Nhiet do trung binh: ",trungbinh)


# #phan 1
# N = int(input("Nhap so N: "))
# while N < 10 or N > 99:
#     N = int(input("Nhap lai so N: "))

# #phan 2
# for i in range(0,N):
#     print("*")



# hovaten = input("Nhap ho va ten cua ban: ")
# sohocsinh = int(input("So hoc sinh: "))
# print("Xin chao ban",hovaten,"ban co",sohocsinh,"nguoi ban trong lop")

# n = int(input("Nhap so nguyen n:"))
# i = 0
# tong = 0
# while i <= n:
#     if i % 2 != 0:
#         tong = tong + i
#     i = i+1
# print("tong cac so le:",tong)


# a = float(input("Nhap a:"))
# b = float(input("Nhap b:"))
# c = float(input("Nhap c:"))
# d = float(input("Nhap d:"))
# s = a + b +c + d
# print("Tong bon so la:",s )


# arr = [1,9,5,22,8,3,66,1,4,8,2,34,47,7]
# max = arr[1]
# dem = 0
# for i in arr:
#     dem = dem + 1
#     if i >= max:
#         max = i
#         vitri = dem
# print("phan tu lon nhat:",max)
# print("Vi tri cua phan tu",vitri)

# a = 101
# for i in range(1,101):
#     value = a - i
#     if value != 100 and value%10==0:
#         print()
#     print(value,end='\t')


# M = 9

# if M > 20 and m % 3 == 0:
#     print("true")
# else:
#     print("false")


# v = float(input("Nhap v:"))
# a = float(input("Nhap a:"))
# b = float(input("Nhap b:"))

# s = 0
# ngay = 0
# dem = 0

# while 1:
#     if s < v:
#         s = s + a
#         ngay = ngay + 1
#         if s < v:
#             s = s - b
#             dem = dem + 1
#         else:
#             break
#     else:
#         break
# print("Oc sen len dinh cay sau",ngay,"ngay va",dem,"dem !")


# print("Giai phương trinh ax + b = 0")
# a = int(input("Nhap a:"))
# b = int(input("Nhap b:"))

# if a == 0:
#     if b == 0:
#         print("Phuong trinh vo so nghiem")
#     else:
#         print("Phuong trinh vo nghiem")
# else:
#     if b == 0:
#         print("Phuong trinh co nghiem X = 0")
#     else:
#         print("Phuong trinh co nghiem X ",b/a)


# count = 0
# A = []
# N = int(input("Nhap so nguyen N:"))
# for i in range(0,N):
#     value = int(input("Nhap: gia tri:"))
#     A.append(value)
# k = int(input("Nhap so nguyen k:"))
# sum = 0
# for number in A:
#     sum += number
#     if number > k:
#         count = count + 1
# print("Tong gia tri cua day: ",sum)
# print("so phan tu lon hon",k,"la:",count)


# ht = input("Nhap ho va ten:")
# mdh = input("Nhap ma dong ho")
# dc = input("Nhap dia chi:")
# csm = float(input("Nhap chi so moi:"))
# csc = float(input("Nhap chi so cu:"))

# nsd = csm-csc
# if nsd <=10:
#     sotien = nsd*5000
# else:
#     sotien = nsd*6000
# print("Ho gia dinh:",ht)
# print("So cong to:",mdh)
# print("Chi so moi:",csm)
# print("Chi so cu:",csc)
# print("Thanh tien:",sotien)

# quang_duong = float(input("Nhap quang duong:"))
# don_gia = float(input("Nhap don gia:"))
# if quang_duong < 10:
#     so_tien = quang_duong*don_gia + 5000
# else:
#     so_tien = quang_duong*don_gia+8000

# print("so tien phai tra la:",so_tien)



# str = input("Nhap chuoi :")
# sum = 0
# for letter in str:
#     if '0'<=letter<='9':
#         sum = sum + 1
# print("So phan tu so:",sum)

# def one():
#     print("  *")
#     print(" **")
#     print("* *")
#     print("  *")
#     print("  *")
# def two():
#     print("***")
#     print("  *")
#     print("***")
#     print("*  ")
#     print("***")
# def three():
#     print("***")
#     print("  *")
#     print("***")
#     print("  *")
#     print("***")
# def zero():
#     print("***")
#     print("* *")
#     print("* *")
#     print("* *")
#     print("***")
# print("")
# two()
# print("")
# zero()
# print("")
# two()
# print("")
# one()
# print("")
# print("2023")
# print("")
# two()
# print("")
# zero()
# print("")
# two()
# print("")
# three()


# SoDien = float(input("Nhap so dien:"))
# SoTien = 0
# if SoDien >= 100:
#     SoTien += (SoDien-100) * 5000
#     SoDien = 99
# if 50 <= SoDien < 100:
#     SoTien += (SoDien-50) * 3500
#     SoDien = 49
# if 25 <= SoDien < 50 :
#     SoTien += (SoDien-50) * 2500
#     SoDien = 24
# if 0 <= SoDien < 25:
#     SoTien += SoDien * 1500
# print("So tien phai tra la:",SoTien)



# a = int(input("Nhap a:"))
# b = int(input("Nhap b:"))
# c = int(input("Nhap c:"))

# if abs(a-b) == abs(b-c) or abs(a-c) == abs(c-b):
#     a = a*2
#     b = b*2
#     c = c*2
# else:
#     a = a-2
#     b = b-2
#     c = c-2
# print("gia tri cua a:",a)
# print("gia tri cua b:",b)
# print("gia tri cua c:",c)



# a = int(input("Nhap a (a>2):"))
# S = 1/a
# for i in range(1,101):
#     S = S + 1/(a+i)
# print("Gia tri cua S:",S)

# A = [1,2,6,7,8,15,20]
# tong_chan = 0
# tich_chan = 1
# for number in A:
#     if number%2 == 0:
#         tong_chan += number
#         tich_chan *= number
# print("tong so chan:",tong_chan)
# print("tich so chan:",tich_chan)

# count = 0
# while(1):
#     N = int(input("Nhap N:"))
#     if N == -9999:
#         break
#     if N % 2 != 0:
#         count += 1
# print("So cac phan tu le:",count)


# SoLuong = int(input("Nhap so luong:"))
# if SoLuong < 11:
#     SoTien = SoLuong * 10000
# else:
#     SoTien = SoLuong * 10000
#     SoTien = SoTien - SoTien*0.05
# print("So tien:",SoTien,"VND")

# toan = int(input("Nhap diem toan:"))
# ly = int(input("Nhap diem ly:"))
# hoa = int(input("Nhap diem hoa:"))
# tong = toan + ly + hoa
# if tong >= 25:
#     print("Dau dai hoc khong xet de khong che")
# elif tong >= 21 and toan >= 7 and ly >= 7 and hoa >= 7:
#     print("Hoc sinh nay dau vi cac mon deu tu 7 tro len")
# else:
#     print("khong du chi tieu vao dai hoc")

# s = input("Nhap xau ky tu:")
# Dem = 0
# for letter in s:
#     if 'A'<=letter <='Z':
#         Dem = Dem + 1
# print("So phan tu viet hoa la:",Dem)


# N = int(input("Nhap so luong cau hoi:"))
# sum = 0
# for i in range(0,N):
#     mark = float(input("Nhap diem cau hoi (0 đen 10):"))
#     sum = sum + mark
# print("Tong diem la:",sum)

# cot = 0
# for i in range(0,10):
#     hang = cot
#     for j in range(0,10):
#         print(hang,end="\t")
#         hang = hang + 10
#     print()
#     cot += 1

# a = int(input("Nhap a:"))
# b = int(input("Nhap b:"))
# if a <= b:
#     max = b
# else:
#     max = a
# print("So lon nhat:",max)


# f = []
# for i in range(0,8):
#     a = int(input("nhap phan tu:"))
#     f.append(a)
# print("F co gia tri:",f)
# max = f[0]
# min = f[0]
# for i in range(0,8):
#     if f[i] > max:
#         max = f[i]
#     if f[i] < min:
#         min = f[i]
# print("max =",max)
# print("min =",min)

# trung_binh = float(input("Nhap diem trung binh: "))
# if trung_binh < 5:
#     print("Xep loai: Yeu")
# elif 5 <= trung_binh < 6.5:
#     print("Xep loai: Trung binh")
# elif 6.5<= trung_binh < 8:
#     print("Xep loai: Kha")
# else:
#     print("Xep loai: Gioi")


# def giai_thua(value):
#     s = 1
#     for i in range (1,value+1):
#         s = s * i
#     return s
# n = int(input("Nhap n:"))
# x = int(input("Nhap x:"))
# S = 0
# for i in range(1,n+1):
#     S = S + (pow(x,i)/giai_thua(i))
# print("Tong:",S)

# a = 16
# c = '5'
# e =-10.2
# p = -0.001
# q = 0.01

# print(abs(p)+q)
# print(a+e)
# print(abs(p) == q and c >'4')
# print(not(c<'7'))


# import math
# n = int(input("Nhap n:"))
# S = 1
# for i in range(2,n+1):
#     d = pow(-1,i-1)
#     S = S + d*(i/(i+1))
# print("Gia tri S la:",S)


# arr = [1,6,-6,90,32,45,22,67]
# a = int(input("Nhap a:"))
# b = int(input("Nhap b:"))
# count = 0
# sum = 0
# for i in range(a,b+1):
#     if arr[i]%2 == 0:
#         sum = sum + arr[i]
#         count = count + 1
# print("Tong so chan la:",sum)
# print("So chu so chan la:",count)


# Y = 0
# for i in range(1,51):
#     a = i/(i+1)
#     Y = Y + a
# print(Y)

# N = int(input("Nhap N:"))
# M = int(input("Nhap M:"))
# sum = 0
# for number in range(N,M+1):
#     if number % 3 == 0 and number % 5 == 0:
#         continue10
#     else: 
#         sum = sum + number
 # print("Tong:",sum)
# n = int(input("nhap n: "))
# m = int(input("nhap m: "))
# if m <= n:
#     min = m
# else:
#     min = n
# for i in range(min,m*n+1):
#     if i % m == 0 and i % n == 0:
#         print(i)
#         break

# Diem = int(input("Nhap tong diem: "))
# if Diem < 100:
#     print("Không đạt giải")
# else:
#     print("Đạt giải")

# import math
# x = float(input("Nhap x: "))
# y = float(input("Nhap y: "))
# a = x*x + y*y
# if a >= 10:
#     z = math.sqrt(a)
# else:
#     z = a
# print(z)

# A = int(input("Nhap A:"))
# B = int(input("Nhap B:"))
# count = 0
# for number in range(A,B+1):
#     if number%10==0:
#         count = count + 1
# print("So chu kho chia het cho 10:",count)
# ffmpeg -f dshow -i video="Virtual-Camera" -preset ultrafast -vcodec libx264 -tune zerolatency -b 900k -f mpegts udp://192.168.2.16:5000

# N = int(input("Nhap N:"))
# arr = []
# for i in range(0,N):
#     a = int(input("Nhap gia tri:"))
#     arr.append(a)
# Tong_chan = 0
# Tong_le = 0
# Tong = 0
# k = int(input("Nhap k:"))
# arr_chan  = []
# arr_le = []
# so_lan = 0
# for i in range(0,N):
#     if arr[i]%2 == 0:
#         arr_chan.append(arr[i])
#         Tong_chan += arr[i]
#     else:
#         arr_le.append(arr[i])
#         Tong_le += arr[i]
#     if arr[i] == k:
#         so_lan += 1
#     Tong = Tong + arr[i]
# print("Cac phan tu le:",arr_le)
# print("Cac phan tu chan:",arr_chan)
# print("Tong phan tu:",Tong)
# print("Tong cac phan tu chan:",Tong_chan)
# print("Tong cac phan tu le:",Tong_le)
# print("So phan tu k: ",so_lan)



# import math
# a = float(input("Nhap a"))
# a = math.sqrt(a)
# i = 2
# K = 0
# while(a/i) > 0.001:
#     K = K + (a/i)
#     i = i + 1
# print(K)
    
# str1 = input("Nhap sau thu nhat:")
# str2 = input("Nhap sau thu hai:")

# if str1[-1] == str2[-1]:
#     print("Trung nhau.")
# else:
#     print("Khong trung nhau")


# X = float(input("X="))
# n = int(input("n="))
# rs = pow(X,n)
# print(X,"mu",n,"=",rs)

# n = int(input("n="))
# sum = 0
# print("Tong cac uoc tu 1 toi n: ",end='')
# for i in range(1,n):
#     if n%i == 0:
#         print(i,"+ ",end='')
#         sum = sum + i
# print(n,"= ",end='')
# sum = sum+n
# print(sum)

# n = int(input("Nhap n:"))
# if n%5==0:
#     print("n chia het cho 5")
# else:
#     print("n khong chia het cho 5")

# M = int(input("Nhap M: "))
# N = int(input("Nhap N: "))
# S = 0
# for i in range(M,N+1):
#     S = S + (i/(i+1))
# print("Tong la: ",S)

# S = 1
# for i in range(0,101):
#     if i%2 != 0:
#         S = S*i   
# print("Tich cac so le la: ",S)

# str = input("nhap xau: ")
# arr = []
# for letter in str:
#     if letter.isalpha():
#         print(letter,end="")
#     elif letter.isnumeric():
#         arr.append(int(letter))
# i = 0
# j = 1
# max_len = 0
# print(arr)
# while(j<len(arr)):
#     if arr[j] > arr[i]:
#         j += 1
#     else:
#         max_len = j-i-1
#         max_i = i
#         max_j = j-1
#         i = j
#         j = j + 1
# for i in range(i,j):
#     print(arr[i],end=" ")


# N = int(input("Nhap N:"))
# arr = []
# for i in range(0,N):
#     a = int(input("Nhap gia tri:"))
#     arr.append(a)
# Sum = 0
# Count = 0
# for number in arr:
#     if number < 0:
#         Count = Count + 1
#         Sum = Sum + number
# print("So chu so am:",Sum)
# print("Tong chu so am:",Count)

# n = int(input("Nhap n:"))
# check = False
# for i in range(1,n+1):
#     if i*i == n:
#         check = True
#         break
# if check:
#     print("yes")
# else:
#     print("no")

# name = input("Nhap ten:")
# dodai = len(name)
# i = dodai - 1
# while i>0:
#     if name[i] == ' ':
#         vitri = i
#         break
#     else:
#         i = i - 1
# print(name[vitri+1:dodai])

# from typing import Match


# thang = int(input("Nhap thang: "))
# nam = int(input("Nhap nam: "))
# nam_nhuan = False
# if (nam%4 == 0 and nam%100 != 0) or (nam%400 == 0):
#     nam_nhuan = True
# if thang == 4 or thang == 6 or thang == 9 or thang == 11:
#     print(30)
# elif thang == 2:
#     if nam_nhuan:
#         print(29)
#     else:
#         print(28)
# else:
#     print(31)

# N = int(input("Nhap N:"))
# arr = []
# for i in range(0,N):
#     a = int(input("Nhap gia tri:"))
#     arr.append(a)
# print("List vua nhap:A=",arr)
# min = arr[0]
# max = arr[0]
# sum = 0
# for i in range(0,N):
#     sum += arr[i]
#     if arr[i] < min:
#         min = arr[i]
#     if arr[i] > max:
#         max = arr[i]
# temp1 = min
# temp2 = max
# while (temp1 != temp2):
#     if (temp1 > temp2):
#         temp1 -= temp2
#     else:
#         temp2 -= temp1
# uscln = temp1
# arr.sort()
# print("Tong =",sum)
# print("UCLN(",min,",",max,")=",uscln)
# print("A=",arr)

# n = int(input("n="))
# print('*' *n)
# print('*' + '-' *(n-2) + '*')
# print('*' *n)

# W = int(input("Nhap dung luong CD:"))
# n = int(input("Nhap so luong buc anh:"))
# arr = []
# for i in range(0,n):
#     a = int(input("Nhap fung luong buc anh:"))
#     arr.append(a)
# arr.sort()
# sum = 0
# count = 0
# for picture in arr:
#     if sum + picture < W:
#         sum += picture
#         count += 1
# print("So buc anh toi da:",count)  

# d = float(input("Nhap khoang cach d: "))
# V1 = float(input("Nhap khoang cach V1: "))
# V2 = float(input("Nhap khoang cach V2: "))
# t = d/(V2+V1)
# print("Thoi gian 2 tau gap nhau:",t,"(gio)")


# a = int(input("nhap a:"))
# s = 0
# i = 2
# while(1/(a+i)) > 0.0001:
#     s = s + (1/(a+i))
#     i = i + 1
# print(s)

# str = input("Nhap chuoi: ")
# count = 0
# for letter in str:
#     if letter =='a' or letter == 'A':
#         count = count + 1
# print("Co",count,"ky tu a")

# n = int(input("Nhap n: "))
# i = 2
# listNumbers = []
# # phân tích
# while (n > 1):
#     if (n % i == 0):
#         n = int(n / i)
#         listNumbers.append(i)
#     else:
#         i = i + 1
# # nếu listNumbers trống thì add n vào listNumbers
# if (len(listNumbers) == 0):
#     listNumbers.append(n)
# for number in listNumbers:
#     print(number,end=" ")

# n = int(input("Nhap n: "))
# list_number = []
# sum = 0
# while n > 0:
#     i = n % 10
#     list_number.append(i)
#     sum += i
#     n = n//10
# print(len(list_number))
# print(sum)

# x = float(input("nhap x: "))
# z = float(input("Nhap z: "))
# y = int(input("Nhap y: "))

# A = x + y + z
# B = pow(x,y) - pow(z,y)
# print(A)
# print(B)

# import math
# h = float(input("Nhap chieu cao h: "))
# g = 10
# v = 2*g*h
# v = math.sqrt(v)
# print("Van toc khi cham dat la:",v,"m/s")

# S = input("Nhap xau S:")
# S1 = ''
# sum = 0
# for leter in S:
#     if leter != ' ':
#         S1 = S1 + leter
#     if leter == 'a' or leter == 'A':
#         sum += 1
# print(S1)
# print(sum)

# N = int(input("Nhap so phan tu mang:"))
# arr = []
# for i in range(0,N):
#     a = int(input("Nhap phan tu:"))
#     arr.append(a)
# tong = 0
# so_luong = 0
# for i in range(0,N):
#     if i % 2 != 0:
#         if arr[i] % 5 == 0:
#             tong += arr[i]
#             so_luong += 1
# print("So luong:",so_luong)
# print("Tong chu so:",tong)

# x = float(input("x= "))
# y = float(input("y= "))
# s = x + y
# if s >= 0:
#     z = (x*x)+(y*y*y)
# elif s < 0 and y < x:
#     z = (x*x*x)+(y*y)
# else:
#     z = 1
# print(z)

# S = input("Nhap xau S:")
# S1 = ''
# count = 0
# for letter in S:
#     if 'a'<=letter<='z' or 'A'<=letter<='Z':
#         S1 += letter
#         count = count + 1
# print(S1)
# print("so ky tu chu cai:",count)

# arr = []
# for i in range(0,12):
#     a = int(input("Nhap tien dien:"))
#     arr.append(a)
# tong = 0
# max = arr[1]
# for i in arr:
#     if i > max:
#         max = i
#     tong = tong + i
# trung_binh = tong/12
# duoi_tb = []
# for i in range(0,12):
#     if arr[i] < trung_binh:
#         duoi_tb.append(i+1)
# print("Tong tien dien 12 thang:",tong)
# print("Tien dien trung binh:",trung_binh)
# print("Thang dung nhieu nhat:",max)
# print("Cac thang duoi muc trung binh:",duoi_tb)
a = float(input("Nhap canh a: "))
b = float(input("Nhap canh b: "))
c = float(input("Nhap canh c: "))
loaiTamGiac = "khong phai tam giac"
if a+b>c and a+c>b and b+c>a:
   if a*a==b*b+c*c or b*b==a*a+c*c or c*c==a*a+b*b:
       loaiTamGiac = 'vuong'
   elif a==b and b==c:
       loaiTamGiac = 'deu'
   elif a==b or a==c or b==c:
       loaiTamGiac = 'can'
print(loaiTamGiac)