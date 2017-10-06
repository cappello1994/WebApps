<?php
/**
 * Created by PhpStorm.
 * User: steph
 * Date: 10/4/17
 * Time: 6:02 PM
 */

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "ingeniumLogin";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_errno) {
    die("ERROR : -> " . $conn->connect_error);
}

$tableName = "friend";

$sqlDropTable = "DROP TABLE '$tableName';";
mysqli_query($conn, $sqlDropTable);

$sqlCreateTable = "CREATE TABLE $tableName (id int(6) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(256), phone VARCHAR (256), age VARCHAR (256))";

//mysqli_query($conn, $sqlCreateTable);

if ($conn->query($sqlCreateTable) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>