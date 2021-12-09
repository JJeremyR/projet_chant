<?php

    include  "config/config.php";
  
if(isset($_POST['maclane'])) 
    {
    session_destroy();

    //echo 'yepikkaie motherfucker!';

    header('Location:index.php');
    }
?>

<div class="logout">
    <form action="" method="post">
        <div>
            <!--<label>Identifiant</label>-->
            <center><h3>Bonjour <?php echo $_SESSION['user']?></h3></center>
        </div>
        <div> 
            <!--<label>Mot De Passe</label>-->
        </div>
            <center><input type="submit" class="button" name="maclane" value="Deconnexion"></center>
    </form>
</div>


<style>
.logout
    {
    float: right;
    margin: 10px;
    padding: 10px;
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