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
            <p>Email: <input type="email" name="regEmail" value="<?php echo $User["Email"] ?>" required><br></p>
            <p>Password: <input type="password" name="regPassword" value="<?php echo $User["Password"] ?>" required><br></p>
                
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
    
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $errors = array();

                if (empty($name) || empty($surname) || empty($regEmail) || empty($regPassword)) {
                    array_push($errors, "All fields are required!");
                }
                if(!filter_var($regEmail, FILTER_VALIDATE_EMAIL)){
                    array_push($errors, "Email is not valid!");
                }
                if(strlen($regPassword)<6){
                    array_push($errors, "Password must be at least 6 characters long!");
                }

    $strep->editStudent($id, $name, $surname, $regEmail, $passwordHash);
    header("Location: dashboard.php");
}

?>
