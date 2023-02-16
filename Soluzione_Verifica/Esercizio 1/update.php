<?php
require_once "./dbconfig.php";

$surname = $_POST["surname"];
$name = $_POST["name"];
$age = $_POST["age"];
$id = $_POST["id"];

$sql = "UPDATE studenti SET name= :nm, surname= :sr, age=:ag WHERE id=:id";


$query = $pdo->prepare($sql);
$query->bindParam(':nm', $name, PDO::PARAM_STR);
$query->bindParam(':sr', $surname, PDO::PARAM_STR);
$query->bindParam(':ag', $age, PDO::PARAM_INT);
$query->bindParam(':id', $id, PDO::PARAM_INT);

$query ->execute();


$rowCount = $query->rowCount();

$msg = "Updated successfully! \n";
$msg .= "Row affected = " . $rowCount;

$responseData = [
    "success" => true,
    "msg" => $msg
];

header("Content-Type: application/json");
echo json_encode($responseData);


?>