<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            padding: 10px;
        }
    </style>

</head>

<body>


    <?php
    session_start();


    if(isset($_POST["destroy"]))
        {
            unset($_SESSION["preferita"]);
            unset($_SESSION["id"]);
            session_destroy();
        }


    if(!isset($_SESSION["id"]))
        $_SESSION["id"] = 1;

    if(isset($_POST["avanti"]))
        $_SESSION["id"]++;

    if(isset($_POST["indietro"]))
        $_SESSION["id"]--;

    if($_SESSION["id"] < 1)
        $_SESSION["id"] = 10;

    if($_SESSION["id"] > 10)
        $_SESSION["id"] = 1;

    


    if(isset($_POST["home"]))
        header("Location: ../index.php");




    if(isset($_POST["contpref"]))
        $_SESSION["preferita"] = $_SESSION["id"];
        

     if(isset($_POST["pref"]))
        header("Location: ./foto_preferita.php"); 

    ?>





    <div>
        <img src="../images/<?php echo $_SESSION["id"]  ?>.jpg" alt="Nessuna foto" style="width: 300px;">
    </div>

    <div>
        <form action="" method="POST">
            <input type="submit" name="indietro" value="Indietro">
            <input type="submit" name="avanti" value="Avanti">
        </form>
    </div>

    <div>
        <form action="" method="POST">
            <input type="submit" name="contpref" value="Contrassegna Preferita">
            <input type="submit" name="pref" value="Foto Preferita">
            <input type="submit" name="home" value="Home">
            <input type="submit" name="destroy" value="Destroy">
        </form>
    </div>




</body>

</html>