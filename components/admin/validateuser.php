<?php
$bdd = new PDO('mysql:host=localhost;dbname=test', 'jeremy', 'regniez');
//$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');

if(isset($_GET['type']) AND $_GET['type'] == 'user') {
   if(isset($_GET['conf']) AND !empty($_GET['conf'])) {
      $confirme = (int) $_GET['conf'];
      $req = $bdd->prepare('UPDATE users SET conf = 1 WHERE id = ?');
      $req->execute(array($confirme));
   }
   if(isset($_GET['sup']) AND !empty($_GET['sup'])) {
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
                <td><?php if($m['conf'] == 0){ ?><button><a href="components/admin/validateuser.php?type=user&conf=<?= $m['id'] ?>">Valider la candidature</a></button></td>
                <td><?php } ?><button><a href="components/admin/validateuser.php?type=user&sup=<?= $m['id'] ?>">Rejeter la Canditature</a></button></td>
            </tr>
                <?php } ?>      
        </tbody>
    </table>
</div>

<style>
table
    {
    width: 95%;
    border-color: black;
    }
</style>