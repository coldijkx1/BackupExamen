<?php 
    include('conn.php');
    if(isset($_POST['Studentnummer'])){
        $firstname=$_POST['Studentnummer'];
        $lastname=$_POST['Boekingsnummer'];
        $username=$_POST['Nummerid'];
        $password=$_POST['Opmerkingen'];
 
        mysqli_query($conn,"insert into inschrijven (Studentnummer, Boekingsnummer, Nummerid, Opmerkingen) values ('$Studentnummer', '$Boekingsnummer', '$Nummerid', '$Opmerkingen')");
    }
?>