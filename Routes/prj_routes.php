<!DOCTYPE html>
<html lang="" itdir="ltr">

<head>
    <meta charset="UTF-8">
    <meta title="Routes" />
    <meta name="description" content="Area riservata che mostra gli itinerari salvati" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prj_routes.css">
    <meta author="Gruppo 27" />
    <?php require("prj_routesFunctions.php"); ?>
    <script src="../Home/prj_home.js" type="text/javascript"></script>
    <title>Routes</title>
</head>

<body>
    <script type="text/javascript">
        let section, p;      
    </script>

    <?php
    require("../Home/prj_header.php");

    //Connection String
    $connection_string = "host='localhost' dbname='Gruppo27' user='www' password='tw2024'";
    $db = pg_connect($connection_string) or die('Impossibile connettersi al database: ' . pg_last_error());

    if (isset($_SESSION['authorized'])) {

        $_SESSION['duplicate'] = false;
        $_SESSION['maxReached'] = false;
        $username = $_SESSION['username'];
        $journeys = getJourneys($username, $db);

        //se non sono presenti viaggi nel carrello l'utente viene notificato opportunamente
        if (empty($journeys)) {
            ?>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    document.getElementById("emptyCart").style.display = "flex";
                    document.getElementById("emptyCart").style.backgroundImage = "url('../Images/imgRoutes/emptyCart.png')";
                });
            </script>
        <?php
        } else {
            $i = 0;
            //get degli itinerari associati agli ID dell'utente
            foreach ($journeys as $part) {

                $infos = getInfo($part, $db, ("sqlGetInfo" . $i));

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
            for ($i = 0; $i < count($imagesFiltered); $i++) {
                $displayImages[$i] = $imagesFiltered[$i][rand(0, count($imagesFiltered[$i]) - 1)];
            }

            //ottiene un array ($displayLocation) con le location delle stringhe per ogni itinerario nel carrello
            $i = 0;
            foreach ($locationsFiltered as $subArray) {
                $displayLocation[$i] = implode(", ", $subArray);
                $i++;
            }
            // Applica la funzione trim a ciascun elemento di $displayImages e  per non aver url malformati
            $displayImages = array_map('trim', $displayImages);
            $displayLocation = array_map('trim', $displayLocation);

            //aggiunge gli elementi nel carrello
            for ($i = 0; $i < count($displayLocation); $i++) {
                ?>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {

                        section = document.getElementById("viaggio" + "<?php echo $i + 1; ?>");
                        p = document.getElementById("p" + "<?php echo $i + 1; ?>");

                        section.style.display = "flex";
                        p.innerHTML = " <?php echo $displayLocation[$i]; ?>";
                        section.style.backgroundImage = "url('" + "<?php echo $displayImages[$i]; ?>" + "')";

                    });    
                </script>
            <?php
            }
        }

    } else {
        ?>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    document.getElementById("notLogged").style.display = "flex";
                    document.getElementById("notLogged").style.backgroundImage = "url('../Images/imgRoutes/emptyCart.png')";
                });
            </script>
        <?php
    }


    ?>
    <!-- EMPTY CART -->
    <section id="emptyCart" class="img0">
        <div class="containerEmpty">
            <div class="text">
                <div class="numero_itinerario">
                    <p id="p-1"><strong>Non hai Itinerari salvati</strong></p>
                </div>
                <div class="testo_itinerario">
                    <p id="p0">Compila il form per scoprire quale itinerario è ideale per te!</p>
                    <button onclick="window.location.href = '../Form/prj_form.php';" class = "compile">FORM </button>
                </div>
            </div>
        </div>
    </section>

    <!-- NOT LOGGED -->
    <section id="notLogged" class="img0">
        <div class="containerEmpty">
            <div class="text">
                <div class="numero_itinerario">
                    <p style="color: red;"><strong>Non puoi visitare questa pagina prima di aver risposto al form.</strong></p>
                </div>
                <div class="testo_itinerario">
                    <p>Scopri come</p>
                    <button onclick="window.location.href = '../Home/prj_home.php';" class="compile">HOME </button>
                </div>
            </div>
        </div>
    </section>


    <!-- PRIMO ITINERARIO -->
    <section id="viaggio1" class="img1">
        <div class="container right" id="container1">
            <div class="text">
                <div class="numero_itinerario">
                    <p><strong>1º ITINERARIO:</strong></p>
                </div>
                <div class="testo_itinerario">
                    <p id="p1"></p>
                </div>
            </div>
            <div class="options">
                <div class="details">
                    <form method="post" id="details1" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <!-- if btn is clicked set session variable id and go to summary  -->
                        <button type="submit" name="btnDetails1">
                            <img src="../Images/imgRoutes/plusIcon.png" alt="Pulsante dettagla">
                        </button>
                    </form>
                </div>
                <div class="delete">
                    <form method="post" id="delete1 " action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <!-- if btn is clicked delete journey from db an refresh page -->
                        <button type="submit" name="btnDelete1" onclick="reloadPage()">
                            <img src="../Images/imgRoutes/deletebutton.png" alt="Pulsante cancella itinerario">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--SECONDO ITINERARIO-->
    <section id="viaggio2" class="img2">
        <div class="container right" id="container2">
            <div class="text">
                <div class="numero_itinerario">
                    <p><strong>2º ITINERARIO:</strong></p>
                </div>
                <div class="testo_itinerario">
                    <p id="p2"></p>
                </div>
            </div>
            <div class="options">
                <div class="details">
                    <form method="post" id="details2" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <!-- if btn is clicked set session variable id and go to summary  -->
                        <button type="submit" name="btnDetails2">
                            <img src="../Images/imgRoutes/plusIcon.png" alt="Pulsante dettagla">
                        </button>
                    </form>
                </div>
                <div class="delete">
                    <form method="post" id="delete2 " action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <!-- if btn is clicked delete journey from db an refresh page -->
                        <button type="submit" name="btnDelete2" onclick="reloadPage()">
                            <img src="../Images/imgRoutes/deletebutton.png" alt="Pulsante cancella itinerario">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--TERZO ITINERARIO-->
    <section id="viaggio3" class="img3">
        <div class="container right" id="container3">
            <div class="text">
                <div class="numero_itinerario">
                    <p><strong>3º ITINERARIO:</strong></p>
                </div>
                <div class="testo_itinerario">
                    <p id="p3"></p>
                </div>
            </div>
            <div class="options">
                <div class="details">
                    <form method="post" id="details3" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <!-- if btn is clicked set session variable id and go to summary  -->
                        <button type="submit" name="btnDetails3">
                            <img src="../Images/imgRoutes/plusIcon.png" alt="Pulsante dettagla">
                        </button>
                    </form>
                </div>
                <div class="delete">
                    <form method="post" id="delete3" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <!-- if btn is clicked delete journey from db an refresh page -->
                        <button type="submit" name="btnDelete3" onclick="reloadPage()">
                            <img src="../Images/imgRoutes/deletebutton.png" alt="Pulsante cancella itinerario">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--QUARTO ITINERARIO-->
    <section id="viaggio4" class="img4">
        <div class="container right" id="container4">
            <div class="text">
                <div class="numero_itinerario">
                    <p><strong>4º ITINERARIO:</strong></p>
                </div>
                <div class="testo_itinerario">
                    <p id="p4"></p>
                </div>
            </div>
            <div class="options">
                <div class="details">
                    <form method="post" id="details4" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <!-- if btn is clicked set session variable id and go to summary  -->
                        <button type="submit" name="btnDetails4">
                            <img src="../Images/imgRoutes/plusIcon.png" alt="Pulsante dettagla">
                        </button>
                    </form>
                </div>
                <div class="delete">
                    <form method="post" id="delete4" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <!-- if btn is clicked delete journey from db an refresh page -->
                        <button type="submit" name="btnDelete4" onclick="reloadPage()">
                            <img src="../Images/imgRoutes/deletebutton.png" alt="Pulsante cancella itinerario">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--QUINTO ITINERARIO-->
    <section id="viaggio5" class="img5">
        <div class="container right" id="container5">
            <div class="text">
                <div class="numero_itinerario">
                    <p><strong>5º ITINERARIO:</strong></p>
                </div>
                <div class="testo_itinerario">
                    <p id="p5"></p>
                </div>
            </div>
            <div class="options">
                <div class="details">
                    <form method="post" id="details5" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <!-- if btn is clicked set session variable id and go to summary  -->
                        <button type="submit" name="btnDetails5">
                            <img src="../Images/imgRoutes/plusIcon.png" alt="Pulsante dettagla">
                        </button>
                    </form>
                </div>
                <div class="delete">
                    <form method="post" id="delete5" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <!-- if btn is clicked delete journey from db an refresh page -->
                        <button type="submit" name="btnDelete5" onclick="reloadPage()">
                            <img src="../Images/imgRoutes/deletebutton.png" alt="Pulsante cancella itinerario">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require("../Home/prj_footer.php"); ?>

    <?php
    if (isset($_SESSION['authorized'])) {

        journeyOptions($journeys, $username, $db);
    }

    ?>

</body>

</html>