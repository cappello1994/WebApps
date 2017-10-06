<?php
/**
 * Created by PhpStorm.
 * User: steph
 * Date: 10/4/17
 * Time: 6:04 PM
 */

include 'dbh.php';

$tmpName = $_FILES['fileToUpload']['tmp_name'];
$csvAsArray = array_map('str_getcsv', file($tmpName));

$count = 0;

foreach($csvAsArray as $row){
    $count++;
    $addUser = "INSERT INTO friend(name, phone, age) VALUES ('$row[0]', '$row[1]', '$row[2]');";
    mysqli_query($conn, $addUser);

}
echo "inserted rows: " . $count;