<html>
<head>

<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<title>Bize ulaşın</title>
	<link rel="stylesheet" href="css/style.css"></link>
	<script src="js/ajax.js"></script>
		
	</head>
	<body>
		<div id="ust">
<?php
include('menu.php');
?>
</div>
<center>
<div id =orta>
</br>
</br>
		
	<div style="font-size:26px; color:black; width36%; font:Calibri;">
	<?php 
	include('baglanti.php');
		$sorgu2 = mysqli_query($db,"select * from hakkinda where id>=2");
		$satir2 = mysqli_fetch_array($sorgu2);
		$say = mysqli_num_rows($sorgu2);
		if ($say>0)
		{
			$b=2;
			while($b<=1+$say) {
				$sorgu2 = mysqli_query($db,"select * from hakkinda where id=$b" );
				$satir2 = mysqli_fetch_array($sorgu2);
				echo $satir2['yazi'];
				echo'<br>';
				$b++;
				}
		}
		?>
		</br>
		</br>
		</div>
		</div>
		<div id="alt" style="float:center;">
		</div>
		</center>
			</body>

</html>