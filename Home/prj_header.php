<link rel="stylesheet" href="../Home/prj_home.css">
<script src="../Home/prj_home.js" type="text/javascript" defer></script>

<?php session_start() ?>
<header id="navbar">
            <?php
            if(!isset($_SESSION['authorized'])){
                //utente non loggato
                ?>
                <a href="../Home/prj_home.php" id="logo"><img src="../Images/imgHome/LogoSito.png" alt="LogoSito" height="75px" width="75px"></a>
                <div id="navbar-dx">
                    <a href="./prj_home.php">HOME</a>
                    <a href="../Form/prj_form.php">NUOVO VIAGGIO</a>
                    <a href="../User/prj_login.php">ACCEDI</a>
                    <a href="../User/prj_signup.php">REGISTRATI</a>
                </div>
                <?php
            }else{
                //utente loggato
                ?>
                <a href="../Home/prj_home.php" id="logo"><img src="../Images/imgHome/LogoSito.png" alt="logosito" height="100px" width="100px"></a>
                <div id="navbar-dx">
                    <a href="./prj_home.php">HOME</a>
                    <a href="../Form/prj_form.php">NUOVO VIAGGIO</a>
                    <a href="../User/prj_login.php">I MIEI VIAGGI</a>
                    <a href="./prj_logout.php">LOG OUT</a>
                </div> 
                <?php
            }
            ?>
</header>