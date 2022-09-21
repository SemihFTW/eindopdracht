<?php 
include '../classes/db.class.php';
include '../classes/Utility.class.php';
include '../controllers/Utility.cont.php';

if (isset($_POST['submit']))
{

    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $postcode = $_POST['postcode'];
    $utility = new UtilityController();
    $insert = $utility->insertUser($voornaam, $achternaam, $postcode);

    header("location: /views/index.php?error=none");
    exit();
}
