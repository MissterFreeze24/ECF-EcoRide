document.getElementById('voyage-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const depart = document.getElementById('depart').value;
    const arrivee = document.getElementById('arrivee').value;
    const prix = document.getElementById('prix').value;
    const vehicule = document.getElementById('vehicule').value;

    alert('Voyage soumis avec succès !');
    // Envoyer ces données au backend pour enregistrement
});
