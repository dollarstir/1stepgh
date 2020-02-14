<?php
include "db.php";
$id= $_GET['pid'];
$dl=mysqli_query($conn,"DELETE FROM  members  WHERE id='$id' ");

if ($dl) 
{

   echo '<script>  window.location="view_member.php"</script>';
} 
else 
{

    echo '<script>  window.location="view_member.php"</script>';
}






?>