<?php

require_once "./dbconfig.php";

$id = $_POST["id"];

$sql = $pdo->query("SELECT * FROM studenti WHERE id = $id");
$records =  $sql->fetchAll(PDO::FETCH_ASSOC);


$msg = "Record Counts = ";
$msg .= count($records);
$msg .= "\n\n";

    if($records){
        foreach($records as $results)
      {  
        $msg .= $results["id"];
        $msg .= "\t";
        $msg .= $results["surname"];
        $msg .= "\t";
        $msg .= $results["name"];
        $msg .= "\t";
        $msg .= $results["age"];
        $msg .= "\n";
    
    }
    }


    $responseData = [
        "success" => true,
        "msg" => $msg
    ];
    
    header("Content-Type: application/json");
    echo json_encode($responseData);



?>