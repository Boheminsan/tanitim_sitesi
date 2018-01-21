<?php include "baglanti.php"; 
if($_POST)
{
	$lastid=$_POST["lastid"];
	if(!$lastid)
	{
		$array["hata"]="Geçersiz iþlem!";
	}
	else
	{
		$query=mysqli_query($db,"select * from hakkinda where id>$lastid order by id desc");
		if(mysqli_affected_rows($db))
		{
			while($row=mysqli_fetch_object($query))
			{
				$array["veriler"]= '<li class="new" id="'.$row->id.'">'.$row->yazi.'</li>';
			}
		}
		else
		{
			$array["hata"]="Yeni ekleme yok!";
		}
	}
	echo json_encode($array);
}
?>
