<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/slicss.css"/>
	<script src="js/ism-2.2.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <title>Hoşgeldiniz.</title>
   <link rel="stylesheet" href="css/style.css"></link>
  <style>
body { background-color:#3498db; color: #000; padding: 0; margin: 0; }
.container { width: 1048px; margin: auto; padding-top: 1em; }
.container .ism-slider { margin-left: auto; margin-right: auto; }
</style>
</head>
<body>
<div id="ust">
<?php include "baglanti.php";
include "menu.php";
?>	
</div>
<div id="orta"> 
   <?php 
	if(isset($_GET['id']))
                $id=$_GET['id'];
echo'<div class="container" style="padding-top:15px; width:80%;">';
echo'<div class="ism-slider" data-radio_type="thumbnail" id="my-slider">';
echo '<ol>';	
$sql="SELECT * FROM resimler where id like '%3' order by id asc";
$sorgu=mysqli_query($db,$sql);
$say = mysqli_num_rows($sorgu);
if ($say>0)
{
	while($row=mysqli_fetch_array($sorgu))
	{
		echo '<li> <a href="galeri.php?id='.$row['fid'].'">';
		echo '<img style="display: block; margin: 0 auto; height:100%; "';
		echo 'src="'.$row['resim_yolu'].'.jpg'.'"></li>';
	}
}
?>
  </ol>
</div>
</div>
<div id="alt">
<div id=yazi style="width:50%; margin:0 auto; font-family:Calibri; font-size:22px;"">
<?php
$sql="SELECT * FROM yazilar";
$sorgu=mysqli_query($db,$sql);
$say = mysqli_num_rows($sorgu);
if ($say>0)
{
	while($row=mysqli_fetch_array($sorgu))
	{
	echo'<h3 style="font-size:36px;"><b>'.$row['baslik'].'</b></h3><br>';
	echo '<p>'.$row['yazi'].'</p>';
	}
}
?>
</div>
</div>
</body>
</html>
