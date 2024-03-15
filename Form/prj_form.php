<!DOCTYPE html>
<html lang="" itdir="ltr">

<head>
    <link rel="stylesheet" href="./prj_form.css" type="text/css" />
    <script src="prj_form.js" type="text/javascript"></script>
    <script src="../Home/prj_home.js" type="text/javascript" defer></script>
    <meta charset="UTF-8" />
    <meta title="Form" />
    <link rel="icon" type="image/x-icon" href="../Images/imgHome/trainIcon.png">
    <meta name="description" content="Form di domande che produce il consiglio dell'itinerario" />
    <meta name="keywords" content="Itinerario, Viaggio, Meta, Budget" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta author="Gruppo 27" />
    <?php require ("prj_formFunction.php"); ?>

    <title>Form</title>
</head>

<body>
    <?php require ("../Home/prj_header.php"); ?>

    <!--Header del sito-->
    <!-- CHANGE -->

    <!-- PRIMO FORM -->
    <form name="form" id="formSelection" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <section class="img1">
            <div class="container right">
                <div class="container">
                    <p class="numeroDomanda">DOMANDA 1 di 4</p>
                    <p class="domanda">In che periodo dell'anno vorresti viaggiare?</p>
                </div>
                <div class="option">
                    <input type="radio" id="estate" name="periodo" value="Estate" />
                    <label for="estate">
                        <span class="alphabet">A</span> Estate
                    </label><br>
                    <input type="radio" id="inverno" name="periodo" value="Inverno" />
                    <label for="inverno">
                        <span class="alphabet">B</span> Inverno
                    </label><br>
                </div>
            </div>
        </section>

        <!--SECONDO FORM-->
        <section class="img2">
            <div class="container right">
                <div class="container">
                    <p class="numeroDomanda">DOMANDA 2 di 4</p>
                    <p class="domanda">Qual è il tuo budget?</p>
                </div>
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
            </div>
        </section>


        <section class="img3">
            <div class="container right">
                <div class="container">
                    <p class="numeroDomanda">DOMANDA 3 di 4</p>
                    <p class="domanda">Quanti giorni desideri viaggiare?</p>
                </div>
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
            </div>
        </section>

        <section class="img4">
            <div class="container right">
                <div class="container">
                    <p class="numeroDomanda">DOMANDA 4 di 4</p>
                    <p class="domanda">Quale tipologia di viaggio ti interessa?</p>
                </div>
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
            </div>
            <button type="submit" id="submitButton" disabled>Invia</button>
        </section>
    </form>


    <?php

    //  Verifico se sono presenti i dati inviati dal form.
    if (isset ($_POST["periodo"]) && isset ($_POST["budget"]) && isset ($_POST["durata"]) && isset ($_POST["tipologia"])) {

        $selectedPeriod = htmlspecialchars(trim($_POST["periodo"]));
        $selectedBudget = htmlspecialchars(trim($_POST["budget"]));
        $selectedDuration = htmlspecialchars(trim($_POST["durata"]));
        $selectedType = htmlspecialchars(trim($_POST["tipologia"]));

        $id = pickItinerary($selectedPeriod, $selectedBudget, $selectedDuration, $selectedType);
        $_SESSION['id'] = $id;

        if (isset ($_SESSION['authorized'])) {
            $username = $_SESSION['username'];
            insertID($id, $username);
        } else {
            $_SESSION['duplicate'] = false;
            $_SESSION['maxReached'] = false;
        }

        echo ("<script LANGUAGE='JavaScript'>
                        window.location.href = '../Summary/prj_summary.php';
                    </script>");
        exit();
    }
    ?>
    <?php require ("../Home/prj_footer.php"); ?>
</body>

</html>