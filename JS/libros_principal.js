
function hid() {
    var ocultado = false;
    console.log("2");
    document.getElementById("agr").addEventListener(
    "click", () => {
        console.log("3");
        document.getElementById("agradecimientos").hidden = false;
      },
      false,
    );
}
