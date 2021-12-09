<?php
//session_start();
//echo 'la session est démarrée';

try
    {
    $DB = new PDO('mysql:host=localhost;dbname=test','jeremy','regniez');      //connexion lycée!
    //$DB = new PDO('mysql:host=localhost;dbname=test', 'root','root');         //connexion maison!
    $DB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);                      //visu erreur dev
    //$DB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);                  //visu erreur prod
    //echo 'ca fonctionne M\'voyez!';                             //a commenter prod!
    }
    catch(PDOException $e)
        {
            //echo '<script type="text/javascript">alert:"Erreur De Connexion"\n"Contacter un Administrateur";</script>';
            //echo 'Alerte Aux Gogoles!';                         //a commenter prod!
        }
?>