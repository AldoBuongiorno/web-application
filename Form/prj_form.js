window.onscroll = function () {
    scrollFunction();
};

document.addEventListener('DOMContentLoaded', function () {
    // Ottieni il modulo e il pulsante di invio
    let form = document.getElementById('formSelection');
    let submitButton = document.getElementById('submitButton');

    // Funzione per abilitare/disabilitare il pulsante di invio
    function enableSubmitButton() {
        // Verifica se tutte le domande sono state risposte
        let allQuestionsAnswered = true;
        let questionSections = form.querySelectorAll('section');
        questionSections.forEach(function (section) {
            if (section.querySelectorAll('input:checked').length === 0) {
                allQuestionsAnswered = false;
            }
        });

        // Abilita o disabilita il pulsante di invio in base allo stato delle risposte
        submitButton.disabled = !allQuestionsAnswered;
    }

    // Aggiungi un gestore di eventi change a tutti gli input radio delle domande
    let allInputs = form.querySelectorAll('input[type="radio"]');
    allInputs.forEach(function (input) {
        input.addEventListener('change', enableSubmitButton);
    });

    // Controlla lo stato iniziale del pulsante di invio
    enableSubmitButton();
});


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

document.addEventListener('DOMContentLoaded', function() {
    const optionGroups = document.querySelectorAll('.option');
    const sections = document.querySelectorAll('section');
    const btn = document.getElementById('submitButton');

    optionGroups.forEach((optionGroup, index) => {
        optionGroup.addEventListener('change', function() {
            const nextSection = sections[index + 1];
            if (nextSection) {
                nextSection.scrollIntoView({ behavior: 'smooth', block: 'center' });
            } else {
                // Se non ci sono più sezioni, abilita il pulsante di invio
                btn.scrollIntoView({ behavior: 'smooth',  block: 'center' });
            }
        });
    });
});

