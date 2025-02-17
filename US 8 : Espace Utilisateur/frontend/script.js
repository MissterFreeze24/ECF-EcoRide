document.getElementById('chauffeur-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const plaque = document.getElementById('plaque').value;
    const dateImmatriculation = document.getElementById('date-immatriculation').value;
    const modele = document.getElementById('modele').value;
    const marque = document.getElementById('marque').value;
    const couleur = document.getElementById('couleur').value;
    const places = document.getElementById('places').value;
    const preferences = document.getElementById('preferences').value;

    alert('Vous êtes maintenant chauffeur !');
    // Envoyer ces données au backend pour enregistrement
});

document.getElementById('passager-form').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Vous êtes maintenant passager !');
    // Envoyer ces données au backend pour enregistrement
});
