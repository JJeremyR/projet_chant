<?php session_start();
include  "config/config.php";

# ! ATTENTION LE MORCEAU DE CODE SUIVANT FAIT TOUT BUGGER !
if(isset($_POST['coco']))
    { 
    $searchmail = $DB->prepare("SELECT * FROM users WHERE mail = ?");
    $searchmail->execute([$_POST['mail']]);
    
    $mailadmin = "admin@mail.com";
    $mdpadmin = "admin";

    $action = "profilU.php";
    }
    else if($_POST['mail'] == $mailadmin && $_POST['mdp'] == $mdpadmin)
        {
        $action = "profilA.php";
        }
        else
            {
            $action = "index.php";
            }
 ?>

<div class="login">
    <form action="<?php echo $action?>" method="post">
        <div>
            <!--<label>Identifiant</label>-->
            <input type='email' autocomplete='off' name="mail" id='mail' placeholder="Identifiant" required="required"/>
        </div>
        </br>
        <div> 
            <!--<label>Mot De Passe</label>-->
            <input type='password' autocomplete='off' placeholder="Mot De Passe" required="required"/>
        </div>
            </br>
            <center><input type="submit" class="button" name="coco" value="Connexion"></center>
    </form>
</div>

<style>
.login
    {
    float: right;
    margin: 15px;
    padding: 15px;
    box-sizing: content-box;
    background: #303030;
    color: #fff;
    border-radius: 4px;
    box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.4);
    }
.button
    {
    width: 175px;
    background-color: #505050 ;
    color: #fff ;
    border-radius: 4px;
    }
.button:hover
    {
    color: #66a992;    
    }
</style>