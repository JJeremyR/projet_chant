<?php include "components/config/config.php";
?>

<?php
if(isset($_POST['submit']))
    {
    try
        {
        $dbi = new PDO('mysql:host=localhost;dbname=test','jeremy','regniez');
        //$dbi = new PDO('mysql:host=localhost;dbname=test','root','root');
        $dbi->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING); 
        }
        catch (Exception $e)
            {
            echo 'Erreur : '.$e->getMessage();
            }

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        //$mdpConf = $_POST['mdpConf'];

        //Ecriture de la requete
        //$pdo2 = "INSERT INTO users (prenom,nom,mail,mdp) VALUES (:prenom,:nom,:mail,:mdp)";
        $pdo2 = "INSERT INTO users (prenom,nom,mail,mdp) VALUES (:prenom,:nom,:mail,:mdp)";
        //Preparation de la requete
        $insert = $dbi->prepare($pdo2);
        // execution de la requete
        $ok = $insert->execute(array(
            
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":mail" => $mail,
            ":mdp" => $mdp,
            ));

            if ($ok) 
                {
                echo "<script type='text/javascript'>alert('New Record Inserted Successfully');</script>";
                }
                else
                    {
                    echo "<script type='text/javascript'>alert('Data not successfully Inserted.');</script>";
                    }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="32x32" href="ressources/star-mic.png">

    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="sup-header">
            <a href="https://ville-longuenesse.fr">
            <img src="ressources/longuenesse-logo.png" title="Ville De Longuenesse" />
            </a>
        </div>
    </header>
    <div>
        <?php include ('components/sliders.php'); ?>
    </div>
    <a name="count"></a>
    <div>
        <?php include ('components/nav/navP.php'); ?>
    </div>

    <div>
        </br>
        <?php include ('components/countdown/countdown.php'); ?>
    </div>
    <section>
        <article class="content">
            <form method="post" id="form" action="./inscription.php">
                <h2>Inscription</h2>
                <div>
                    <input type="text" class="formI" name="prenom" placeholder="Prénom" required/>
                    </br>
                </div>
                <div>
                    </br>
                    <input type="text" class="formI" name="nom" placeholder="Nom" required />
                    </br>
                </div>
                <div>
                    </br>
                    <input type="email" class="formI" name="mail" placeholder="Email" required />
                    </br>
                </div>
                <div>
                    </br>
                    <input type="password" class="formI" id="mdp" name="mdp" placeholder="Mot de passe" required />
                    </br>
                </div>
<!--            <div>
                    </br>
                    <input type="password" class="formI" id="mdpConf" name="mdpConf"  placeholder="Confirmation Mot de Passe" oninput="check(this)" required />
                    </br>
                </div>
-->             <div>
                    </br>
                    <input type="checkbox" id="validate" required>
                    <label>J'ai lu et j'accepte le réglement du Concours</label>
                </div>
                <div>
                    </br>
                    <button type="submit" name="submit">Envoyer</button>
                    </br>
                </div>
            </form>
        </article>
    </section>
    <section>
        <article class="content">
            <?php include ('components/reglement.php');?>
        </article>
    </section>
    <div>
        <?php include ('components/footer.php');?>
    </div>
   <!--<script type="text/javascript" src="components/countdown/countdown.js"></script> -->
</body>

</html>

<style>
.input
    {
    line-height: 150%;
    width: 30%;
    }
.input::placeholder
    {
     font-size: larger;
    text-align: center;
    }
.form
    {
    width: 100%;
    }
</style>