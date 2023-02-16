<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
session_start();

        if(isset($_SESSION["preferita"]))
        {
            $filename = "../images/" . $_SESSION["preferita"] . ".jpg";
            if(file_exists($filename))
                header("Location: $filename");
            else
                echo "Il file non esiste!";            
        }
        else
            echo "Nessuna foto contrassegnata"



?>


<form action="./esercizio3.php" method="POST">
    <input type="submit" value="torna indietro">
</form>

</body>
</html>