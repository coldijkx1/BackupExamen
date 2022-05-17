<?php
session_start();
require_once('config.php');

if(isset($_POST['submit']))
{
    $error_msg = [];

    $sql = "SELECT id, Boekingsnummer, Titel, Bestemming, Omschrijving, Begindatum, Einddatum, Maxinschrijvingen FROM Reis";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["Boekingsnummer"]. " " . $row["Titel"]. " " . $row["Bestemming"]." " . $row["Begindatum"]." " . $row["Einddatum"]." " . $row["Maxinschrijvingen"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

}

?>