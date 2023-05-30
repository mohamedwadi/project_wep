<?php

include("db.php");
// $sql = "DELETE FROM users WHERE id = ?";
// // $id = 1;
// $p = $conn->prepare($sql);
// $p->bind_param("i", $id);
// $p->execute();

// if ($p->affected_rows > 0) {
//     echo "Data deleted successfully.";
// } else {
//     echo "Error deleting data: " . $p->error;
// }
$db = new Dbhelp();
$db->conect_database();
$db->delete_user_by_id(3);




?>