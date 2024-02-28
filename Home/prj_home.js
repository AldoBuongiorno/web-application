/*SCRIPT PER LA SLIDESHOW*/

let slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}

/* SCRIPT PER LA NAV BAR */

window.onscroll = function() {
    scrollFunction();
};
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