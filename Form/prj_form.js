window.onscroll = function() {
    scrollFunction();
};

document.addEventListener('DOMContentLoaded', function () {
    var forms = document.querySelectorAll('form');
    var submitButton = document.getElementById('submitButton');
    enableButton(forms, submitButton);
    raccogliDatiForm();
});

function enableButton(forms, submitButton){
    forms.forEach(function(form) {
        form.addEventListener('change', function() {
            // Controlla se tutti i form sono stati compilati
            var allFormsCompleted = Array.from(forms).every(function(form) {
                /* if (form.id == 'formSelection') { */
                    return form.querySelector('input:checked');
                /* }  */
            });
            submitButton.disabled = !allFormsCompleted;
        });
    });
}

function raccogliDatiForm() {
    document.getElementById('submitButton').addEventListener('click', function() {
        // Raccolta dei dati da tutti i form
        var formData1 = new FormData(document.forms['form1']);
        var formData2 = new FormData(document.forms['form2']);
        var formData3 = new FormData(document.forms['form3']);
        var formData4 = new FormData(document.forms['form4']);
        
        // Unione di tutti i dati in un'unica FormData
        var tutteLeDati = new FormData();
        tutteLeDati.append('form1', formData1);
        tutteLeDati.append('form2', formData2);
        tutteLeDati.append('form3', formData3);
        tutteLeDati.append('form4', formData4);
        
        // Invia i dati tramite una richiesta AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'prj_form.php', true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onload = function() {
            // Gestione della risposta
            if (xhr.status >= 200 && xhr.status < 300) {
            // Successo
                console.log('Dati inviati con successo');
                /* document.write(xhr.responseText) ;*/
            } else {
                // Errore
                console.error('Si è verificato un errore durante l\'invio dei dati');
            }
        };
        xhr.send(`${new URLSearchParams(new FormData(document.forms["form1"])).toString()}
            &${new URLSearchParams(new FormData(document.forms["form2"])).toString()}
            &${new URLSearchParams(new FormData(document.forms["form3"])).toString()}
            &${new URLSearchParams(new FormData(document.forms["form4"])).toString()}`);        //Da analizzare
    });



    
}
