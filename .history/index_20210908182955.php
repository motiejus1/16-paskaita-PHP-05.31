
<?php require_once("connection.php") ?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
</head>
<body>

    <form action="index.php" method="POST">
        <button type="submit" name="submit">Show clients</button> 
    </form>

    <?php 
        if(isset($_POST["submit"])) {
            //siunciam uzklausa i duomenu baze
            //duomenis atvaizduojame
        }
    
    
    ?>
    <?php 
    //AJAX - duomenu siuntimo i serveri Javascript pagalba technika.

    // Mygtuko paspaudimu atvaizduoti 50 klientu (be puslapio persikrovimo).
    ?>



    <script src="script.js"></script>
</body>
</html>