<?php require_once("connection.php"); ?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies</title>

    <?php require_once("includes.php"); ?>

</head>
<body>
    <div class="container">
        <table class="table table-striped">
            <?php 
            
            $sql = "SELECT imones.ID, imones.pavadinimas AS imones_pavadinimas, imones.aprasymas AS imones_aprasymas, imones_tipas.pavadinimas AS imones_tipas_pavadinimas, imones_tipas.aprasymas AS imones_tipas_aprasymas 
            FROM `imones` 
            LEFT JOIN imones_tipas ON imones.tipas_ID = imones_tipas.ID 
            WHERE 1 
            ORDER BY imones.ID DESC";

            $result = $conn->query($sql);

            while($companies = mysql)
            
            ?>

        </table>
    </div>
</body>
</html>