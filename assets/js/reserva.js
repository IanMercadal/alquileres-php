function mostrarForm() {
    let divInfo = document.getElementById("columna-info");
    let divForm = document.getElementById("columna-reserva");
    divInfo.classList.toggle("hidden");
    divForm.classList.remove("hidden");
}

function enviarForm(e) {
    e.preventDefault();
    console.log("hola")
}