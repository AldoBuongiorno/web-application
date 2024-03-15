<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prj_summary.css">
    <link rel="stylesheet" href="../Home/prj_header.css">
    <script src="prj_summary.js" type="text/javascript"> </script>
    <script src="../Home/prj_home.js" type="text/javascript" defer></script>
    <link rel="icon" type="image/x-icon" href="../Images/imgHome/trainIcon.png">
    <title>Train Travel Advisor</title>
    <?php require ("prj_summaryFunctions.php"); ?>
</head>


<body>
    <?php require ("../Home/prj_header.php"); ?>
    <?php

    if (isset ($_SESSION['id'])) {

        //Dovrebbe mostrare il messaggio nel caso di un numero massimo di itinerari raggiunti
        if ($_SESSION['maxReached'] == true) { ?>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    document.getElementById("full").style.display = "block";
                });
            </script>
            <?php
        }
        if ($_SESSION['duplicate'] == true) { ?>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    document.getElementById("dup").style.display = "block";
                });
            </script>
            <?php
        }

        //connection string
        $connection_string = "host='localhost' dbname='Gruppo27' user='www' password='tw2024'";
        $db = pg_connect($connection_string) or die ('Impossibile connettersi al database: ' . pg_last_error());

        //script per la visualizzazione del main container
        ?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                document.getElementById("main").style.display = "block";
            });
        </script>
        <?php

        $id = $_SESSION['id'];
        //Recupero delle informazioni dal database
        $infos = getInfo($id, $db);

        $locationsRaw = $infos["locations"];
        $imagesRaw = $infos["imageLocation"];
        $descriptionRaw = $infos["description"];
        $geoLocationRaw = $infos["geoLocation"];
        $flagLocationRaw = $infos["flagLocation"];

        //Filtro i dati acquisiti
        $locationsFiltered = explode("---", $locationsRaw);
        $locationsFiltered = array_filter($locationsFiltered);
        $locationsFiltered = array_map('trim', $locationsFiltered);

        $imagesFiltered = explode("---", $imagesRaw);
        $imagesFiltered = array_filter($imagesFiltered);
        $imagesFiltered = array_map('trim', $imagesFiltered);

        $geoLocationFiltered = explode("---", $geoLocationRaw);
        $geoLocationFiltered = array_filter($geoLocationFiltered);
        $geoLocationFiltered = array_map('trim', $geoLocationFiltered);

        $flagLocation = explode("---", $flagLocationRaw);
        $flagLocation = array_filter($flagLocation);
        $flagLocation = array_map('trim', $flagLocation);


        for ($i = 0; $i < count($locationsFiltered); $i++) {
            ?>
            <script type="text/javascript">
                document.addEventListener('DOMContentLoaded', function () {

                    meta = document.getElementById("meta" + "<?php echo $i + 1; ?>");
                    geo = document.getElementById("link" + "<?php echo $i + 1; ?>");
                    flag = document.getElementById("flag" + "<?php echo $i + 1; ?>");
                    dot = document.getElementById("dot" + "<?php echo $i + 1; ?>");
                    container = document.getElementsByClassName("slideshows-container")[0];

                    slide = document.createElement("div");
                    slide.className = "mySlides fade";
                    img = document.createElement("img");
                    img.src = "<?php echo $imagesFiltered[$i]; ?>";
                    img.style.width = "100%";

                    // Aggiungiamo un ID unico all'immagine
                    img.id = "img" + "<?php echo $i + 1; ?>";

                    // Aggiungiamo l'immagine al blocco di slide
                    slide.appendChild(img);

                    // Aggiungiamo il blocco di slide al contenitore degli slide
                    container.appendChild(slide);
                    dot.style.display = "inline-block";

                    geo.innerHTML = "<?php echo $locationsFiltered[$i]; ?>";
                    geo.href = "<?php echo $geoLocationFiltered[$i]; ?>";
                    meta.style.display = "block";
                    geo.style.display = "block";

                    flag.src = "<?php echo $flagLocation[$i]; ?>";
                    flag.style.display = "block";

                });    
            </script>
            <?php
        }

        ?>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function () {
                currentSlide(1);
            });
        </script>
        <?php

        //altrimenti se l'utente va alla pagina solo digitando l'url nella barra di ricerca
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
    <!-- NOT LOGGED -->
    <section id="notLogged" class="img0">
        <div class="containerEmpty">
            <div class="text">
                <div class="numero_itinerario">
                    <p style="color: red;"><strong>Non puoi visitare questa pagina prima di aver risposto al
                            form</strong></p>
                </div>
                <div class="testo_itinerario">
                    <p id="p1">Scopri come</p>
                    <button onclick="window.location.href = '../Home/prj_home.php';" class="compile">HOME </button>
                </div>
            </div>
        </div>
    </section>

    <div id="main" class="mainContainer">

        <div class="fullCart" id="full">
            Ti ricordiamo che il tuo carrello ha raggiunto il limite massimo di itinerari disponibili. Il seguente item
            non verrà salvato. Eliminane prima uno se vuoi salvarlo.
        </div>
        <div class="duplicateElement" id="dup">
            Questo itinerario fa già parte della tua collezione di viaggi.
        </div>
        <div id="Sup">
            <div class="titleInfo">
                <p id="message">mete</p>
            </div>
            <div class="geoInfo" id="cityInfo"></div>
        </div>
        <div class="info">
            <div class="outcome">
                <ul id="countriesList">
                    <li id="meta1"><a id="link1" href="" target="_blank"></a></li>
                    <li id="meta2"><a id="link2" href="" target="_blank"></a></li>
                    <li id="meta3"><a id="link3" href="" target="_blank"></a></li>
                    <li id="meta4"><a id="link4" href="" target="_blank"></a></li>
                    <li id="meta5"><a id="link5" href="" target="_blank"></a></li>
                </ul>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/d/embed?mid=1rz5t987I69YzmOAKnI-H0M7fHZ4&ehbc=2E312F"
                    width="100%" height="100%"></iframe>
            </div>
        </div>



        <div class="journey">
            <div class="flags">
                <img id="flag1" src="" width="16.475%vh" height="10.98%vh">
                <img id="flag2" src="" width="16.475%vh" height="10.98%vh">
                <img id="flag3" src="" width="16.475%vh" height="10.98%vh">
                <img id="flag4" src="" width="16.475%vh" height="10.98%vh">
                <img id="flag5" src="" width="16.475%vh" height="10.98%vh">
            </div>
            <div class="description">
                <p id="descriptionText">
                    <?php echo $descriptionRaw; ?>
                </p>
            </div>
        </div>

        <div class="slideshows-container">
            <!-- INSERIRE CAPTION E NUMBER TEXT IN MANIERA DINAMICA -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div class="dotMenu">
            <span id="dot1" class="dot" onclick="currentSlide(1)"></span>
            <span id="dot2" class="dot" onclick="currentSlide(2)"></span>
            <span id="dot3" class="dot" onclick="currentSlide(3)"></span>
            <span id="dot4" class="dot" onclick="currentSlide(4)"></span>
            <span id="dot5" class="dot" onclick="currentSlide(5)"></span>
        </div>

    </div>

    <?php require ("../Home/prj_footer.php"); ?>

</body>

</html>