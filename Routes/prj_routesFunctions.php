<?php 

    function getJourneys($username, $db){
        $id = getID($username, $db);
        if($id){
            $idString = $id["journeys"];
            return filter($idString);
        }
        else{
            echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Error');
                    </script>");
            return false;
        }
    }

    function filter($idString){
        $array = explode("---", $idString);
        return array_filter($array);
    }

    function getID($username, $db){
        $sql = "SELECT journeys FROM \"user\" WHERE username=$1";
        $prep = pg_prepare($db, "sqlID", $sql);
        $ret = pg_execute($db, "sqlID", array($username));


        if (!$ret) {
            echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Errore QUERY');
                    </script>");
            return false;
        } else {
            if ($row = pg_fetch_assoc($ret)) {
                return $row;
            } else {
                return false;
            }
        }
    }

    //seleziona tutta la riga
    function getInfo($journeys, $db, $queryName){
        
        $sql = "SELECT * FROM \"journey\" WHERE \"journeyID\" = $1;";  
        $prep = pg_prepare($db, $queryName, $sql);
        $ret = pg_execute($db, $queryName, array($journeys));

        if (!$ret) {
            echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Errore QUERY');
                    </script>");
            return false;
        } else {
            if ($row = pg_fetch_assoc($ret)) {
                return $row;
            } else {
                return false;
            }
        }
    }


    function journeyOptions($journeys, $username, $db){

        //itinerario 1
        if (isset($_POST['btnDetails1'])) 
        redirectToSummary($journeys, 0);

        if (isset($_POST['btnDelete1'])) 
            deleteID($journeys, 0, $username, $db);
        
        //itinerario 2
        if (isset($_POST['btnDetails2'])) 
            redirectToSummary($journeys, 1);
        
        if (isset($_POST['btnDelete2'])) 
            deleteID($journeys, 1, $username, $db);

        //itinerario 3
        if (isset($_POST['btnDetails3'])) 
            redirectToSummary($journeys, 2);

        if (isset($_POST['btnDelete3']))
            deleteID($journeys, 2, $username, $db);
        
        //itinerario 4
        if (isset($_POST['btnDetails4'])) 
            redirectToSummary($journeys, 3);

        if (isset($_POST['btnDelete4'])) 
            deleteID($journeys, 3, $username, $db);
            
        //itinerario 5
        if (isset($_POST['btnDetails5'])) 
            redirectToSummary($journeys, 4);

        if (isset($_POST['btnDelete5'])) 
            deleteID($journeys, 4, $username, $db);
    }


    function deleteID($journeys, $i, $username, $db){
        //elimina prima l'id corrispondente al btnDelete dall'array $journeys
        unset($journeys[$i]);
        //a questo punto si ricostruisce la stringa aggiornata da caricare nel database
        $string = implode("---", $journeys);
        updateIDField($username, $db, $string);
        ?>
            <script>
                //forza il ri-caricamento della pagina per la visualizzazione corretta e aggiornata dei dati
                window.location.href = "<?php echo $_SERVER['PHP_SELF']; ?>";
            </script>
        <?php
    }


    //aggiorna il campo journeys della tabella user eliminando l'id scelto 
    function updateIDField($username, $db, $string){
        
        $sql = "UPDATE \"user\" SET journeys = $2 WHERE username = $1";              
        $prep = pg_prepare($db, "sqlUpdateJourneys", $sql);
        $ret = pg_execute($db, "sqlUpdateJourneys", array($username, $string));
        
        if (!$ret) {
            echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Errore QUERY');
                    </script>");
            return false;
        } else {
            return true;
        }
    }


    //reindirizza l'utente a prj_summary.php permettensogli di visualizzare i dettagli dell'itinerario selezionato
    function redirectToSummary($journeys, $i){
        $_SESSION['id'] = $journeys[$i];
        echo ("<script LANGUAGE='JavaScript'>
                window.location.href = '../Summary/prj_summary.php';
            </script>"); 
    }

    






?>