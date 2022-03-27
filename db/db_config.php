<?php

session_start();

global $mysqli;
$mysqli = new mysqli("localhost", "root", "root", "erkinlance");

if ($mysqli->connect_errno) {
    header('Location: soon.php');
    exit();
}
