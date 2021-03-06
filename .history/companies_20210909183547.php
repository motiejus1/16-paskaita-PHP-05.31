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

        <?php 
        //sukurti mygtuka, kuris iskleistu imoniu pridejimo forma ir ta forma naudodama AJAX pridetu nauja imone
        //bei ja parodytu lenteleje
        ?>

        <button></button>

        <table class="table table-striped">
            <?php 
            
            $sql = "SELECT imones.ID, imones.pavadinimas AS imones_pavadinimas, imones.aprasymas AS imones_aprasymas, imones_tipas.pavadinimas AS imones_tipas_pavadinimas, imones_tipas.aprasymas AS imones_tipas_aprasymas 
            FROM `imones` 
            LEFT JOIN imones_tipas ON imones.tipas_ID = imones_tipas.ID 
            WHERE 1 
            ORDER BY imones.ID DESC";

            $result = $conn->query($sql);

            while($companies = mysqli_fetch_array($result)) {
                echo "<tr>";
                    echo "<td>".$companies["ID"]."</td>";
                    echo "<td>".$companies["imones_pavadinimas"]."</td>";
                    echo "<td>".$companies["imones_aprasymas"]."</td>";
                    echo "<td>".$companies["imones_tipas_pavadinimas"]."</td>";
                    echo "<td>".$companies["imones_tipas_aprasymas"]."</td>";
                echo "</tr>";
            }
            
            ?>

        </table>
    </div>
</body>
</html>