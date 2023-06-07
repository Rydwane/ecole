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
            	<th> </th>
                <th>Lundi</th>
                <th>Mardi</th>
                <th>Mercredi</th>
                <th>Jeudi</th>
                <th>Vendredi</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php 
                echo "<tr>";
                echo "<td>7h à 10h </td>";
                echo "<td>Systèmes d'informations et réseaux informatiques</td>";
                echo "<td> </td>";
                echo "<td>Base de données relationnelles</td>";
                echo "<td>Système d'informations et réseaux informatiques</td>";
                echo "<td> </td>";
                echo "</tr>";
                
                 echo "<tr>";
                echo "<td>10h à 13h </td>";
                echo "<td>Systèmes d'informations et réseaux informatiques</td>";
                echo "<td> </td>";
                echo "<td>Base de données relationnelles</td>";
                echo "<td>Système d'informations et réseaux informatiques</td>";
                echo "<td> </td>";
                echo "</tr>";
                
                 echo "<tr>";
                echo "<td>14h à 17h </td>";
                echo "<td></td>";
                echo "<td>Force de vente et communication digitale </td>";
                echo "<td></td>";
                echo "<td>modélisation UML</td>";
                echo "<td> Modélisation UML</td>";
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
