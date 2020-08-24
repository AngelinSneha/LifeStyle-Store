<?php
$con = mysqli_connect("localhost", "root", "", "lifestylestore","3308")or die($mysqli_error($con));
if(!isset($_SESSION)) {
    session_start();
}
?>
