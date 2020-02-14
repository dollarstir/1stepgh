<?php

session_start();
include 'core.php';


$dollar = $_GET['dollar'];

if (function_exists($dollar)) {
    $dollar();
   
}
else{
    echo'<div id="mess" style="background-color:red;"><p>Something is wrong</p></div> ';

}
?>