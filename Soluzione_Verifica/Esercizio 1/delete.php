<?php
require_once "./dbconfig.php";

$id = $_POST["id"];

$sql = "DELETE FROM studenti WHERE id = :id";

$query = $pdo ->prepare($sql);
$query ->bindParam(':id', $id, PDO::PARAM_INT);
$query ->execute();

$rowCount = $query->rowCount();

$msg = "Deleted successfully! \n";
$msg .= "Row deleted = " . $rowCount;

$responseData = [
    "success" => true,
    "msg" => $msg
];

header("Content-Type: application/json");
echo json_encode($responseData);

?>