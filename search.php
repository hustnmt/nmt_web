<html>
<head>
<link rel="stylesheet" type="text/css" href="search_style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 $( "#find" ).keyup(function(){
  fetch();
 });
});

function fetch()
{
 var val = document.getElementById( "find" ).value;
 $.ajax({
 type: 'post',
 url: 'test.php',
 data: {
  get_val:val
 },
 success: function (response) {
  document.getElementById( "search_items" ).innerHTML = response; 
 }
 });
}
</script>

</head>

<body>
<div id="search_box">
 <center>
  <p id="heading">Instant FullText Search System Using Ajax And PHP</p>
  <form method='get' action='fetch.php'>
   <input type="text" name="get_val" id="find" placeholder="Enter Your Text Here">
   <input type="submit" name="search" id="search" value="Search">
  </form>
  <div id="search_items">
  </div>
 </center>
</div>
   
</body>
</html>