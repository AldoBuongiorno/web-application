window.onscroll = function () {
    scrollFunction();
    scrollFunctionMenu();
};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        //documento allo scroll avvenuto
        document.getElementById("navbar").style.padding = "1px 0px 0px 0px";
    } else {
        //documento alla cima
        document.getElementById("navbar").style.padding = "25px 10px";
        //tagliare immagine
    }
}

function scrollFunctionMenu() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("Menu").style.padding = "10px 10px";
        document.getElementById("Menu").style.backgroundColor = "white";

    } else {
        document.getElementById("Menu").style.padding = "15px 10px";
        document.getElementById("Menu").style.backgroundColor = "transparent";
    }
}

function openMenu() {
    if (document.getElementById("contenuti-link").style.display == "block") {
        document.getElementById("contenuti-link").style.display = "none";
    } else {
        document.getElementById("contenuti-link").style.display = "block";
    }
}

document.addEventListener("click", function (event) {

    var btnMenu = document.getElementById("btnMenu");

    if (!btnMenu.contains(event.target)) {
        document.getElementById("contenuti-link").style.display = "none";
    }
});
