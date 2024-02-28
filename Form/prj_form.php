<!DOCTYPE html>
<html lang="" itdir="ltr">
    <head>
        <link rel="stylesheet" href="prj_form.css" type= "text/css"/>
        <script src="prj_form.js" type="text/javascript"></script>
        <meta charset="UTF-8"/>
        <meta title="Form"/>
        <meta name="description" content="Form di domande che produce il consiglio dell'itinerario"/>
        <meta name="keywords" content="Itinerario, Viaggio, Meta, Economico"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta author="Gruppo 27"/>
        <?php require("prj_formFunction.php");?>

        <title>Compila il Form!</title>
    </head>

    <body>
    <?php session_start()?>
        <?php

        /* var_dump($_POST); */
        
        //  Verifico se sono presenti i dati inviati dal form.
        if (isset($_POST["periodo"]) && isset($_POST["budget"]) && isset($_POST["durata"]) && isset($_POST["tipologia"])) {

        //  Salvo i valori dei campi del form in variabili PHP, 
        //  eseguendo l'escaping dei caratteri riservati di HTML
        //  ed eliminando gli spazi a destra e a sinistra della stringa.
        $selectedPeriod = htmlspecialchars(trim($_POST["periodo"]));
        $selectedBudget = htmlspecialchars(trim($_POST["budget"]));
        $selectedDuration = htmlspecialchars(trim($_POST["durata"]));
        $selectedType = htmlspecialchars(trim($_POST["tipologia"]));
    
        $id = pickItinerary($selectedPeriod, $selectedBudget, $selectedDuration, $selectedType);

        if(isset($_SESSION['authorized'])){
            

            $s = insertID($id, trim($_SESSION['username'])); 

            
        } 

    }


    

?>


        <!--Header del sito-->

        <header>
            <div class="title">
                <h1>TRAIN TRAVEL ADVISOR</h1>
                <h2>Compila il form, al resto ci pensiamo noi!</h2>
            </div>
        </header>
        <div class="navigationbar">
            <ul>
                <li><a href="prj_home.html">HOME</a></li>
                <li><a href="prj_form.html">NUOVO VIAGGIO</a></li>
                <li style="float: right"><a href="prj_reg.html" >REGISTRATI</a></li>
                <li style="float: right"><a href="prj_login.html" >ACCEDI</a></li>
            </ul>
        </div>
    
        <!-- PRIMO FORM -->
        <section class="img1">
            <div class="container right">
                <div class="container">
                    <p class="numeroDomanda">DOMANDA 1 di 4</p>
                    <p class="domanda">In che periodo dell'anno vorresti viaggiare?</p>
                <div>
                    <form name="form1" id="formSelection1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <div class="option">
                            <input type="radio" id="estate" name="periodo" value="Estate"/>
                            <label for="estate">
                                <span class="alphabet">A</span> Estate
                            </label><br>
                            <input type="radio" id="inverno" name="periodo" value="Inverno"/>
                            <label for="inverno">
                                <span class="alphabet">B</span> Inverno          
                            </label><br>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!--SECONDO FORM-->
        <section class="img2">
            <div class="container right">
                <div class="container">
                    <p class="numeroDomanda">DOMANDA 2 di 4</p>
                    <p class="domanda">Qual è il tuo budget?</p>
                <div>
                <form name="form2" id="formSelection2" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">    
                    <div class="option">
                        <input type="radio" id="alto" name="budget" value="Alto">
                        <label for="alto">
                            <span class="alphabet">A</span> Alto
                        </label><br>
                        <input type="radio" id="medio" name="budget" value="Medio">
                        <label for="medio">
                            <span class="alphabet">B</span> Medio
                        </label><br>
                        <input type="radio" id="basso" name="budget" value="Basso">
                        <label for="basso">
                            <span class="alphabet">C</span> Basso
                        </label><br>
                    </div>
                </form>
            </div>
        </section>

        <!--TERZO FORM-->
        <section class="img3">
            <div class="container right">
                <div class="container">
                    <p class="numeroDomanda">DOMANDA 3 di 4</p>
                    <p class="domanda">Quanti giorni desideri viaggiare?</p>
                <div>
                <form name="form3" id="formSelection3" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">    
                    <div class="option">
                        <input type="radio" id="5" name="durata" value="5">
                        <label for="5">
                            <span class="alphabet">A</span> 5
                        </label><br>
                        <input type="radio" id="7" name="durata" value="7">
                        <label for="7">
                            <span class="alphabet">B</span> 7
                        </label><br>
                        <input type="radio" id="10" name="durata" value="10">
                        <label for="10">
                            <span class="alphabet">C</span> 10
                        </label><br>
                        <input type="radio" id="15" name="durata" value="15">
                        <label for="15">
                            <span class="alphabet">D</span> 15
                        </label>
                    </div>
                </form>
            </div>
        </section>

        <!--QUARTO FORM-->
        <section class="img4">
            <div class="container right">
                <div class="container">
                    <p class="numeroDomanda">DOMANDA 4 di 4</p>
                    <p class="domanda">Quale tipologia di viaggio ti interessa?</p>
                </div>
                <form name="form4" id="formSelection4" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">    
                    <div class="option">
                        <input type="radio" id="cultura" name="tipologia" value="Cultura">
                        <label for="cultura">
                            <span class="alphabet">A</span> Cultura
                        </label><br>
                        <input type="radio" id="divertimento" name="tipologia" value="Divertimento">
                        <label for="divertimento">
                            <span class="alphabet">B</span> Divertimento
                        </label><br>
                        <input type="radio" id="paesaggistico" name="tipologia" value="Paesaggistico">
                        <label for="paesaggistico">
                            <span class="alphabet">C</span> Paesaggistico
                        </label><br>
                    </div>
                </form>
            </div>
            <button type="submit" id="submitButton" disabled onclick="window.location.href = '../Routes/prj_routes.php';">Invia</button>  <!--Da aggiustare: onclick="window.location.href = 'èrj_summgfonj.php';"--> 
        </section>
    
        
        <!--
            <div class="buttons">
                <a href="prj_summary.html" class="button" disabled>Invia</a>
            </div>
        -->
        
        <!--Footer di Chrisitan-->
        <footer>
            <div class="chi_siamo">
                <div class="titolo_foto">
                    <b>Chi siamo</b><img src="Images/instaicon.png" width="25" height="25">
                </div>
                <div class="testo">
                    <a href="https://www.instagram.com/christian_rosa___?igsh=MTZla3B0YnFvNHdrcQ%3D%3D&utm_source=qr">Rosa Christian </a><br>
                    <a href="https://www.instagram.com/raffaele.calabrese_?igsh=bnNpbmlsdHd0N2p0"> Calabrese Raffaele </a><br>
                    <a href="https://www.instagram.com/salvatore__tartaglione?utm_source=qr&igsh=MXFoNXI4bDQ0bzNwbw==">Tartaglione </a><br>
                    <a href="https://www.instagram.com/aldo_buongiorno?utm_source=qr">Buongiorno Aldo</a><br>
                </div>
            </div>
            <div class="inspiration">
                <div class="titolo">
                    <b>Inspiration</b>
                </div>
                <div class="testo">Il nostro sito nasce dalla fame, <br>fame di viggiare, <br>fame di cultura, <br>fame di conoscenza.</div>
            </div>
            <div class="mete">
                <div class="titolo">
                    <b>Mete raggiungibili</b>
                </div>
                <div class="mete-container">
                    <div class="column">
                        <a href="https://it.wikipedia.org/wiki/Austria">Austria</a>
                        <a href="https://it.wikipedia.org/wiki/Belgio">Belgio</a>
                        <a href="https://it.wikipedia.org/wiki/Bosnia">Bosnia</a> 
                        <a href="https://it.wikipedia.org/wiki/Erzegovina">Erzegovina</a>
                        <a href="https://it.wikipedia.org/wiki/Bulgaria">Bulgaria</a>
                        <a href="https://it.wikipedia.org/wiki/Croazia">Croazia</a>
                        <a href="https://it.wikipedia.org/wiki/Danimarca">Danimarca</a>
                        <a href="https://it.wikipedia.org/wiki/Estonia">Estonia</a>
                        <a href="https://it.wikipedia.org/wiki/Finlandia">Finlandia</a>
                        <a href="https://it.wikipedia.org/wiki/Francia">Francia</a>
                        <a href="https://it.wikipedia.org/wiki/Germania">Germania</a>
                    </div>
                    <div class="column">                    
                        <a href="https://it.wikipedia.org/wiki/Gran_Bretagna">Gran Bretagna</a>
                        <a href="https://it.wikipedia.org/wiki/Grecia">Grecia</a>
                        <a href="https://it.wikipedia.org/wiki/Irlanda">Irlanda</a>
                        <a href="https://it.wikipedia.org/wiki/Lettonia">Lettonia</a>
                        <a href="https://it.wikipedia.org/wiki/Lituania">Lituania</a>
                        <a href="https://it.wikipedia.org/wiki/Macedonia_del_Nord">Macedonia settentrionale</a>
                        <a href="https://it.wikipedia.org/wiki/Montenegro">Montenegro</a>
                        <a href="https://it.wikipedia.org/wiki/Norvegia">Norvegia</a>
                        <a href="https://it.wikipedia.org/wiki/Paesi_Bassi">Paesi Bassi</a>
                        <a href="https://it.wikipedia.org/wiki/Polonia">Polonia</a>
                        
                    </div>
                    <div class="column">
                        <a href="https://it.wikipedia.org/wiki/Portogallo">Portogallo</a>
                        <a href="https://it.wikipedia.org/wiki/Repubblica_Ceca">Repubblica Ceca</a>
                        <a href="https://it.wikipedia.org/wiki/Romania">Romania</a>
                        <a href="https://it.wikipedia.org/wiki/Serbia">Serbia</a>
                        <a href="https://it.wikipedia.org/wiki/Slovacchia">Slovacchia</a>
                        <a href="https://it.wikipedia.org/wiki/Slovenia">Slovenia</a>
                        <a href="https://it.wikipedia.org/wiki/Spagna">Spagna</a>
                        <a href="https://it.wikipedia.org/wiki/Svezia">Svezia</a>
                        <a href="https://it.wikipedia.org/wiki/Svizzera">Svizzera</a>
                        <a href="https://it.wikipedia.org/wiki/Turchia">Turchia</a>
                        <a href="https://it.wikipedia.org/wiki/Ungheria">Ungheria</a>
                    </div>
                </div>
            </div>
        </footer>
        
    </body>

</html>