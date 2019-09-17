<?php
require"config.php";
$id=$_GET['delete_id'];
$result=mysqli_query($conn,"DELETE FROM peralatan WHERE id=$id");
 echo "<script> alert('Maklumat Sudah Dihapuskan');
 window.location='papar.php'</script>";
?>