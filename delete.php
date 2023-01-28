<?php

include_once("config.php");

$npp = $_GET['npp'];

$result = mysqli_query($mysqli, "DELETE FROM tpegawai WHERE npp=$npp");

header("Location:index.php");
?>