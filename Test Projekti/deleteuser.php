<?php

include_once "CRUDAT_PER_USER.php";

$id = $_GET['id'];

$strep = new CRUDAT_PER_USER();
$strep->deleteUser($id);


header("Location: dashboard.php");


?>