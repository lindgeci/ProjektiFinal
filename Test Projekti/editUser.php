<?php
include "CRUDAT_PER_USER.php";
$id = $_GET["id"];

$strep = new CRUDAT_PER_USER();
$User = $strep->getUserbyId($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="LoginRegister">
    <div class="Register">

    <form action="" method="post">
            <h1>Register</h1>
            <p>Name: <input type="text" name="name" value="<?php echo $User["Name"] ?>" required><br></p>
            <p>Surname: <input type="text" name="surname" value="<?php echo $User["Surname"] ?>" required><br></p>
            <p>Email: <input type="email" name="regEmail" value="<?php echo $User["Email"] ?>" required autocomplete="email"><br></p>
            <p>Password: <input type="password" name="regPassword" value="<?php echo $User["Password"] ?>" required autocomplete="new-password"><br></p>
            <input type="hidden" name="id" value="<?php echo $User["id"] ?>">
            <button type="submit" name="submitt">Save</button>
        </form>
    </div>
</div>

</body>
</html>

<?php

if (isset($_POST["submitt"])) {
    $id = $User["id"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $regEmail = $_POST["regEmail"];
    $regPassword = $_POST["regPassword"];

    $strep->editStudent($id, $name, $surname, $regEmail, $regPassword);
    header("Location: dashboard.php");
}

?>
