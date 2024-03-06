window.onscroll = function () {
    scrollFunction();
    scrollFunctionMenu();
};
function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.padding = "1px 0px 0px 0px";
        document.getElementById("navbar").style.backgroundColor = "white";

    } else {
        document.getElementById("navbar").style.padding = "8px 0px 0px 0px";
        document.getElementById("navbar").style.backgroundColor = "transparent";
        /* document.getElementById("navbar-dx").style.padding = "20px 30px 5px 0px"; */
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
