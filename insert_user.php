<?php

include("db.php");

$db = new Dbhelp();
$db->conect_database();
$db->insert_user("ahmed" , "123456");

// $sql = "INSERT INTO users (name, password) VALUES (?, ?)";

// // if($_SERVER['REQUEST_METHOD'] == "POST"){

// $name = $_Post['name'];
// $password = $_Post['password'];

// // if(isset($name) && isset($password)){

// $p = $conn->prepare($sql);
// $p->bind_param("ss", $name, $email);
// $p->execute();

// $stmt->close();
// $conn->close();

// // }
// // }


?>