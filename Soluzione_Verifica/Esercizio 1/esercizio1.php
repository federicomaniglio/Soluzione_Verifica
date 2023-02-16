<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            max-width: 300px;
            margin: auto;
        }

        input {
            float: right;
        }

        div {
            padding: 5px;
        }

        h2 {
            text-align: center;
        }

        form {
            padding-bottom: 50px;
        }

        button {
            height: 35px;
            padding-top: 5px;
        }

        .btn {
            text-align: center;
        }
    </style>




</head>

<body>

    <form id="form-insert">
        <h2>Insert</h2>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="surname">Surname</label>
            <input type="text" id="surname" name="surname">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" id="age" name="age">
        </div>
        <div class="btn">
            <button id="button_insert">Insert</button>
        </div>
    </form>

    <form id="form-delete">
        <h2>Delete</h2>
        <div> <label for="id">Id</label>
            <input type="text" id="id" name="id">
        </div>
        <div class="btn"> <button id="button_delete">Delete</button></div>

    </form>

    <form id="form-update">
        <h2>Update</h2>
        <div><label for="id">Id</label>
            <input type="number" id="id" name="id">
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="surname">Surname</label>
            <input type="text" id="surname" name="surname">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" id="age" name="age">
        </div>
        <div class="btn">
            <button id="button_update">Update</button>
        </div>

    </form>

    <form id="form-selectall">
        <h2>Select All</h2>
        <div class="btn">
            <button id="button_selectall">Select all</button>
        </div>
    </form>


    <form id="form-selectone">
        <h2>Select One</h2>
        <div>
            <label for="id">Id</label>
            <input type="text" id="id" name="id">
        </div>
        <div class="btn">
            <button id="button_selectone">Select one</button>
        </div>
    </form>


    <script src="myscript.js"></script>

</body>

</html>