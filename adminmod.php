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

            <title>Modification Profil Candidats</title>
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
                    <?php include ('components/admin/modifyuser.php'); ?>
                    <h2>Modification Compte Candidats!</h2>
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