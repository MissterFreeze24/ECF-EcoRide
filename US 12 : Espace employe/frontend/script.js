const avis = [
    { id: 1, pseudo: 'JeanD', note: 4.5, commentaire: 'Très bon conducteur !' },
    { id: 2, pseudo: 'MarieL', note: 3.0, commentaire: 'Ponctuel mais un peu rapide.' }
];

const avisList = document.getElementById('avis-list');
avis.forEach(avis => {
    const avisDiv = document.createElement('div');
    avisDiv.className = 'avis';
    avisDiv.innerHTML = `
        <p>ID : ${avis.id}</p>
        <p>Pseudo : ${avis.pseudo}</p>
        <p>Note : ${avis.note}</p>
        <p>Commentaire : ${avis.commentaire}</p>
        <button onclick="validerAvis(${avis.id})">Valider</button>
        <button onclick="refuserAvis(${avis.id})">Refuser</button>
    `;
    avisList.appendChild(avisDiv);
});

function validerAvis(id) {
    alert(`Avis ${id} validé !`);
}

function refuserAvis(id) {
    alert(`Avis ${id} refusé !`);
}
