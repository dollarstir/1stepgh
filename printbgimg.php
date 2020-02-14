<?php
include 'db.php';

if(isset($_POST['target'])) {
    $sql = "SELECT background FROM bg WHERE id= 1";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);

    echo $result['background'];

} else {
    echo 'images.jpg';

}
