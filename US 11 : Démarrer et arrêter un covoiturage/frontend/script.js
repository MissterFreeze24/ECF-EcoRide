document.getElementById('demarrer-btn').addEventListener('click', function() {
    alert('Covoiturage démarré !');
    document.getElementById('arreter-btn').disabled = false;
    document.getElementById('demarrer-btn').disabled = true;
});

document.getElementById('arreter-btn').addEventListener('click', function() {
    alert('Covoiturage arrêté !');
    document.getElementById('demarrer-btn').disabled = false;
    document.getElementById('arreter-btn').disabled = true;
});
