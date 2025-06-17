<?php
include "config.php";
$id=$_GET['id'];
mysqli_query($con,"Delete from `tbltodo` where id=$id");
header("location:index.php");
?>