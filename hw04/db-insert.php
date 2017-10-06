<?php
/**
 * Created by PhpStorm.
 * User: steph
 * Date: 10/4/17
 * Time: 6:04 PM
 */

if(isset($_POST['submit'])) {
    include_once 'dbh.php';
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);

    //Error Handlers
    //Check for empty fields
    if (empty($name) || empty($phone) || empty($age)) {
        echo "empty";
        exit();
    } else {
        //check if input characters are valid
        if (!preg_match("/(?:[A-Z][a-z]{0,}[ ]{0,1})+/", $name) || !preg_match("/\d{10}|\d{7}/", $phone) || !preg_match("/\d*/", $age)) {
            echo "ya fuked up";
            exit();
        } else {
            $addUser = "INSERT INTO friend(name, phone, age) VALUES ('$name', '$phone', '$age');";
            mysqli_query($conn, $addUser);
            exit();
            echo "this should work";
        }
    }
}