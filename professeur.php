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
                <th>Nom</th>
                <th>Matière</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
                echo "<tr>";
                echo "<td>Anne-Carole HONFONGA </td>";
                echo "<td>Systèmes d'informations et réseaux informatiques</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>Aubin ADJIKOUI</td>";
                echo "<td>Force de vente et communication digitale</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>Jerome SOHOU</td>";
                echo "<td>Analyse et conception orienté objet</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>Nazif TCHAGAFO</td>";
                echo "<td>DevOps et Cloud</td>";
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
