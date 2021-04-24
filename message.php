<?php

session_start();

$server = "localhost";
$username = "root";
$password = "";

//create connection to mysql
$conn = new mysqli($server, $username, $password);

//create connection to messagedb
mysqli_select_db($conn, "messagedb");

//when the user click the button, receive the data from the text fields
$fname = $_POST["fname"];
$email = $_POST["email"];
$message = $_POST["message"];

$submit = " insert into messagetable(fname, email, message) values ('$fname', '$email', '$message')";
    mysqli_query ($conn, $submit);
    header("Location: confirm.html");

?>