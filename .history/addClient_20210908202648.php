<?php require_once("connection.php"); ?>

<?php 

$vardas = $_GET["vardas"];
$pavarde = $_GET["pavarde"];
$teises_id = $_GET["teises_id"];


//MEs galime daryt ka norim t.y vykdyti INSERT sql uzklausa

$sql = "INSERT INTO `klientai`(`vardas`, `pavarde`, `teises_id`) VALUES ('$vardas','$pavarde',$teises_id)";
if(mysqli_query($conn, $sql)) {
    echo "Vartotojas pridėtas sėkmingai";
} else {
    $message =  "Kazkas ivyko negerai";
    $class = "danger";
}

?>