<!DOCTYPE html>
    <html lang="it" dir="ltr">
        <head>
            <link rel="stylesheet" href="prj_login.css" type="text/css"/>
            <script src="prj_login.js" type="text/javascript">  </script>
            <meta charset="UTF-8"/>
            <meta title="Login"/>
            <meta name="description" content="loginPage "/>
            <meta name="keywords" content="login"/>
            <meta author="Gruppo 27"/>
            <meta keywork="login"/>
            <title>Login</title>
            <?php require('prj_authFunctions.php');?>
        </head>

        <body>

            <div class="title">
                <a href="../Home/prj_home.php"><h1>TRAIN TRAVEL</h1> </a>                  
            </div>

            <div class="containerLogin form-container" id="container">
                <form  name="loginForm" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" onsubmit="return validateFormLogin()">
                    <h1>Login</h1>
                    <input type="text" id="usernameLogin" name="usernameLogin" placeholder="username" <?php if (array_key_exists('usernameLogin',$_POST)) { echo "value='", htmlspecialchars($_POST['usernameLogin']), "'"; } ?> />
                    <input type="password" id="passwordLogin" name="passwordLogin" placeholder="password" <?php if (array_key_exists('passwordLogin',$_POST)) { echo "value='", htmlspecialchars($_POST['passwordLogin']), "'"; } ?>/>
                    <span id="loginErrorSpan"></span>
                    <button type="submit"  name="loginBtn">ACCEDI</button>  
                    <p id="switchLogin"> Non hai ancora un account?<button type="button" id="switchBtn" onclick="window.location.href = 'prj_signup.php';">Registrati</button> </p>
                </form>    
            </div>


            <script type="text/javascript"> 
                //genera il primo sfondo
                document.body.style.backgroundImage = generateBackground();          
            </script>


            <?php
                 $usernameLogin =  null;
                 $passwordLogin =  null;

                if(!empty($_POST)){
                    $usernameLogin =  $_POST['usernameLogin'];
                    $passwordLogin =  $_POST['passwordLogin'];
                    $hash = get_pwd($usernameLogin);
            
                    if( ! usernameExists($usernameLogin)){
                        echo (" <script LANGUAGE='JavaScript'>  
                                let message = document.getElementById('loginErrorSpan');
                                message.innerHTML = '$usernameLogin non risulta registrato';
                                </script>"); 
                    }   
                    else if(password_verify($passwordLogin, $hash)){	
                            session_start();
                            $_SESSION['username']=$usernameLogin;
                            $_SESSION['authorized']=true;
                            echo ("<script LANGUAGE='JavaScript'>
                                window.location.href = '../Form/prj_form.php';
                                </script>"); 
                    }
                    else {
                        echo (" <script LANGUAGE='JavaScript'>
                                let message = document.getElementById('loginErrorSpan');
                                message.innerHTML = 'Password errata. Riprovare';
                                </script>");  
                    }
                }
            ?>
        </body>

