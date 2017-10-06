<?php
/**
 * Created by PhpStorm.
 * User: steph
 * Date: 10/4/17
 * Time: 9:10 PM
 */

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "ingeniumLogin";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if ($conn->connect_errno) {
    die("ERROR : -> ".$conn->connect_error);
}