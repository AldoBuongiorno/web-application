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
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

function generateCoupon(){
    let stringa="";
    let num;

    let x=[];
    let z=65;
    for (i=0;i<26;i++){
        x.push(String.fromCharCode(z));
        z++;
    }
    for(i=0;i<3;i++){
        num=Math.floor(Math.random() * 26);
        stringa += x[num];
    }
    for(i=0;i<2;i++){
        num=Math.floor(Math.random() * 10);
        stringa += num;
    }
    return stringa;
}