<?php
session_start();
if(isset($_SESSION['id']))
    {
    if($_SESSION['id']==1)
    {
        $id='admin';
    }
    else
    {
        $id='user';
    }
    }
else
{
    $id='none';
    $img_accueil='assets/images/moodule_background_index_none.png';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<?php
require('meta.php');
?>

    <title>Acceuil</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body class="<?=$id?>_body">
<header>
<?php
require('header.php');
?>
</header>
<main>
    
<table>
        <thead>
            <tr>
                <th>Code UE</th>
                <th>Libellé</th>
                <th>Heures cours</th>
                <th>Heures TP</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                echo "<tr>";
                echo "<td>1INF1521</td>";
                echo "<td>Analyse et concpetion orienté objet </td>";
                echo "<td>20</td>";
                echo "<td>10</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>2INF1521</td>";
                echo "<td>Application avec les langages Java et C++</td>";
                echo "<td>10</td>";
                echo "<td>15</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>3INF1521</td>";
                echo "<td>Modélisation UML</td>";
                echo "<td>10</td>";
                echo "<td>15</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>4INF1521</td>";
                echo "<td>Base de données relationnelles</td>";
                echo "<td>10</td>";
                echo "<td>15</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>5INF1521</td>";
                echo "<td>Pratique du Devops</td>";
                echo "<td>10</td>";
                echo "<td>15</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>6INF1521</td>";
                echo "<td>Cloud computing</td>";
                echo "<td>10</td>";
                echo "<td>15</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>7INF1521</td>";
                echo "<td>Réseaux et sécurité informatiques</td>";
                echo "<td>50</td>";
                echo "<td>30</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>8INF1521</td>";
                echo "<td>Développement des applications web et mobile</td>";
                echo "<td>50</td>";
                echo "<td>30</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>9INF1521</td>";
                echo "<td>Gestion de projets informatiques</td>";
                echo "<td>40</td>";
                echo "<td>20</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>10INF1521</td>";
                echo "<td>Force de vente et communication digitale</td>";
                echo "<td>10</td>";
                echo "<td>5</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>12INF1521</td>";
                echo "<td>Technique entreprenariale</td>";
                echo "<td>20</td>";
                echo "<td>10</td>";
                echo "</tr>";

            
            ?>
        </tbody>
    </table>

</main>
<footer>
<?php
require('footer.php');
?>
</footer>
</body>
</html>
