<?php
$sunucu="localhost";
$kullanici="root";
$sifre="";
$dbb="efsaneler";
$db = new mysqli("$sunucu","$kullanici","$sifre","$dbb");

mysqli_query($db, "set names utf8");
?>