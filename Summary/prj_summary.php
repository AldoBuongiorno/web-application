<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prj_summary.css">
    <script src="prj_summary.js" type="text/javascript"> </script>
    <title>Train Travel Advisor</title>
    <?php require("prj_summaryFunctions.php");?>

</head>
<body>
    <?php session_start()?>

    <?php 

   /*  if(isset($_SESSION['authorized'])){
        //Se l'utente è loggato vbiddogna vedere soltanto logout al posto di accedi/ registrati nella nav bar

        $id = getID();

    }
    //altrimenti se l'utente non è loggato verifichiamo prima se l'id è stato passato correttamente alla pagina dal form
    else if(isset($_SESSION['id'])){
        
        $id = $_SESSION['id'];

    } */

    //get locations
    $id = "EA15P";
/*     $location = getLocation($id);
    print_r($location); */

    //get info


   
    ?>
    <header>
        <div class="title">
            <h1>TRAIN TRAVEL ADVISOR</h1>
            <h2>Compila il form, al resto ci pensiamo noi!</h2>
        </div>
    </header>


    <div class="navigationbarr">
        <ul>
            <li><a href="prj_home.html">HOME</a></li>
            <li><a href="prj_form.html">NUOVO VIAGGIO</a></li>
            <li style="float: right"><a href="prj_signup.php" >REGISTRATI</a></li>
            <li style="float: right"><a href="prj_login.php" >ACCEDI</a></li>
        </ul>
    </div>




    <div class="mainContainer">
        
       <!--  <div class="welcome">In base alle tue scelte ti consigliamo questo viaggio attraverso l'Europa</div>    -->
        
        <div class="info">
            <div class = "outcome">
                <ul id="countriesList">
                    <li id="meta1"> <a href="https://www.example.com">Visita il sito di esempio</a></li>
                    <li id="meta2">1° tappa. LUSSEMBURGO: Mullerthal</li>
                    <li id="meta3">1° tappa. LUSSEMBURGO: Mullerthal</li>
                    <li id="meta4">1° tappa. LUSSEMBURGO: Mullerthal </li>
                    <li id="meta5">1° tappa. LUSSEMBURGO: Mullerthal</li>
                </ul>
            </div>
            <div class="map"> 
                <iframe src="https://www.google.com/maps/d/embed?mid=1rz5t987I69YzmOAKnI-H0M7fHZ4&ehbc=2E312F" width="100%" height="100%"></iframe>
            </div>
        </div>
            
        <div class="journey">    
            <div class="flags">
                <img id="flag1" src="Images/flags/naziflag.png"  width="16.475%vh" height="10.98%vh">
                <img id="flag2" src="Images/flags/naziflag.png"  width="16.475%vh" height="10.98%vh">
                <img id="flag3" src="Images/flags/naziflag.png"  width="16.475%vh" height="10.98%vh">
                <img id="flag4" src="Images/flags/naziflag.png"  width="16.475%vh" height="10.98%vh">
                <img id="flag5" src="Images/flags/naziflag.png"  width="16.475%vh" height="10.98%vh">
            </div>
            <div class="description"> 
                <p id="descriptionText">
                    Inizia la tua avventura nel cuore del Lussemburgo, presso Mullerthal, con i suoi suggestivi sentieri tra gole e foreste incantate. Percorrendo i sentieri tortuosi e immersi nel verde, ti troverai circondato da una natura incontaminata e da panorami mozzafiato. I boschi di Mullerthal offrono un'esperienza unica, dove la tranquillità e la bellezza della natura si fondono armoniosamente.
                    <br><br>
                    Successivamente, immergiti nella natura delle Ardenne in Belgio, dove le foreste lussureggianti e i villaggi pittoreschi ti faranno sentire in un mondo fiabesco. Percorrendo le strade tortuose delle Ardenne, potrai esplorare antichi castelli, ammirare paesaggi idilliaci e assaporare la cucina tradizionale belga nei caratteristici ristoranti locali.
                    <br><br>
                    Prosegui il tuo viaggio verso la Francia per scoprire l'incantevole isola di Mont Saint-Michel, patrimonio mondiale dell'UNESCO. Camminando lungo le strette viuzze in pietra e salendo verso l'abbazia medievale, sarai avvolto dall'atmosfera magica e misteriosa di questo luogo unico al mondo. Ammira il panorama mozzafiato sulla baia circostante e lasciati trasportare dalla storia e dalla bellezza di questo gioiello dell'architettura medievale.
                    <br><br>
                    Da qui, dirigiti verso il pittoresco Loch Lomond in Gran Bretagna, il più grande lago scozzese. Circondato da maestosi picchi montuosi e verdi colline, il Loch Lomond offre paesaggi spettacolari e un'atmosfera tranquilla. Goditi una passeggiata lungo le rive del lago, esplora le isole al suo interno o partecipa a un'escursione nei dintorni per immergerti completamente nella bellezza naturale di questo luogo incantevole.
                    <br><br>
                    Infine, concludi il viaggio ammirando le maestose Scogliere di Moher in Irlanda, che si affacciano sull'Oceano Atlantico. Queste scogliere vertiginose e imponenti offrono uno spettacolo mozzafiato, con le loro pareti di roccia che si ergono per oltre 200 metri sopra il mare. Ammira il panorama panoramico sulla costa irlandese e lasciati catturare dalla bellezza selvaggia e incontaminata di questo luogo magico.
                    <br><br>
                    Sarà un itinerario completo che ti farà scoprire la bellezza e la varietà dell'Europa. Buon viaggio
                </p>
            </div>
        </div>

        
        <!-- LINK MAPPE DA INCLUDERE https://www.eurail.com/content/dam/pdfs/Eurail_Maps_2024.pdf-->
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- INSERIRE CAPTION E NUMBER TEXT IN MANIERA DINAMICA -->
            <div class="mySlides fade">
            <div class="numbertext">1 / 5</div>
            <img src="Images/journeyImages/tivoliGardens.jpg" style="width:100%">
            <div class="text">Caption Text</div>
            </div>
        
            <div class="mySlides fade">
            <div class="numbertext">2 / 5</div>
            <img src="Images/journeyImages/uvac.jpg" style="width:100%">
            <div class="text">Caption Two</div>
            </div>
        
            <div class="mySlides fade">
            <div class="numbertext">3 / 5</div>
            <img src="Images/journeyImages/varsavia.jpg"  style="width:100%">
            <div class="text">Caption Three</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <img src="Images/journeyImages/vienna1.jpg"  style="width:100%">
            <div class="text">Caption Four</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">5 / 5</div>
            <img src="Images/journeyImages/vilnus.jpg"  style="width:100%">
            <div class="text">Caption Five</div>
            </div>
        
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        
        <!-- The dots/circles -->
        <div style="text-align:center">
            <span id= "dot1" class="dot" onclick="currentSlide(1)"></span>
            <span id= "dot2" class="dot" onclick="currentSlide(2)"></span>
            <span id= "dot3" class="dot" onclick="currentSlide(3)"></span>
            <span id= "dot4" class="dot" onclick="currentSlide(4)"></span>
            <span id= "dot5" class="dot" onclick="currentSlide(5)"></span>
        </div>

        
        <div id = "cityInfo" >
        </div>

    </div>
  

    
</body>
</html>


