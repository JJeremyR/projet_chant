<?php
    include ('components/config/config.php');
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="icon" type="image/png" sizes="32x32" href="ressources/star-mic.png">

            <title>Validation Candidatures</title>
        </head>
        <body>
            <header>
                <div class="sup-header">
                    <a href="https://ville-longuenesse.fr">
                        <img src="ressources/longuenesse-logo.png" title="Ville De Longuenesse" />
                    </a>
                    <?php include ('./components/log/logout.php'); ?>
                </div>
            </header>
            <div>
                <?php include ('components/nav/navA.php'); ?>
            </div>
            <section>
                </br>
                <article class="content">
                    </br>
                    <h2>Validation Candidatures!</h2>
                    <?php //include ('components/admin/validateuser.php'); ?>

                    <?php
                    $bdd = new PDO('mysql:host=localhost;dbname=test', 'jeremy', 'regniez');
                    //$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');

                    if(isset($_GET['type']) AND $_GET['type'] == 'user') 
                        {
                        if(isset($_GET['conf']) AND !empty($_GET['conf'])) 
                            {
                            $confirme = (int) $_GET['conf'];
                            $req = $bdd->prepare('UPDATE users SET conf = 1 WHERE id = ?');
                            $req->execute(array($confirme));
                            }
                            if(isset($_GET['sup']) AND !empty($_GET['sup'])) 
                                {
                                $supprime = (int) $_GET['sup'];
                                $req = $bdd->prepare('UPDATE users SET conf = 0 WHERE id = ?');
                                $req->execute(array($supprime));
                                }
                        }
                        $membres = $bdd->query('SELECT * FROM users ORDER BY id DESC LIMIT 0,5');
                    ?>

                    <div>
                        <table align="center" border="3">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>PRENOM</th>
                                    <th>NOM</th>
                                    <th>MAIL</th>
                                    <th>VALIDER</th>
                                    <th>REJETER</th>
                                </tr>
                                <?php while($m = $membres->fetch()) { ?>
                                <tr align="center" border="3">
                                    <td><?=$m['id']?></td>
                                    <td><?=$m['prenom']?></td>
                                    <td><?=$m['nom']?></td>
                                    <td><?=$m['mail']?></td>
                                    <td><?php if($m['conf'] == 0){ ?><button><a href="adminuser.php?type=user&conf=<?= $m['id'] ?>">Valider la candidature</a></button></td>
                                    <td><?php } ?><button><a href="adminuser.php?type=user&sup=<?= $m['id'] ?>">Rejeter la Canditature</a></button></td>
                                </tr>
                                <?php } ?>      
                            </tbody>
                        </table>
                    </div>
                    </br>
                </article>
            </section>
            <div>
                <?php include ('components/footer.php'); ?>
            </div>
        </body>
    </html>

<style>
body
    {
    margin: 0;
    background: coral;
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
table
    {
    width: 95%;
    border-color: black;
    }
</style>