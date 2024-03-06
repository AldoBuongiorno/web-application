<html>

<head>
    <title>authFunctions</title>
</head>

<body>
    <?php

    function usernameExists($username)
    {

        $connection_string = "host='localhost' dbname='Gruppo27' user='www' password='tw2024'";
        $db = pg_connect($connection_string) or die('Impossibile connettersi al database: ' . pg_last_error());

        $sql = "SELECT username FROM \"user\" WHERE username=$1";
        $prep = pg_prepare($db, "sqlUsername", $sql);
        $ret = pg_execute($db, "sqlUsername", array($username));
        if (!$ret) {
            echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Errore QUERY' . pg_last_error($db)  );
                        </script>");
            return false;
        } else {
            if ($row = pg_fetch_assoc($ret)) {
                return true;
            } else {
                return false;
            }
        }
    }


    function emailExists($email)
    {

        $connection_string = "host='localhost' dbname='Gruppo27' user='www' password='tw2024'";
        $db = pg_connect($connection_string) or die('Impossibile connettersi al database: ' . pg_last_error());

        $sql = "SELECT email FROM \"user\" WHERE email=$1";
        $prep = pg_prepare($db, "sqlEmail", $sql);
        $ret = pg_execute($db, "sqlEmail", array($email));
        if (!$ret) {
            echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Errore QUERY' . pg_last_error($db)  );
                            </script>");
            return false;
        } else {
            if ($row = pg_fetch_assoc($ret)) {
                return true;
            } else {
                return false;
            }
        }
    }

    function insertUser($name, $surname, $email, $username, $password)
    {

        $connection_string = "host='localhost' dbname='Gruppo27' user='www' password='tw2024'";
        $db = pg_connect($connection_string) or die('Impossibile connettersi al database: ' . pg_last_error());
        if (pg_connect($connection_string))

            $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO \"user\" (name, surname, email, username, password) VALUES($1, $2, $3, $4, $5)";
        $prep = pg_prepare($db, "insertUser", $sql);
        $ret = pg_execute($db, "insertUser", array($name, $surname, $email, $username, $hash));
        if (!$ret) {
            echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Errore QUERY' . pg_last_error($db)  );
                        </script>");
            return false;
        } else {
            return true;
        }
    }


    function get_pwd($username)
    {

        $connection_string = "host='localhost' dbname='Gruppo27' user='www' password='tw2024'";
        $db = pg_connect($connection_string) or die('Impossibile connettersi al database: ' . pg_last_error());

        $sql = "SELECT password FROM \"user\" WHERE username=$1;";
        $prep = pg_prepare($db, "sqlPassword", $sql);
        $ret = pg_execute($db, "sqlPassword", array($username));
        if (!$ret) {
            echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Errore QUERY' . pg_last_error($db);  );
                        </script>");
            return false;
        } else {
            if ($row = pg_fetch_assoc($ret)) {
                $password = $row['password'];
                return $password;
            } else {
                return false;
            }
        }
    }


    function check_domain($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $pos = mb_strpos($email, '@');
            $domain = mb_substr($email, $pos + 1);
            if (checkdnsrr($domain, $type = "MX"))
                return true;
            else
                return false;
        } else
            return false;
    }
    ?>

</body>

</html>