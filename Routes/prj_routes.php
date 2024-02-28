<!DOCTYPE html>
<html lang="" itdir="ltr">

    <head>
        <meta charset="UTF-8">
        <meta title="Routes" />
        <meta name="description" content="Area riservata che mostra gli itinerari salvati" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="prj_routes.css">
        <meta author="Gruppo 27" />
        <script src="prj_routes.js" type="text/javascript" defer></script> 
        <?php require("prj_routesFunctions.php");?>
        <title>Train Travel Advisor Routes</title>
    </head>

    <body>

    <?php session_start()?>
    <?php 

        //Connection String
        $connection_string ="host='localhost' dbname='Gruppo27' user='www' password='tw2024'";
        $db = pg_connect($connection_string) or die('Impossibile connettersi al database: ' . pg_last_error());

        if(isset($_SESSION['authorized'])){
            $username = $_SESSION['username'];
            
            $journeys = getJourneys($username, $db);


            $i = 0;
            //get degli itinerari associati agli ID dell'utente
            foreach($journeys as $part){
                
                $infos = getInfo( $part, $db, ("sqlGetInfo". $i) );
                   
                $locationsRaw = $infos["locations"];
                $imagesRaw = $infos["imageLocation"];

                $locationsFiltered[$i] = explode("---", $locationsRaw);
                $locationsFiltered[$i] = array_filter($locationsFiltered[$i]); 

                $imagesFiltered[$i] = explode("---", $imagesRaw);
                $imagesFiltered[$i] = array_filter($imagesFiltered[$i]); 

                $i++;
            } 

            //ottiene un array ($displayImages) con le immagini scelte in maniera casuale per ogni itinerario nel carrello
            $i = 0;
            for($i = 0; $i < count($imagesFiltered); $i++){
                $displayImages[$i] = $imagesFiltered[$i] [rand(0, count($imagesFiltered[$i])-1)]; 
            }

            //ottiene un array ($locationDisplay) con le location delle stringhe per ogni itinerario nel carrello
            $i = 0;
            foreach($locationsFiltered as $subArray){
                $locationDisplay[$i] = implode(",  ", $subArray);
                $i++;
            }
            echo ('
                    <script  src="prj_routes.js" type="text/javascript">
                        console.log("Ciao Frocio");
                    </script>
           ' );
            
            //aggiunge gli elementi nel carrello

            for($i = 0; $i < count($locationDisplay); $i++){  ?> 
                    <script  src="prj_routes.js" type="text/javascript" defer>
                        putElements('<?php echo $locationDisplay[$i]; ?>', '<?php echo $displayImages[$i]; ?>', <?php echo $i + 1; ?>);
                    </script>
                 <?php   
            }  
            
            /* for($i = 0; $i < count($locationDisplay); $i++){
                echo(
                    "<script src='prj_routes.js'>
                     document.addEventListner('DOMContentLoaded', function(){
                        console.log( '" . $locationDisplay[$i] . "');
                        putElements('" . $locationDisplay[$i] . "', '" . $displayImages[$i] . "', '" . $i+1 . "' );
                     });
                     </script>"
                    );
            }  */
            

        }


    ?>







        <!--Header del sito-->

        <header>
            <div class="title">
                <h1>TRAIN TRAVEL ADVISOR</h1>
                <h2>Ecco i tuoi viaggi:</h2>
            </div>
        </header>
        <div class="navigationbar">
            <ul>
                <li><a href="prj_home.html">HOME</a></li>
                <li><a href="prj_form.html">NUOVO VIAGGIO</a></li>
                <li style="float: right"><a href="prj_login.html" >LOGOUT</a></li>
            </ul>
        </div>

        <!-- PRIMO ITINERARIO -->
        <section id="viaggio1" class="img1">
            <div class="container right" id="container1">
                <div class="container">
                    <div class="immagine">
                        <img id="imgItinerario1" alt="Immagine relativa all'itinerario" class="left-image">
                    </div>
                    <div class="text_itinerary">
                        <div class="itinerary" id="itinerario1">
                            <div class="numero_itinerario">
                                <a href="google.com"><p><strong>1º Itinerario: </strong></p></a>
                            </div>
                            <div class="testo_itinerario">
                                <p id="p1"></p>
                            </div>
                        </div>
                    </div>
                    <div class="pulsante">
                        <button class="delete-button" onclick="eliminaItinerario(this)">
                            <img src="../Images/deletebutton.png" alt="Pulsante cancella itinerario" height="50" width="50">
                        </button>
                    </div>
                </div>
            </div>
        </section>       


        <!--SECONDO ITINERARIO-->
        <section id="viaggio2" class="img2">
            <div class="container right" id="container2">
                <div class="container">
                    <div class="immagine">
                        <img id="imgItinerario2" alt="Immagine relativa all'itinerario" class="left-image">
                    </div>
                    <div class="text_itinerary">
                        <div class="itinerary" id="itinerario2">
                            <div class="numero_itinerario">
                                <a href="google.com"><p><strong>2º Itinerario: </strong></p></a>
                            </div>
                            <div class="testo_itinerario">
                                <p id="p2"></p>
                            </div>
                        </div>
                    </div>
                    <div class="pulsante">
                        <button class="delete-button" onclick="eliminaItinerario(this)">
                            <img src="../Images/deletebutton.png" alt="Pulsante cancella itinerario" height="50" width="50">
                        </button>
                    </div>
                </div>
            </div>
        </section>         
        <!--TERZO ITINERARIO-->
        <section id="viaggio3" class="img3">
            <div class="container right" id="container3">
                <div class="container">
                    <div class="immagine">
                        <img id="imgItinerario3"  height="150" alt="Immagine relativa all'itinerario" class="left-image">
                    </div>
                    <div class="text_itinerary">
                        <div class="itinerary" id="itinerario3">
                            <div class="numero_itinerario">
                                <a href="google.com"><p><strong>3º Itinerario: </strong></p></a>
                            </div>
                            <div class="testo_itinerario">
                                <p id="p3"></p>
                            </div>
                        </div>
                    </div>
                    <div class="pulsante">
                        <button class="delete-button" onclick="eliminaItinerario(this)">
                            <img src="../Images/deletebutton.png" alt="Pulsante cancella itinerario" height="50" width="50">
                        </button>
                    </div>
                </div>
            </div>
        </section>         

        <!--QUARTO ITINERARIO-->
        <section id="viaggio4" class="img4">
            <div class="container right" id="container4">
                <div class="container">
                    <div class="immagine">
                        <img id="imgItinerario4" alt="Immagine relativa all'itinerario" class="left-image">
                    </div>
                    <div class="text_itinerary">
                        <div class="itinerary" id="itinerario4">
                            <div class="numero_itinerario">
                                <a href="google.com"><p><strong>4º Itinerario: </strong></p></a>
                            </div>
                            <div class="testo_itinerario">
                                <p id="p4"></p>
                            </div>
                        </div>
                    </div>
                    <div class="pulsante">
                        <button class="delete-button" onclick="eliminaItinerario(this)">
                            <img src="../Images/deletebutton.png" alt="Pulsante cancella itinerario" height="50" width="50">
                        </button>
                    </div>
                </div>
            </div>
        </section>       

        <!--QUINTO ITINERARIO-->
        <section id="viaggio5" class="img5">
            <div class="container right" id="container5">
                <div class="container">
                    <div class="immagine">
                        <img id = "imgItinerario5" alt="Immagine relativa all'itinerario" class="left-image">
                    </div>
                    <div class="text_itinerary">
                        <div class="itinerary" id="itinerario5">
                            <div class="numero_itinerario">
                                <a href="google.com"><p><strong>5º Itinerario: </strong></p></a>
                            </div>
                            <div class="testo_itinerario">
                                <p id="p5"></p>
                            </div>
                        </div>
                    </div>
                    <div class="pulsante">
                        <button class="delete-button" onclick="eliminaItinerario(this)">
                            <img src="../Images/deletebutton.png" alt="Pulsante cancella itinerario" height="50" width="50">
                        </button>
                    </div>
                </div>
            </div>
        </section>  
        
        <!--IMMAGINE PER PADDING-->
        <section id="viaggio6" class="img6">
        </section>       
        

    
        
        
    </body>

</html>