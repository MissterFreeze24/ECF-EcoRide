document.getElementById('search-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const searchTerm = document.getElementById('search').value;
    alert('Recherche effectuée pour : ' + searchTerm);
    // Ici, vous pouvez ajouter la logique pour rechercher des itinéraires
});
