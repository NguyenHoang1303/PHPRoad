<?php

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : false;
$district = isset($_GET['district']) ? $_GET['district'] : false;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";



$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
if ($keyword && $district && $district != -1){
    $sql = "SELECT * FROM roads WHERE name LIKE '%$keyword%' AND district_id = '$district'";
}else if ($keyword){
    $sql = "SELECT * FROM roads WHERE name LIKE '%$keyword%'";
}else if ($district && $district!= -1){
    $sql = "SELECT * FROM roads WHERE district_id='$district'";
}
else{
    $sql = "SELECT * FROM roads";
}
$result = $conn->query($sql);

header('Content-Type: application/json; charset=utf-8');
$obj = new stdClass();
if ($result->num_rows > 0){
    $row = array();
    http_response_code(201);
    while ($r = $result->fetch_assoc()){
        $row[] = $r;
    }
    $obj->status = 200;
    $obj->message = "Everything is going to be ok";
    $obj->data = $row;

} else {
    $obj->message = "Fail";
    $obj->data = [];
}
echo json_encode($obj);
$conn->close();

