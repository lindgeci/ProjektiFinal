<?php

include_once "CRUDAT_PER_LAJME.php";

$id = $_GET['id'];
$strep = new CRUDAT_PER_LAJME();
$strep->deleteNews($id);


header("Location: newsdashboard.php");


?>