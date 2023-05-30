<?php

include("db.php");
$db = new Dbhelp();
$db->conect_database();
$db->get_all_user();


// $sql = "SELECT * FROM users";
// $result = $conn->query($sql);

// $array_users = array();

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {

//         array_push($array_users , $row);

//     }
// } else {
//     echo "No users found.";
// }

// $jeson =  json_encode($array_users);

// echo $jeson;

?>