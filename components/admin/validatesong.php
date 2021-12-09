<?php
$bdd = new PDO('mysql:host=localhost;dbname=test', 'jeremy', 'regniez');
//$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
if(isset($_GET['type']) AND $_GET['type'] == 'song') {
   if(isset($_GET['conf']) AND !empty($_GET['conf'])) {
      $confirme = (int) $_GET['conf'];
      $req = $bdd->prepare('UPDATE song SET conf = 1 WHERE id = ?');
      $req->execute(array($confirme));
   }
   if(isset($_GET['sup']) AND !empty($_GET['sup'])) {
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
                    <td><?php if($s['conf'] == 0){?><button><a href="components/admin/validatesong.php?type=song&conf=<?=$s['id']?>">Valider la chanson</a></button></td>
                    <td><?php }?><button><a href="components/admin/validatesong.php?type=song&sup=<?=$s['id']?>">Rejeter la chanson</a></button></td>
                </tr>
            <?php }?>
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