<?php


include_once "function.php";
$id=$_GET['id'];
$row=find('imgs',$id);
$imgName=['filename'];
unlink("./files/$imgName");
del("imgs",$id);
header("location:manage.php");


?>