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

    <div>
        <img id="immagine" src="../images/1.jpg" alt="Nessuna foto" style="width: 300px;">
    </div>

    <div>
        <form action="" method="POST">
            <button id ="indietro" name="indietro">Indietro</button>
            <button id ="avanti" name="avanti">Avanti</button>
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




    <script>
        ///////// AVANTI
        let valore = 1;

        function avanti(e){
            e.preventDefault();
            valore++;
            if(valore === 11)
                valore = 1;
            document.getElementById("immagine").src = "../images/" + valore +".jpg";
            
        }

        document.getElementById("avanti").addEventListener("click", avanti);



        ///////// INDIETRO
        function indietro(e){
            e.preventDefault();
            valore--;
            if(valore === 0)
                valore = 10;
            document.getElementById("immagine").src = "../images/" + valore +".jpg";
        }

        document.getElementById("indietro").addEventListener("click", indietro);
    </script>

</body>

</html>