<?php require_once("connection.php"); ?>

<?php 

$vardas = $_GET["vardas"];
$pavarde = $_GET["pavarde"];
$teises_id = intval($_GET["teises_id"]);


//MEs galime daryt ka norim t.y vykdyti INSERT sql uzklausa

$sql = "INSERT INTO `klientai`(`vardas`, `pavarde`, `teises_id`) VALUES ('$vardas','$pavarde',$teises_id)";
if(mysqli_query($conn, $sql)) {

    <div class="alert alert-success" role="alert">
                <?php echo $message; ?>
    </div>


    echo "Vartotojas pridėtas sėkmingai";
} else {
    echo "Kazkas ivyko negerai. Uzklausa nesekminga";
}

?>