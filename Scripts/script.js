document.addEventListener("DOMContentLoaded", function () {
    const botones = document.querySelectorAll(".ver-detalles");

    botones.forEach(boton => {
        boton.addEventListener("click", function (event) {
            event.preventDefault(); 
            alert("Aún estamos trabajando en esta parte 😊");
        });
    });
});
