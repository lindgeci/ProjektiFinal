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
            <p>Name: <input type="text" name="name" id = "name" value="<?php echo $User["Name"] ?>" ><br></p>
            <p>Surname: <input type="text" name="surname" id = "surname" value="<?php echo $User["Surname"] ?>" ><br></p>
            <p>Email: <input type="email" name="regEmail" id = "regEmail" value="<?php echo $User["Email"] ?>" ><br></p>
            <p>Password: <input type="text" name="regPassword" id = "regPassword" value="<?php echo $User["Password"] ?>" ><br></p>
                
            <button type="submit" name="submit">Save</button>
        </form>
    </div>
</div>

</body>
</html>


<?php

if (isset($_POST["submit"])) {
    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['regEmail']) || empty($_POST['regPassword'])){
        echo "Fill all fields!";
    } else {
        $id = $User["id"];
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $regEmail = $_POST["regEmail"];
        $regPassword = $_POST["regPassword"];

        $passwordHash = password_hash($regPassword, PASSWORD_DEFAULT);
        
        $strep->editStudent($id, $name, $surname, $regEmail, $passwordHash);
        
        header("Location: dashboard.php");
        exit();
    }
}


?>

