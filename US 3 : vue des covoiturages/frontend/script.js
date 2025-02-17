document.getElementById('covoiturage-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const depart = document.getElementById('depart').value;
    const arrivee = document.getElementById('arrivee').value;
    const date = document.getElementById('date').value;

    // Simuler une recherche de covoiturages
    const results = [
        {
            pseudo: 'JeanD',
            photo: 'jean.jpg',
            note: 4.5,
            places: 2,
            prix: 15,
            dateDepart: '2023-10-25 08:00',
            dateArrivee: '2023-10-25 10:00',
            ecologique: true
        },
        {
            pseudo: 'MarieL',
            photo: 'marie.jpg',
            note: 4.0,
            places: 1,
            prix: 20,
            dateDepart: '2023-10-25 09:00',
            dateArrivee: '2023-10-25 11:00',
            ecologique: false
        }
    ];

    const resultsDiv = document.getElementById('results');
    resultsDiv.innerHTML = '';

    results.forEach(covoiturage => {
        const covoiturageDiv = document.createElement('div');
        covoiturageDiv.className = 'covoiturage';
        covoiturageDiv.innerHTML = `
            <h3>${covoiturage.pseudo}</h3>
            <img src="${covoiturage.photo}" alt="${covoiturage.pseudo}">
            <p>Note : ${covoiturage.note}</p>
            <p>Places restantes : ${covoiturage.places}</p>
            <p>Prix : ${covoiturage.prix}€</p>
            <p>Départ : ${covoiturage.dateDepart}</p>
            <p>Arrivée : ${covoiturage.dateArrivee}</p>
            <p>${covoiturage.ecologique ? 'Voyage écologique' : 'Voyage non écologique'}</p>
            <button onclick="voirDetails('${covoiturage.pseudo}')">Détails</button>
        `;
        resultsDiv.appendChild(covoiturageDiv);
    });
});

function voirDetails(pseudo) {
    alert('Détails du covoiturage de ' + pseudo);
    // Ici, vous pouvez rediriger vers une page de détails ou afficher une modal
}
