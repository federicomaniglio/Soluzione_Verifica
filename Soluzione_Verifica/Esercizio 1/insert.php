<?php

require_once "./dbconfig.php";

$surname = $_POST["surname"];
$name = $_POST["name"];
$age = $_POST["age"];

$sql = "INSERT INTO studenti (`name`,`surname`,`age`) VALUES (:nm,:sr,:ag)";


$query = $pdo->prepare($sql);
$query->bindParam(':nm', $name, PDO::PARAM_STR);
$query->bindParam(':sr', $surname, PDO::PARAM_STR);
$query->bindParam(':ag', $age, PDO::PARAM_INT);

$query ->execute();

$lastInsertedId = $pdo->lastInsertId();
$msg = "Inserted with success! \n";
$msg .= "Id = " . $lastInsertedId;

$responseData = [
    "success" => true,
    "msg" => $msg
];

header("Content-Type: application/json");
echo json_encode($responseData);

?>