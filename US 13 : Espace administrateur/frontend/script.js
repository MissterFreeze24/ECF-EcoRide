function suspendreCompte() {
    const compte = prompt('Entrez le pseudo ou l\'email du compte à suspendre :');
    if (compte) {
        alert(`Compte ${compte} suspendu !`);
    }
}
