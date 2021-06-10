function validate_register() {
    let name = document.getElementById("nombre").value;
    let password = document.getElementById("password").value;
    let password_confirmation = document.getElementById("password_confirmation").value;

    let exp_text = /[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}/;
    let exp_pass = /[A-Za-z0-9!?-]{4,12}/;

    if (name === "") {
        alert("El campo nombre esta vacio");
        return false;
    } else if (name.length > 48) {
        alert("El campo nombre esta demasiado largo");
        return false;
    } else if (name.length < 2) {
        alert("El campo nombre esta demasiado corto");
        return false;
    } else if (!exp_text.test(name)) {
        alert("El campo nombre esta mal escrito");
        return false;
    } else if (password === "") {
        alert("El campo contraseña esta vacio");
        return false;
    } else if (password.length < 4) {
        alert("El campo contraseña esta demasiado corto");
        return false;
    } else if (password.length > 12) {
        alert("El campo contraseña esta demasiado largo");
        return false;
    } else if (!exp_pass.test(password)) {
        alert("El campo contraseña esta mal escrito");
        return false;
    } else if (password_confirmation === "") {
        alert("Las contraseña esta vacia");
        return false;
    } else if (!(password === password_confirmation)) {
        alert("Las contraseñas no coinciden");
        return false;
    } else {
        return true;
    }
}

function validate_login() {
    let name = document.getElementById("usuario").value;
    let password = document.getElementById("contrasena").value;

    if (name === "") {
        alert("El campo nombre esta vacio");
        return false;
    } else if (password === "") {
        alert("El campo contraseña esta vacio");
        return false;
    } else {
        return true;
    }
}

function validate_update() {
    let name = document.getElementById("nombre").value;
    let marca = document.getElementById("marca").value;
    let tipo = document.getElementById("tipo").value;
    let precio = document.getElementById("precio").value;
    let descripcion = document.getElementById("descripcion").value;

    let exp_text = /[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,20}/;
    let exp_desc = /[a-zA-ZàâäãåąčćęèêëėįìîïłńòôöõøùûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{10,500}/;
    if (name === "") {
        alert("El campo nombre esta vacio");
        return false;
    } else if (name.length > 20) {
        alert("El campo nombre esta demasiado largo");
        return false;
    } else if (name.length < 2) {
        alert("El campo nombre esta demasiado corto");
        return false;
    } else if (!exp_text.test(name)) {
        alert("El campo nombre esta mal escrito");
        return false;
    } else if (marca === "") {
        alert("El campo marca esta vacio");
        return false;
    } else if (marca.length > 20) {
        alert("El campo marca esta demasiado largo");
        return false;
    } else if (marca.length < 2) {
        alert("El campo marca esta demasiado corto");
        return false;
    } else if (!exp_text.test(marca)) {
        alert("El campo marca esta mal escrito");
        return false;
    } else if (tipo === "") {
        alert("El campo tipo esta vacio");
        return false;
    } else if (tipo.length > 15) {
        alert("El campo tipo esta demasiado largo");
        return false;
    } else if (tipo.length < 2) {
        alert("El campo tipo esta demasiado corto");
        return false;
    } else if (!exp_text.test(tipo)) {
        alert("El campo tipo esta mal escrito");
        return false;
    } else if (!isNaN(precio)) {
        alert("El precio debe ser un numero");
        return false;
    } else if (descripcion === "") {
        alert("El campo descripcion esta vacio");
        return false;
    } else if (descripcion.length > 500) {
        alert("El campo descripcion esta demasiado largo");
        return false;
    } else if (descripcion.length < 10) {
        alert("El campo descripcion esta demasiado corto");
        return false;
    } else if (!exp_desc.test(descripcion)) {
        alert("El campo descripcion esta mal escrito");
        return false;
    } else {
        return true;
    }
}