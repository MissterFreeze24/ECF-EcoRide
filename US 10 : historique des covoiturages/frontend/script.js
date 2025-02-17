const historique = [
    { id: 1, depart: 'Paris', arrivee: 'Lyon', date: '2023-10-25', statut: 'Terminé' },
    { id: 2, depart: 'Lyon', arrivee: 'Marseille', date: '2023-10-26', statut: 'Annulé' }
];

const historiqueList = document.getElementById('historique-list');
historique.forEach(voyage => {
    const voyageDiv = document.createElement('div');
    voyageDiv.className = 'voyage';
    voyageDiv.innerHTML = `
        <p>ID : ${voyage.id}</p>
        <p>Départ : ${voyage.depart}</p>
        <p>Arrivée : ${voyage.arrivee}</p>
        <p>Date : ${voyage.date}</p>
        <p>Statut : ${voyage.statut}</p>
    `;
    historiqueList.appendChild(voyageDiv);
});
