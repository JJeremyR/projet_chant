<?php
    include ('components/config/config.php');
?>
<?php
if(isset($_POST['submit']))
    {
    try
        {
        $dbs = new PDO('mysql:host=localhost;dbname=test','jeremy','regniez');
        //$dbs = new PDO('mysql:host=localhost;dbname=test','root','root');
        $dbs->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING); 
        }
        catch (Exception $e)
            {
            echo 'Erreur : '.$e->getMessage();
            }
        $retourapi = $_POST['retourapi'];
        //$artiste = $_POST['artiste'];
        //$titre = $_POST['titre'];
        //$duree = $_POST['duree'];

        //Ecriture de la requete
        $pdo3 = "INSERT INTO song (titre) VALUES (:retourapi)";
        //$pdo3 = "INSERT INTO song (artiste,titre,duree) VALUES (:artiste,:titre,:duree)";
        //Preparation de la requete
        $insert = $dbs->prepare($pdo3);
        // execution de la requete
        $ok = $insert->execute(array(
            
            ":retourapi" => $retourapi,
            //":artiste" => $artiste,
            //":titre" => $titre,
            //":duree" => $duree,
            ));

            if ($ok) 
                {
                echo "<script type='text/javascript'>alert('New Song Inserted Successfully');</script>";
                }
                else
                    {
                    echo "<script type='text/javascript'>alert('Song not successfully Inserted.');</script>";
                    }
    }
?>

<?php
if(isset($_POST['submitsong']))
    {
    try
        {
        $dbu = new PDO('mysql:host=localhost;dbname=test','jeremy','regniez');
        //$dbu = new PDO('mysql:host=localhost;dbname=test','root','root');
        $dbu->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING); 
        }
        catch (Exception $e)
            {
            echo 'Erreur : '.$e->getMessage();
            }
        $nommp3 = $_FILES['mp3']['name'];
        //$mp3 = $_POST['mp3'];
        //$mp3 = $_FILES['mp3']['tmp_name'];
        $user_id = 1;

        //Ecriture de la requete
        $pdo4 = "UPDATE song SET fichier=? WHERE user_id=?";
        //$pdo4 = "UPDATE song SET fichier=:nommp3 WHERE user_id=:userid";
        //Preparation de la requete
        $insert2 = $dbu->prepare($pdo4);
        // execution de la requete
        $ok2 = $insert2->execute(array(
            
            //file_get_contents($_FILES['mp3']['tmp_name']),
            //":nommp3" => $nommp3,
            //":userid" => $user_id,
            $nommp3,
            $user_id,
            ));

            if ($ok2) 
                {
                echo "<script type='text/javascript'>alert('New Song uploaded Successfully');</script>";
                }
                else
                    {
                    echo "<script type='text/javascript'>alert('Song not successfully uploaded. ');</script>";
                    }
    }
?>

<?php
/*
if (isset($_POST['submitsong'])) 
    {
    $maxSize = 8000000;
    $validtext = array('.mp3');
    if ($_FILES['uploaded_file']['error'] > 0) 
        {
        echo "Une erreur est survenue lors du transfert";
        die;
        }
    $fileSize = $_FILES['uploaded_file']['size'];
    if ($fileSize > $maxSize) 
        {
        echo "le fichier est trop gros";
        die;
        }
    $fileName = $_FILES['uploaded_file']['name'];
    $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));

    if (!in_array($fileExt, $validtext)) 
        {
        echo "le fichier n'est pas au bon format !";
        die;
        }
    $tmpName = $_FILES['uploaded_file']['tmp_name'];
    //$fileName = "upload/" . $_SESSION['pseudo'] . $fileExt;
    $fileName = "upload/" . $fileExt;
    $resultat = move_uploaded_file($tmpName, $fileName);

    if ($resultat) 
        {
        echo "Transfert terminé ! ";
        }
    }*/
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="icon" type="image/png" sizes="32x32" href="ressources/star-mic.png">

            <title>Profil Candidat</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <header>
                <div class="sup-header">
                    <a href="https://ville-longuenesse.fr">
                        <img src="ressources/longuenesse-logo.png" title="Ville De Longuenesse" />
                    </a>
                    <?php include ('components/log/logout.php'); ?>
                </div>
            </header>
            <div>
                <?php include ('components/sliders.php'); ?>
            </div>
            <div>
                <?php include ('components/nav/navU.php'); ?>
            </div>
            <div>
                </br>
                <?php include ('components/countdown/countdown.php'); ?>
            </div>
            <section>
                <article class="content">
                    <div class="statBS">
                        <p>Statut de la bande son:</p>
                        <h1>"{NOT GOOD!}"</h1>
                        <div class="wrapper">
                            <a href="#modal1">Ajouter</a>
                        </div>
                        <p>Statut de l'upload:</p>
                        <div class="wrapper">
                            <a href="#modal3">Ajouter</a>
                        </div>
                    </div>
                    </br>
                    <div class="statCP">
                        <p>Statut du paiement:</p>
                        <h1>"{NOT GOOD!}"</h1>
                        <div class="wrapper">
                            <a href="#modal2">Infos</a>
                        </div>
                       </div>    
                    </br>
                    </br>
                    <table class="recap">
                        <tr>
                            <th>Titre</th>
                            <th>Interprete</th>
                            <th>Durée</th>
                        </tr>    
                        <tr>
                            <td>${songs.title}</td>
                            <td>${songs.artist}</td>
                            <td>${songs.time}</td>
                        </tr>
                    </table>
                </article>
            </section>

            <div>
                <?php include ('components/footer.php'); ?>
            </div>
        
<!-- Modal Window API -->
<div id="modal1" class="modal">
    <div class="modal__content">
        <h1>Statut de la bande son:</h1>
        <div>
            <form id="formA" align="center">
                <input type="text" placeholder="artiste de la bande son" id="artist">
                <input type="text" placeholder="titre de la bande son" id="titre">
                <input type="submit" value="envoyer">
            </form>
        </div>  
        <div id="demo2" align="center">
            <form method="post" action="">
                </br>
                <select id="demo3" name="retourapi"></select>
                <input type="submit" name="submit" value="Confirmer">
                </br>
            </form>
        </div>
        <a href="#" class="modal__close"><img src="ressources/x.png" alt="" width="40px"></a>
    </div>
    <script src="appsong.js"></script>
</div>

<!-- Modal Window Paiement -->
<div id="modal2" class="modal">
    <div class="modal__content">
        <h1>Statut du paiement:</h1>
        <div>
            <h3>Une inscription ne sera finalisée qu’à la réception du paiement par chèques via:</h3>
            <ul align="left">
                <li><h4>un envoi postal à la mairie aupres du secrétariat du service culturel</h4></li>
                <li><h4>par chèques/espèces directement auprès de la trésorerie de l’office de la culture.</h4></li>
            </ul>
        </div>
        <div align="center">
            <button><a href="#">OK</a></button>
        </div>
        <a href="#" class="modal__close"><img src="ressources/x.png" alt="" width="40px"></a>
    </div>
</div>

<!-- Window Modal Upload -->

<div id="modal3" class="modal">
    <div class="modal__content">
        <h1>Statut de l'upload chanson:</h1>
        <div>
            <form id="formU" align="center"method="post" action="" enctype="multipart/form-data">
            <label for="mp3">Sélectionner le fichier à envoyer</label></br></br>
                <input type="file" id="mp3" name="mp3"accept=".mp3"></br></br>
                <input type="submit" nam="submitsong" value="envoyer">
            </form>  
        </div>
        <a href="#" class="modal__close"><img src="ressources/x.png" alt="" width="40px"></a>
    </div>
    <script src=""></script>
</div>
        <!--<script type="text/javascript" src="components/countdown/countdown.js"></script> -->
        </body>
    </html>
    
<style>
.statBS
    {
    margin: 20px;
    padding: 20px;
    border: red solid 3px;
    border-radius: 10px;
    background-color: tomato;
    box-shadow: 1px 1px 20px crimson;
    }
    .statCP
    {
    margin: 20px;
    padding: 20px;
    border: red solid 3px;
    border-radius: 10px;
    background-color: tomato;
    box-shadow: 1px 1px 20px crimson;
    }
.recap
    {
    border: black solid 1px;
    width: 100%;
    }
.recap td, .recap th
    {
    padding: 10px;
    border: black solid 1px;
    width: 100%;
    }
/*Modal*/
.wrapper 
    {
    display: flex;
    align-items: center;
    justify-content: center;
    }
.wrapper a 
    {
    display: inline-block;
    text-decoration: none;
    padding: 15px;
    background-color: #fff;
    border-radius: 3px;
    text-transform: uppercase;
    color: #585858;
    /*font-family: 'Roboto', sans-serif;*/
    }
.modal
    {
    visibility: hidden;
    opacity: 0;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(77, 77, 77, .7);
    height: 100%;
    width: 100%;
    transition: all .4s;
    }
.modal:target 
    {
    visibility: visible;
    opacity: 1;
    }
.modal__content
    {
    border-radius: 4px;
    position: relative;
    width: 85%;
    height: 250px;
    max-width: 95%;
    background: #fff;
    padding: 1em 2em;
    }
.modal__close 
    {
    position: absolute;
    top: 5px;
    right: 5px;
    color: #585858;
    text-decoration: none;
    }
#formA input {margin: 10px;}
#artist, #titre{width: 40%;}
#demo2, #demo2 input {margin: 20px;}
#demo3 {width: 100%;}

/* Changement CSS de Base */
body
    {
    margin: 0;
    background: cornflowerblue;
    }
.content
    {
    width: 88%;
    margin-top: 2%;
    margin-bottom: 2%;
    margin-left: auto;
    margin-right: auto;
    padding: 10px;
    padding-left: 2%;
    padding-right: 2%;
    box-sizing: content-box;
    color: black;
    background: #fff;
    border-radius: 4px;
    box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.4);
    text-align: center; 
    }
</style>