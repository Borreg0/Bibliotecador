document.addEventListener("DOMContentLoaded", function () {
    let passw = document.getElementById("password");
    let passw_conf = document.getElementById("passwordConfirmar");

    let email = document.getElementById("email")

   
    document.getElementById("formulari").addEventListener("submit", function (event) {

        console.log(passw.value);
        console.log(passw_conf.value)

        if (passw.value.length < 8) {

            event.preventDefault();
            alert( 'La contraseña debe tener entre 8 y 20 caracteres');
            die();

        }
        if (passw.value.length > 20) {

            event.preventDefault();
            alert( 'La contraseña debe tener entre 8 y 20 caracteres');
            die();

        }
       
        if(passw.value != passw_conf.value){

            event.preventDefault();
            alert('Las contraseñas no son iguales');
            die();
        }
        
        if (!validarEmail(email)){
            event.preventDefault();
            alert('Tipo de email incorrecto');
            die();
        }
        
        

    });

});

function validarContrasena(contrasena) {
    let regularExpression  = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,20}$/

    if (!regularExpression.test(contrasena.value)) {
      return false
    } else {
      return true
    }
}

function validarEmail(email) {
    let re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*.(\.\w{2,3})+$/

    if (!re.test(email.value)) {
      return false
    } else {
      return true
    }
}


