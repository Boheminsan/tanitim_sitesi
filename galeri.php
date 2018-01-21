<?php include "baglanti.php";
include "menu.php";
?>
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
    <title>Galeri</title>
   	<style>
body { background-color:#3498db; color: #000; padding: 0; margin: 0; }
.container { width: 1048px; margin: auto; padding-top: 1em; }
.container .ism-slider { margin-left: auto; margin-right: auto; }
</style>
</head>
<body>
<div id="ust">
</div>
<div id="orta"> 
   <?php 
	if(isset($_GET['id']))
                $id=$_GET['id'];
echo'<div class="container" style="padding-top:5px;">';
echo'<div class="ism-slider" data-radio_type="thumbnail" data-transition_type="zoom" data-play_type="once-rewind" data-image_fx="zoompan" id="my-slider">';
echo '<ol>';	
$sql="SELECT * FROM resimler where fid=$id order by id asc";
$sorgu=mysqli_query($db,$sql);
$say = mysqli_num_rows($sorgu);
if ($say>0)
{
	while($row=mysqli_fetch_array($sorgu))
	{
		echo '<li> <img style="display: block; margin: 0 auto; height:100%; "';
		echo 'src="'.$row['resim_yolu'].'.jpg'.'">';
		echo '<div class="ism-caption ism-caption-0">'.$row['resim_yazi'].'</div>'.'</li>';
	}
}
?>
  </ol>
</div>
</div>
</div>
<div id="alt">
</div>
</body>
</html>
