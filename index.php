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

            <title>Concours de chant</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <header>
                <div class="sup-header">
                    <a href="https://ville-longuenesse.fr">
                        <img src="ressources/longuenesse-logo.png" title="Ville De Longuenesse" />
                    </a>
                    <?php include ('./components/log/login.php'); ?>
                </div>
            </header>
            <div>
                <?php include ('components/sliders.php'); ?>
            </div>
            <div>
                <?php include ('components/nav/navP.php'); ?>
            </div>
            <div>
                </br>
                <?php include ('components/countdown/countdown.php'); ?>
            </div>
            <section>
                <article class="content">
                    <?php include ('components/reglement.php'); ?>
                    </br>
                    <center><a href="inscription.php#count"><button>Participer!</button></a></center>
                    </br>
                </article>
            </section>
            <div>
                <?php include ('components/footer.php'); ?>
            </div>
        <!--<script type="text/javascript" src="components/countdown/countdown.js"></script> -->
        </body>
    </html>