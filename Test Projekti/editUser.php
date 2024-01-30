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
    <title>Edit User</title>
</head>

<body>
    <div class="LoginRegister">
        <div class="Register">
            <form action="" method="post">
                <h1>Edit User</h1>
                <p>Name: <input type="text" name="name" id="name" value="<?php echo $User["Name"] ?>"><br></p>
                <p>Surname: <input type="text" name="surname" id="surname" value="<?php echo $User["Surname"] ?>"><br></p>
                <p>Email: <input type="email" name="regEmail" id="regEmail" value="<?php echo $User["Email"] ?>"><br></p>
                <p>Password: <input type="password" name="regPassword" id="regPassword" value=""><br></p>
                
                <button type="submit" name="submitt">Save</button>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST["submitt"])) {
        if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['regEmail']) || empty($_POST['regPassword'])) {
            echo "Fill all fields!";
        } else {
            $id = $User["id"];
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $regEmail = $_POST["regEmail"];
            $regPassword = $_POST["regPassword"];

            if (strlen($regPassword) < 8) {
                echo "Password should be at least 8 characters long.";
            } else {
                 // $passwordHash = !empty($regPassword) ? password_hash($regPassword, PASSWORD_DEFAULT) : $User["Password"];
                $passwordHash = password_hash($regPassword, PASSWORD_DEFAULT);

                session_start();
        
                $adminName = $_SESSION["admin_username"] ?? "Unknown Admin";

                $strep->editStudent($id, $name, $surname, $regEmail, $passwordHash);
                header("Location: dashboard.php?admin=$adminName");
                exit();
            }
        }
    }
    ?>
    
</body>

</html>
