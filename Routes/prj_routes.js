document.addEventListener('DOMContentLoaded', function () {
    putElements("location", "imageSrc", 0);
});


/* function eliminaItinerario(button) {
    var section = button.closest('section');

    // Rimuovi l'intera sezione dell'itinerario dal DOM
    section.parentNode.removeChild(section);

    // Aggiorna gli ID e i numeri degli itinerari rimanenti
    var itinerariRimasti = document.getElementsByClassName('itinerary');
    for (var i = 0; i < itinerariRimasti.length; i++) {
        var nuovoID = 'itinerario' + (i + 1);
        itinerariRimasti[i].id = nuovoID;

        // Aggiorna il testo numerico
        var numeroItinerario = itinerariRimasti[i].getElementsByClassName('numero_itinerario')[0];
        numeroItinerario.innerHTML = '<a href="google.com"><p><strong>' + (i + 1) + 'º Itinerario: </strong></p></a>';
    }

    // Controlla se non ci sono più itinerari rimasti
    if (itinerariRimasti.length === 0) {
        window.location.href = "prj_form.php";
    }
} */



function putElements(location, imageSrc, i) {
    
    let section = document.getElementById("viaggio" + i);
    let p = document.getElementById("p" + i);
    let image = document.getElementById("img" + i);

    /* section.style.display = "block";
    p.innerHTML = location;
    image.style.backgroundImage = imageSrc; */
}
