document.getElementById('inscription-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const pseudo = document.getElementById('pseudo').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Ici, vous pouvez ajouter la logique pour créer un compte
    alert('Compte créé pour : ' + pseudo + ' avec l\'email : ' + email);
});
