document.addEventListener('DOMContentLoaded', function () {

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


  window.onscroll = function () {
      scrollFunction1();
  };
});

 
//Chiamata per le geolocalizzazione
document.addEventListener("DOMContentLoaded", getLocation);

// Chiamata alla funzione currentSlide all'avvio della pagina
document.addEventListener('DOMContentLoaded', function() {
    currentSlide(1); 
});



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

function getLocation() {
	if (navigator.geolocation) {
	  navigator.geolocation.getCurrentPosition(showPosition);
	} else {                                                                                        //else il browser non supporta le API di geolocalizzazione
	  document.getElementById("cityInfo").innerHTML = "Geolocation is not supported by this browser.";
	}
}

function showPosition(position) {

  //Definisco la variabile per la scrittura nel div desiderato
  let x = document.getElementById("cityInfo");

  //Acquisico le coordinate geografiche
  const latitude = position.coords.latitude;
  const longitude = position.coords.longitude;

  //Preparo la query per la decrittazione JSON
  //preparo l'URL
  let query = "latitude=" + latitude + "&longitude=" + longitude + "&localityLanguage=en";
  const  bigdatacloud_api = "https://api.bigdatacloud.net/data/reverse-geocode-client?" + query;

  //Preparo la richiesta AJAX
  const Http = new XMLHttpRequest();
  Http.open("GET", bigdatacloud_api);
	Http.onreadystatechange = function() {                            //acquisice la risposta 
		if (this.readyState == 4 && this.status == 200) {               //4 = mandata correttamente, 200 = andata a buon fine sul server
      //parsing della stringa nel formato JSON
      var myObj = JSON.parse(this.responseText);
      x.innerHTML="POSIZIONE UTENTE: " + myObj.city;
    }
	}
  Http.send();                                                    //send invia la richiesta
}

function scrollFunction1() {
  
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
    //documento alla cima
    document.getElementById("navbar").style.padding = "25px 10px";
    document.getElementById("navbar").style.backgroundColor = "white";

    let numElements = document.getElementsByClassName("text-navbar");
    
    for (let i = 0; i < numElements.length; i++) {
        numElements[i].style.color = "black";
        numElements[i].addEventListener('mouseover', function(){
            this.style.backgroundColor = "black";
            this.style.color = "white";
        });
        numElements[i].addEventListener('mouseout', function(){
            this.style.backgroundColor = "white";
            this.style.color = "black";
        });
    }
}
}