<?php
include("config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM tbl_151 WHERE id_xyz=$id");

header("Location:index.php");
?>

