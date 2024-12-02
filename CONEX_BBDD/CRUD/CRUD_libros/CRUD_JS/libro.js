document.addEventListener("DOMContentLoaded", function () {
    
    const titulo = document.getElementById("titulo");
    const autor = document.getElementById("autor");
    console.log(titulo.value.length);
    console.log(autor.value.length);

  document.getElementById("formulario").addEventListener("submit", function (event) {
      

      console.log(titulo.value.length);
      console.log(autor.value.length);

      if (titulo.value.length > 70) {
        event.preventDefault();
        alert("El titulo no puede superar los 70 caracteres");
        die();
      }
      else if (autor.value.length > 100) {
        event.preventDefault();
        alert("El nombre del autor no puede superar los 100 caracteres");
        die();
      }
      else{
        alert("listo");
        die()
      }
    });
});
