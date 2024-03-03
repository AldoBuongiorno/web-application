window.onscroll = function() {
    scrollFunction();
};

document.addEventListener('DOMContentLoaded', function() {
    // Ottieni il modulo e il pulsante di invio
    let form = document.getElementById('formSelection');
    let submitButton = document.getElementById('submitButton');
    
    // Funzione per abilitare/disabilitare il pulsante di invio
    function enableSubmitButton() {
        // Verifica se tutte le domande sono state risposte
        let allQuestionsAnswered = true;
        let questionSections = form.querySelectorAll('section');
        questionSections.forEach(function(section) {
            if (section.querySelectorAll('input:checked').length === 0) {
                allQuestionsAnswered = false;
            }
        });
        
        // Abilita o disabilita il pulsante di invio in base allo stato delle risposte
        submitButton.disabled = !allQuestionsAnswered;
    }
    
    // Aggiungi un gestore di eventi change a tutti gli input radio delle domande
    let allInputs = form.querySelectorAll('input[type="radio"]');
    allInputs.forEach(function(input) {
        input.addEventListener('change', enableSubmitButton);
    });
    
    // Controlla lo stato iniziale del pulsante di invio
    enableSubmitButton();
});

/* document.addEventListener('DOMContentLoaded', function () {
    let form = document.getElementById('formSelection');
    let submitButton = document.getElementById('submitButton');
    enableButton(form, submitButton);
}); */

/* function enableButton(forms, submitButton){
    forms.forEach(function(form) {
        form.addEventListener('change', function() {
            // Controlla se tutti i form sono stati compilati
            var allFormsCompleted = Array.from(forms).every(function(form) {
                /* if (form.id == 'formSelection') { 
                    return form.querySelector('input:checked');
                /* }  
            });
            submitButton.disabled = !allFormsCompleted;
        });
    });
} */

/* function enableButton(form, submitButton){
    form.addEventListener('change', function() {
        // Controlla se tutti i form sono stati compilati
        let allFieldsCompleted = Array.from(form.elements).every(function(form) {
            return form.querySelector('input:checked'); // Verifica se il campo ha un valore non vuoto
        });
        submitButton.disabled = !allFieldsCompleted;
    });
} */

/* function raccogliDatiForm() {
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
                /* document.write(xhr.responseText); 
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
 */

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.padding = "15px 10px";
        document.getElementById("navbar").style.backgroundColor = "white";
        
    } else {
        document.getElementById("navbar").style.padding = "25px 10px";
        document.getElementById("navbar").style.backgroundColor = "transparent";
        document.getElementById("navbar-dx").style.padding = "20px 30px 5px 0px";
    }
}