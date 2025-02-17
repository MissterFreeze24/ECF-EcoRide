document.getElementById('filter-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const ecologique = document.getElementById('ecologique').checked;
    const prixMax = document.getElementById('prix-max').value;
    const dureeMax = document.getElementById('duree-max').value;
    const noteMin = document.getElementById('note-min').value;

    // Ici, vous pouvez appliquer les filtres aux résultats de covoiturages
    alert('Filtres appliqués : Écologique=' + ecologique + ', Prix max=' + prixMax + ', Durée max=' + dureeMax + ', Note min=' + noteMin);
});
