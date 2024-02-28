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

    






?>