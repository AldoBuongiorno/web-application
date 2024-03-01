function eliminaItinerario(button) {
    document.getElementById('btn' + i).addEventListener('click', function(){
        var delete = new 
    });
    let section = button.closest('section');

    // Rimuovi l'intera sezione dell'itinerario dal DOM
    section.parentNode.removeChild(section);

    // Aggiorna gli ID e i numeri degli itinerari rimanenti
    let itinerariRimasti = document.getElementsByClassName('itinerary');
    for (let i = 0; i < itinerariRimasti.length; i++) {
        let nuovoID = 'itinerario' + (i + 1);
        itinerariRimasti[i].id = nuovoID;

        // Aggiorna il testo numerico
        let numeroItinerario = itinerariRimasti[i].getElementsByClassName('numero_itinerario')[0];
        numeroItinerario.innerHTML = '<p><strong>' + (i + 1) + 'º Itinerario: </strong></p></a>';
    }

    // Controlla se non ci sono più itinerari rimasti
    if (itinerariRimasti.length === 0) {
        window.location.href = "prj_form.php";
    }
}