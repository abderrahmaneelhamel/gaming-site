<?php
include "connection.php";
$ID=$_GET['id-product'];
echo $ID;
$sql="DELETE FROM `products` WHERE `id-product`=$ID";
$resultat = mysqli_query($conn,$sql);
if ($resultat) {
    header("Location:dh.php");
  }
?>