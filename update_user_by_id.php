<?php
include("db.php");

// $name = $_POST['name'];
// $password = $_POST['password'];

// $sql = "UPDATE users SET name = '$name', password = '$password'";

// if ($conn->query($sql) === TRUE) {
//     $response = array("status" => "success");
//     echo json_encode($response);
// } else {
//     // Error updating user data
//     $response = array("status" => "error", "message" => $conn->error);
//     echo json_encode($response);
// }

$db = new Dbhelp();
$db->conect_database();
$db->update_by_id(24 , "gaza" , "gaza");


?>