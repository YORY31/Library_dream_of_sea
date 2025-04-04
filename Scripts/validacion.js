const form = document.getElementById('contact-form');
form.onsubmit = function(event) {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    if (!name || !email) {
        alert("Por favor, complete todos los campos.");
        event.preventDefault();
    }
};
