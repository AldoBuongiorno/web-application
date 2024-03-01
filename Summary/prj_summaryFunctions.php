
<?php
    //seleziona tutta la riga
    function getInfo($journeys, $db){
        $sql = "SELECT * FROM \"journey\" WHERE \"journeyID\" = $1;";  
                                
        $prep = pg_prepare($db, "sqlInfos" , $sql);
        $ret = pg_execute($db, "sqlInfos" , array($journeys));

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