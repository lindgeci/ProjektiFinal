<?php
session_start();

$usersFilePath = 'users.json';
$users = file_exists($usersFilePath) ? json_decode(file_get_contents($usersFilePath), true) : [];

    if (isset($_POST['name'], $_POST['surname'], $_POST['regEmail'], $_POST['regPassword'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['regEmail'];
        $password = password_hash($_POST['regPassword'], PASSWORD_DEFAULT);

        if (!empty($email) && !array_key_exists($email, $users)) {
            $users[$email] = ['password' => $password, 'role' => 'user'];

            
            file_put_contents($usersFilePath, json_encode($users));

            $_SESSION['user'] = $email;
            $_SESSION['role'] = 'user';

            header('Location: index.php');
            exit();
        } else {
            echo "Email already exists";
        }
    }

?>
