<!DOCTYPE html>
    <html lang="it" dir="ltr">
        <head>
            <link rel="stylesheet" href="prj_login.css" type="text/css"/>
            <script src="prj_login.js" type="text/javascript">  </script>
            <meta charset="UTF-8"/>
            <meta title="Signup"/>
            <meta name="description" content="signupPage "/>
            <meta name="keywords" content="signup"/>
            <meta author="Gruppo 27"/>
            <meta keywork="signup"/>
            <title>Login</title>
            <?php require('prj_authFunctions.php');?>
        </head>

        <body>

            <div class="title">
                <a href="prj_home.php"><h1>TRAIN TRAVEL ADVISOR</h1> </a>                  
            </div>

            <div class="containerSignup form-container" id="container">
                <form name="signupForm" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" onsubmit="return validateFormSignup()">                   
                    <h1>Registrati</h1> 
                    <span>Inserisci i tuoi dati</span> 
                    <input type="text"name="name" id="name" placeholder="Nome" <?php if (array_key_exists('name',$_POST)) { echo "value='", htmlspecialchars($_POST['name']), "'"; } ?>/>
                    <input type="text" name="surname" id="surname" placeholder="Cognome" <?php if (array_key_exists('surname',$_POST)) { echo "value='", htmlspecialchars($_POST['surname']), "'"; } ?>/>
                    <input type="email" name="email" id="email" placeholder="Email" <?php if (array_key_exists('email',$_POST)) { echo "value='", htmlspecialchars($_POST['email']), "'"; } ?>/>
                    <input type="text" name="usernameSignup" id="usernameSignup" placeholder="Username" <?php if (array_key_exists('usernameSignup',$_POST)) { echo "value='", htmlspecialchars($_POST['usernameSignup']), "'"; } ?>/>
                    <input type="password" name="passwordSignup" id="passwordSignup" placeholder="Password" <?php if (array_key_exists('passwordSignup',$_POST)) { echo "value='", htmlspecialchars($_POST['passwordSignup']), "'"; } ?>/>            
                    <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Conferma Password" <?php if (array_key_exists('passwordConfirm',$_POST)) { echo "value='", htmlspecialchars($_POST['passwordConfirm']), "'"; } ?>/><br>
                    <span id="signupErrorSpan"></span>
                    <button type="submit" name="signupBtn" id="signupBtn">REGISTRATI</button>
                    <button id="switchSignup" type="button" onclick="window.location.href = 'prj_login.php';"><Login></button>                    
                </form>
            </div> 

            <script type="text/javascript"> 
                //genera il primo sfondo
                document.body.style.backgroundImage = generateBackground();          
            </script>

            <?php

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $username = $_POST['usernameSignup'];
                $email = $_POST['email'];
                $password = $_POST['passwordSignup']; 
                
                if(! check_domain($email)){
                    echo (" <script LANGUAGE='JavaScript'>
                            let message = document.getElementById('signupErrorSpan');
                            message.innerHTML = '$email non è un indirizzo valido. Riprovare';
                            </script> "); 
                    exit();
                }
                else if(usernameExists($username)){
                    echo ("<script LANGUAGE='JavaScript'>
                            let message = document.getElementById('signupErrorSpan');
                            message.innerHTML = 'Utente con $username già esistente. Riprovare';
                            </script>");        
                    exit();
                } 
                else if(emailExists($email)){
                    echo ("<script LANGUAGE='JavaScript'>
                            let message = document.getElementById('signupErrorSpan');
                            message.innerHTML = 'Utente con $email già esistente. Riprovare';
                        </script>");
                    exit();
                } 
                else{
                    if(insertUser($name, $surname, $email, $username, $password)){
                        echo ("<script LANGUAGE='JavaScript'>
                                /* window.alert('Utente $username registrato con successo! Effettua il login'); */
                                window.location.href = 'prj_login.php';
                        </script>");
                        exit();
                    }
                    else{
                        echo ("<script LANGUAGE='JavaScript'>
                                let message = document.getElementById('signupErrorSpan');
                                message.innerHTML = 'Errore di registrazione';
                            </script>");
                        exit();
                    }
                }
            }
            
            ?>

        </body>

