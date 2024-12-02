document.getElementById("formulario").addEventListener("submit", function (event) {
    
    
    var email = getElementById('email');

    function validarEmail(email) {
        let re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    
        if (!re.test(email.value)) {
          return false
        } else {
          return true
        }
    }
  });
