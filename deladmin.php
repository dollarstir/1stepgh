<?php
include "db.php";
$id= $_GET['pid'];
$dl=mysqli_query($conn,"DELETE FROM  super  WHERE id='$id' ");

if ($dl) 
{

   echo '<script>  window.location="viewadmin.php"</script>';
} 
else 
{

    echo '<script>  window.location="viewadmin.php"</script>';
}






?>