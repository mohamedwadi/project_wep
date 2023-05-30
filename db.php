<?php

class Dbhelp{

private $conn;

function conect_database(){
$this->conn = mysqli_connect("localhost" , "root"  , "", "dbuser");
if(mysqli_connect_error()){
    echo "error";
}else{
    return $this->conn;
}
    }

function insert_user($name ,$password)
{
$sql = "INSERT INTO users (name, password) VALUES (?, ?)";
$p = $this->conn->prepare($sql);
$p->bind_param("ss", $name, $password);
$p->execute();
$this->conn->close();

}

function get_all_user(){
$sql = "SELECT * FROM users";
$result = $this->conn->query($sql);

$array_users = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($array_users , $row);
    }
} else {
    echo "No users found.";
}

$jeson =  json_encode($array_users);

echo $jeson;


}

function delete_user_by_id($id){
$sql = "DELETE FROM users WHERE id = ?";
$p = $this->conn->prepare($sql);
$p->bind_param("i", $id);
$p->execute();
if ($p->affected_rows > 0) {
    echo "Data deleted successfully.";
} else {
    echo "Error deleting data: " . $p->error;
}

}

function update_by_id($id , $name , $password){
$sql = "UPDATE users SET name = '$name', password = '$password' WHERE id = '$id'";

if ($this->conn->query($sql) === TRUE) {
    $response = array("status" => "success");
    echo json_encode($response);
} else {
    // Error updating user data
    $response = array("status" => "error", "message" => $this->conn->error);
    echo json_encode($response);
}

}






}

?>