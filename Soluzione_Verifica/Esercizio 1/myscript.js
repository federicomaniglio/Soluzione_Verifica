//////////////////////////// INSERT /////////////////////////

function insert(e){

    e.preventDefault();

    let form = document.getElementById("form-insert");
    let formData = new FormData(form);

    let requestOptions = {
        method: 'POST',
        body: formData
    };

fetch("./insert.php", requestOptions)
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                window.alert(result.msg);
            }
        })
        .catch(error => console.log('error', error));
}

document.getElementById("button_insert").addEventListener("click", insert);




//////////////////////////// DELETE /////////////////////////

function delete_id(e){

    e.preventDefault();

    let form = document.getElementById("form-delete");
    let formData = new FormData(form);

    let requestOptions = {
        method: 'POST',
        body: formData
    };

fetch("./delete.php", requestOptions)
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                window.alert(result.msg);
            }
        })
        .catch(error => console.log('error', error));
}

document.getElementById("button_delete").addEventListener("click", delete_id);


//////////////////////////// UPDATE /////////////////////////

function update(e){

    e.preventDefault();

    let form = document.getElementById("form-update");
    let formData = new FormData(form);

    let requestOptions = {
        method: 'POST',
        body: formData
    };

fetch("./update.php", requestOptions)
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                window.alert(result.msg);
            }
        })
        .catch(error => console.log('error', error));
}

document.getElementById("button_update").addEventListener("click", update);



//////////////////////////// SELECT ALL /////////////////////////

function select_all(e){
    e.preventDefault();


    fetch("./select_all.php")
    .then(response => response.json())
    .then(result => {
        if (result.success) {
            window.alert(result.msg);
        }
    })
    .catch(error => console.log('error', error));
}

document.getElementById("button_selectall").addEventListener("click", select_all);




//////////////////////////// SELECT ONE /////////////////////////

function select_one(e){
    e.preventDefault();

    let form = document.getElementById("form-selectone");
    let formData = new FormData(form);

    let requestOptions = {
        method: 'POST',
        body: formData
    };

    fetch("./select_one.php", requestOptions)
    .then(response => response.json())
    .then(result => {
        if (result.success) {
            window.alert(result.msg);
        }
    })
    .catch(error => console.log('error', error));
}

document.getElementById("button_selectone").addEventListener("click", select_one);
