
<?php
    function pickItinerary($selectedPeriod, $selectedBudget, $selectedDuration, $selectedType){

        $id = "";

        if($selectedPeriod === "Estate")
            $id = "E";
        else if($selectedPeriod === "Inverno")
            $id = "I";

        if($selectedBudget === "Alto")
            $id = $id . "A";
        else if($selectedBudget === "Medio")
            $id = $id . "M";  
        else if($selectedBudget === "Basso")
            $id = $id . "B";

        if($selectedDuration === "5")
            $id = $id . "05";
        else if($selectedDuration === "7")
            $id = $id . "07";
        else if($selectedDuration === "10")
            $id = $id . "10";
        else if($selectedDuration === "15")
            $id = $id . "15";

        if($selectedType === "Cultura") 
            $id = $id . "C";  
        else if($selectedType === "Divertimento") 
            $id = $id . "D";  
        else if($selectedType === "Paesaggistico") 
            $id = $id . "P";  
        
        return $id;
        
    }

    function insertID($id, $username) {

        $connection_string ="host='localhost' dbname='Gruppo27' user='www' password='tw2024'";
        $db = pg_connect($connection_string) or die('Impossibile connettersi al database: ' . pg_last_error());

        $idArray = getID($username, $db);                           //idArray contiene l'array associativo con journeys -> "ID1---ID2--..."
        $idString = $idArray["journeys"];

        if ($idString == null) {                                    //iseriamo direttamente l'id se non ce ne sono altri presenti
            $id = $id . "---";                                      //formatto l'id prima di inserirlo
            $sql = "UPDATE \"user\" SET journeys=$1 WHERE username=$2";
            $prep = pg_prepare($db, "sqlUpdateID", $sql);            
            $ret = pg_execute($db, "sqlUpdateID", array($id, $username));
            if(!$ret) {
            echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Errore QUERY');
                </script>");
            return false; 
            }
            else{
                return true;
            }     
        }          
        else{                                                       //sono presenti altri ID 
            $array = explode("---", $idString);
            $array = array_filter($array);                          // rimuove gli elementi vuoti dall'array
                    // array[0] = 

            foreach($array as $part){
                //l'utente ottiene un'itinerario già presente nel carrello -> verrà visualizzato nel summary un messaggio che gli comunica questa informazione
                if($part == $id){
                    $_SESSION['duplicate'] = true;               
                    return false;
                } 
            } 
            //in questo caso l'id non è presente quindi si provvede ad inserirlo 
            //salvo id in una variabile
            $idDuplicate = $id;                                      
            $i = 0;                           
            foreach($array as $part){
                //numero massimo di itinerari raggiunti per l'utente -> l'itinerario corrente non verrà aggiunto al carrelo ma verrà comunque reindirizzato nel summary con l'itinerario scelto
                if($i == 4){
                    $_SESSION['maxReached'] = true;
                    return false;
                }
                if($i == 0){
                    $id = $part;
                    $i++;
                }
                else{
                    $id = $id . "---" . $part;                          //ricompongo la stringa inserendo il nuovo id formattato
                    $i++;
                }
            }
            
            $id = $id . "---" . $idDuplicate;
            //aggiorno il valore nella tabella
            $sql = "UPDATE \"user\" SET journeys=$1 WHERE username=$2";
            $prep = pg_prepare($db, "sqlUpdateID", $sql);            
            $ret = pg_execute($db, "sqlUpdateID", array($id, $username));
            if(!$ret) {
            echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Errore QUERY');
                </script>");
            return false; 
            }
            else{
                return true;
            }

        }
    }
    
    //Correct
    function getID($username, $db){
        $sql = "SELECT journeys FROM \"user\" WHERE username=$1";    //sqlInjection da fare
        $prep = pg_prepare($db, "sqlJourneys", $sql);
        $ret = pg_execute($db, "sqlJourneys", array($username));


        if (!$ret) {
            echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Errore QUERY' . pg_last_error($2)  );
                    </script>");
            return false;
        } else {
            if ($row = pg_fetch_assoc($ret)) 
                return $row;
            else 
                return false;
        }
    }
?>