<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <style>
        div {
            padding-bottom: 15px;
        }

        input[type=number] {
            float: right;
        }

        .bottoni {
            display: flex;
        }

        #center {
            max-width: 300px;
            margin: auto;
        }
    </style>
</head>

<body>


    <div id="center">



        <h2>Dati tabella</h2>

        <form action="" method="POST">
            <div>
                <label for="rows">Righe</label>
                <input type="number" name="rows" required>
            </div>
            <div>
                <label for="columns">Colonne</label>
                <input type="number" name="columns" required>
            </div>
            <div>
                <input type="submit" name="invia" value="Invia">
            </div>

        </form>
        <div class="bottoni">

            <form action="../index.php" method="POST" style="padding-right: 15px;">
                <input type="submit" value="Home">
            </form>

            <form action="" method="POST">
                <input type="submit" name="destroy" value="Destroy">

            </form>

        </div>

    </div>



    <?php
            session_start();

            if (!empty($_POST["rows"]) and !empty($_POST["columns"])) {
               
                    $_SESSION["rows"] = $_POST["rows"];
                    $_SESSION["columns"] = $_POST["columns"];
   
            }



            if(isset($_POST["destroy"]))
            {
                unset($_SESSION["rows"]);
                unset($_SESSION["columns"]);
                session_destroy();
            }




    ?>




    <div style="max-width: fit-content; margin: auto;">

        <table>
            <?php if (isset($_SESSION["rows"]) and isset($_SESSION["columns"])) {
                $contatore = 0;
                for ($i = 0; $i < $_SESSION["rows"]; $i++) {
            ?>
                    <tr>
                        <?php
                        for ($j = 0; $j < $_SESSION["columns"]; $j++) {
                        ?>
                            <td>Maniglio - <?php echo $contatore;
                                            $contatore++; ?></td>


                        <?php
                        }
                        ?>
                    </tr>
            <?php            }
            }
            ?>




        </table>


    </div>


</body>

</html>