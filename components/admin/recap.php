<?php
$bdd = new PDO('mysql:host=localhost;dbname=test', 'jeremy', 'regniez');
//$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
$membres = $bdd->query('SELECT * FROM users WHERE conf = 1 ORDER BY id DESC LIMIT 0,5');
$songs = $bdd->query('SELECT * FROM song WHERE conf = 1 ORDER BY id DESC LIMIT 0,5');
?>

<div>
    <table align="center" border="3">
        <tbody>
            <tr>
                <th>ID</th>
                <th>PRENOM</th>
                <th>NOM</th>
                <th>MAIL</th>
            </tr>
            <?php while($m = $membres->fetch()) {?>
                <tr align="center" border="3">
                    <td><?=$m['id']?></td>
                    <td><?=$m['prenom']?></td>
                    <td><?=$m['nom']?></td>
                    <td><?=$m['mail']?></td>
                </tr>
            <?php }?> 
        </tbody>
    </table>
</div>
</br>

<div>
    <table align="center" border="3">
        <tbody>
            <tr>
                <th>ID</th>
                <th>TITRE</th>
                <th>FICHIER</th>
            </tr>
            <?php while($s=$songs->fetch()){?>
                <tr align="center" border="3">
                    <td><?=$s['id']?></td> 
                    <td><?=$s['titre']?></td>
                    <td><?=$s['fichier']?></td>
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