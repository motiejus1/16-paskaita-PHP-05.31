<?php require_once("connection.php"); ?>

<?php


    $sql = "SELECT * FROM klientai
    WHERE 1
    LIMIT 50
    ";

    $result = $conn->query($sql);// uzklausos vykdymas
    echo "<table>"
    while($clients = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>". $clients["ID"]. "</td>";
        echo "<td>". $clients["vardas"]. "</td>";
        echo "<td>". $clients["pavarde"]. "</td>";
        echo "<td>". $clients["teises_id"]. "</td>";
        echo "</tr>";
    }
    
?>