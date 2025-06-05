<?php

$conex = mysqli_connect("localhost","root","","lucas_re");

if (!$conex) {
    die("Connection failed: " . mysqli_connect_error());
}
?>