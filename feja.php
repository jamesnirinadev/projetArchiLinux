<?php

define('DB_HOST', '169.254.7.182');
define('DB_USER', 'root');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'fejalinux_db');
define('DB_DSN', 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port=3306;charset=UTF8');


try {
            $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
          // $bdd = new PDO('mysql:host=localhost;dbname=mangas_one', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
           // $dbh->execute("set names utf8"); // pour forcer UTF8 sur la réponse serveur
} catch (Exception $e) {
            die('Erreur : pas de connexion à la base' . $e->getmessage());
};




$result = $dbh->query("select * from supertest_tab");

echo $result;

?>