<?php

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$array = array('name' => $name, 'email' => $email, 'password' => $password);
echo json_encode($array);
?>