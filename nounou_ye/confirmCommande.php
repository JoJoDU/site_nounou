<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'max_id.php';
        require_once 'calcul.php';
        require_once 'pdoConnexion.php';
        session_start();
        $emailP = $_SESSION['email'];
        $emailN = $_POST['Email'];
        $id = table_max_id($dbh, 'commande', 'ID_C');
        $salaire = $_POST['money'];
        $duree = $_POST['heure'];

        try {
            $requete = "INSERT INTO `commande`(`ID_C`, `Email_N`, `Email_P`, `Duree`, `Salaire`) VALUES ('$id','$emailN','$emailP','$duree',' $salaire')";
            $resultat = $dbh->exec($requete);
            echo 'Votre conmmande a été confirmé! ';
            echo("Après la commande a été fait, n'oubliez pas d'évaluation le nounou!");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        ?>
    </body>
</html>