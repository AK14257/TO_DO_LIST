<?php
include "config.php";
$List=$_POST['List'];
$id=$_POST['id'];
mysqli_query($con,"UPDATE `tbltodo` SET `List` = '$List' WHERE id = $id");
header("Location: index.php");
?>