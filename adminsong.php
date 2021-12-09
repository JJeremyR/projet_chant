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

            <title>Validation Chanson</title>
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
                    <h2>Validation Chanson!</h2>
                    <?php //include ('components/admin/validatesong.php'); ?>
                    <?php
                    $bdd = new PDO('mysql:host=localhost;dbname=test', 'jeremy', 'regniez');
                    //$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
                    if(isset($_GET['type']) AND $_GET['type'] == 'song') 
                        {
                        if(isset($_GET['conf']) AND !empty($_GET['conf'])) 
                            {
                            $confirme = (int) $_GET['conf'];
                            $req = $bdd->prepare('UPDATE song SET conf = 1 WHERE id = ?');
                            $req->execute(array($confirme));
                            }
                            if(isset($_GET['sup']) AND !empty($_GET['sup'])) 
                                {
                                $supprime = (int) $_GET['sup'];
                                $req = $bdd->prepare('UPDATE song SET conf = 0 WHERE id = ?');
                                $req->execute(array($supprime));
                                }
                        }
                    $songs = $bdd->query('SELECT * FROM song ORDER BY id DESC LIMIT 0,5');
                    ?>
                    <div>
                        <table align="center" border="3">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>TITRE</th>
                                    <th>FICHIER</th>
                                    <th>VALIDER</th>
                                    <th>REJETER</th>
                                </tr>
                                <?php while($s=$songs->fetch()){?>
                                <tr align="center" border="3">
                                    <td><?=$s['id']?></td> 
                                    <td><?=$s['titre']?></td>
                                    <td><?=$s['fichier']?></td>
                                    <td><?php if($s['conf'] == 0){?><button><a href="adminsong.php?type=song&conf=<?=$s['id']?>">Valider la chanson</a></button></td>
                                    <td><?php }?><button><a href="adminsong.php?type=song&sup=<?=$s['id']?>">Rejeter la chanson</a></button></td>
                                </tr>
                                <?php }?>
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
</style>