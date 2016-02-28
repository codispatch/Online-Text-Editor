<?php
include('connect.php');
$filename="";
$textarea="";
if($_POST)
{
$filename=$_POST['filename'].".txt";
$filename = str_replace(' ', '_',$filename);
$textarea=$_POST['textarea'];
$query = "update notepad_table set filename='".$filename."',textarea='".$textarea."' where id=1 ;";
$result = mysqli_query($connection,$query);
}else { }

?>