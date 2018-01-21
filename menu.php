<?php include('baglanti.php');
$sql="select * from menu";
$sorgu = mysqli_query($db,$sql);
$say = mysqli_num_rows($sorgu);
echo'<div style="text-align:center; width:100%;">';
echo'<nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color:#2c3e50; font-color:#ecf0f1;">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" style="color:#ecf0f1;" href="';
$sorgu1 = mysqli_query($db,"select * from menu where sayID=10" );
$satir1 = mysqli_fetch_array($sorgu1);
echo$satir1['URL'];
echo'">'; 
echo$satir1['baslik'];
echo'</a>';
echo' <div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav" style="margin:0 auto;">';
if ($say>0)
{
$b=20;
while($satir = mysqli_fetch_array($sorgu)) 
{
$sorgu2 = mysqli_query($db,"select * from menu where sayID=$b" );
$satir2 = mysqli_fetch_array($sorgu2);
echo'<li class="nav-item">';
echo'<a class="nav-link" style="color:#ecf0f1;" href="';
echo$satir2['URL'];
echo'">';
echo$satir2['baslik'];
echo'</a>';
echo'</li>';
$b++;
}
}	

echo'<li class="nav-item dropdown">';
echo'<a class="nav-link dropdown-toggle" style="color:#ecf0f1;" href="#"id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
echo'Galeri';
echo'</a>';
echo'<div class="dropdown-menu" style="color:#ecf0f1;" aria-labelledby="navbarDropdownMenuLink">';
$sql = "SELECT * FROM `futbolcular` ORDER BY `id`  ASC";
$sorgu1 = mysqli_query($db,$sql );
$satir1 = mysqli_fetch_array($sorgu1);
$say = mysqli_num_rows($sorgu1);
if ($say>0)
{
$b=2;
while($satir = mysqli_fetch_array($sorgu1)) 
{
echo'<a class="dropdown-item" style="margin:0 auto;" href=galeri.php?id='.($b).'>';
echo $satir['adi']." ".$satir['soyadi'];
echo'</a>';
$b++;
}
}	
echo'</div>';
echo'</li>';
echo'</ul>';
echo'</div>';
echo'</nav>';
echo'</div>';
echo'</div>';



?>
		




