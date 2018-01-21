<?php include "baglanti.php"; ?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
ul,li{padding:0; margin:0; list-style:none; font:14px Arial}
ul li{padding:5px; background:#eee; margin-bottom:5px}
ul li .new {background:lightgreen}
</style>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
<div><ul>
<?php 
$query=mysqli_query($db,"SELECT * FROM hakkinda ORDER BY id DESC");
while($row=mysqli_fetch_object($query))
{
	echo '<li id="'.$row->id.'">'.$row->yazi.'</li>';
}
?>
</ul></div>
<div id="sonuc"></div>
</body>
</html>