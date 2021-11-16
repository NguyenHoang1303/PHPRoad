<?php
$data = json_decode(file_get_contents("php://input"), true);
$roads = $data['roads'];
$districts = $data['districts'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sqlDropTables = "DROP TABLE IF EXISTS roads,districts";
$conn->query($sqlDropTables);

$sqlCreatDistricts = "CREATE TABLE districts(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(350) NOT NULL)
    CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
    ";


$sqlCreatRoads = "CREATE TABLE roads(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(350) NOT NULL,
    district_id INT(4) NOT NULL,
    description VARCHAR(350) NOT NULL,
    status INT(4) NOT NULL,
    created_at DATETIME DEFAULT NULL )
   CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

    ";
$sqlDistricts = "";
$sqlRoads = "";
$obj = new stdClass();
$isDistricts = $conn->query($sqlCreatDistricts);
$isRoad = $conn->query($sqlCreatRoads);


if($isDistricts){
    $stmt = $conn->prepare("INSERT INTO districts (id, name) VALUES (?, ?)");
    $stmt->bind_param("ss", $id, $name);
    foreach ($districts as $d) {
        $name = $d['name'];
        $id = $d['id'];
        $stmt->execute();
    }
    $stmt->close();
}else{
    $obj->creatTableDistricts = "Create Fail";
}

if ($isRoad) {
    $stmt = $conn->prepare("INSERT INTO roads (name, district_id, description,status,created_at) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $district_id,  $description, $status, $created_at);
    foreach ($roads as $r) {
        $name = $r['name'];
        $district_id = $r['district'];
        $description = $r['description'];
        $status = $r['status'];
        $created_at = $r['created_at'];
        $stmt->execute();
    }
    $stmt->close();
} else {
    $obj->creatTableRoads = "Error creating table: " . $conn->error;
}

echo json_encode($obj);

$conn->close();

