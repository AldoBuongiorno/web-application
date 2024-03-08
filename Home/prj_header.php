<link rel="stylesheet" href="../Home/prj_header.css">
<script src="../Home/prj_header.js" type="text/javascript" defer></script>

<?php session_start() ?>
<header>
    <?php
    if (!isset($_SESSION['authorized'])) {
        //utente non loggato
        ?>
        <div id="navbar">
            <a href="../Home/prj_home.php" id="logo"><img src="../Images/imgHome/trainIcon.png" alt="LogoSito" class="logoSito"></a>
            <div id="navbar-dx">
                <a href="../Home/prj_home.php">HOME</a>
                <a href="../Form/prj_form.php">NUOVO VIAGGIO</a>
                <a href="../User/prj_login.php">ACCEDI</a>
                <a href="../User/prj_signup.php">REGISTRATI</a>
            </div>
        </div>

        <?php
    } else {
        //utente loggato
        ?>
        <div id="navbar">
            <a href="../Home/prj_home.php" id="logo"><img src="../Images/imgHome/trainIcon.png" alt="logosito" class="logoSito"></a>
            <div id="navbar-dx">
                <a href="../Home/prj_home.php">HOME</a>
                <a href="../Form/prj_form.php">NUOVO VIAGGIO</a>
                <a href="../Routes/prj_routes.php">I MIEI VIAGGI</a>
                <a href="../Home/prj_logout.php">LOG OUT</a>
            </div>
        </div>
        <?php
    }
    ?>

    <?php
    if (!isset($_SESSION['authorized'])) {
        //utente non loggato
        ?>
        <div id="Menu">
            <div class="logo">
                <a href="../Home/prj_home.php" id="logo">
                    <img src="../Images/imgHome/LogoSito.png" alt="logosito" class="logoSito">
                </a>
            </div>
            <div id="dropdown">
                <button class="dropbtn" id="btnMenu" onclick="openMenu();"><img src="../Images/imgHome/menu.png"
                        ></button>
                <div class="dropdown-content" id="contenuti-link">
                    <a href="../Home/prj_home.php">HOME</a>
                    <a href="../Form/prj_form.php">NUOVO VIAGGIO</a>
                    <a href="../User/prj_login.php">ACCEDI</a>
                    <a href="../User/prj_signup.php">REGISTRATI</a>
                </div>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div id="Menu">
            <div class="logo">
                <a href="../Home/prj_home.php" id="logo">
                    <img src="../Images/imgHome/LogoSito.png" alt="logosito" class="logoSito">
                </a>
            </div>
            <div id="dropdown">
                <button id="btnMenu" onclick="openMenu();">
                    <img src="../Images/imgHome/menu.png">
                </button>
                <div class="dropdown-content" id="contenuti-link">
                    <a href="../Home/prj_home.php">HOME</a>
                    <a href="../Form/prj_form.php">NUOVO VIAGGIO</a>
                    <a href="../Routes/prj_routes.php">I MIEI VIAGGI</a>
                    <a href="./prj_logout.php">LOG OUT</a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</header>