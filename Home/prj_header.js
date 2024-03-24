window.onscroll = function () {
    scrollFunction();
    scrollFunctionMenu();
};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        //documento allo scroll avvenuto
        document.getElementById("navbar").style.padding = "1px 0px 0px 0px";
        document.getElementById("navbar").style.backgroundColor = "white";

        let numElements = document.getElementsByClassName("text-navbar");

        for (let i = 0; i < numElements.length; i++) {
            numElements[i].style.color = "black";
            numElements[i].addEventListener('mouseover', function(){
                this.style.backgroundColor = "black";
                this.style.color = "white";
            });
            numElements[i].addEventListener('mouseout', function(){
                this.style.backgroundColor = "transparent";
                this.style.color = "black";
            });
        }
    } else {
        //documento alla cima dopo aver scrollato almeno una volta 
        document.getElementById("navbar").style.padding = "25px 10px";
        document.getElementById("navbar").style.backgroundColor = "transparent";

        let numElements = document.getElementsByClassName("text-navbar");
        
        for (let i = 0; i < numElements.length; i++) {
            numElements[i].style.color = "white";
            numElements[i].addEventListener('mouseover', function(){
                this.style.backgroundColor = "white";
                this.style.color = "black";
            });
            numElements[i].addEventListener('mouseout', function(){
                this.style.backgroundColor = "transparent";
                this.style.color = "white";
            });
        }
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
