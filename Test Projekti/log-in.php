<?php
session_start();

$users = [
    'user@example.com' => ['password' => password_hash('user_Password123', PASSWORD_DEFAULT), 'role' => 'user'],
    'admin@example.com' => ['password' => password_hash('admin_Password123', PASSWORD_DEFAULT), 'role' => 'admin'],
];

if (isset($_POST['loginEmail'], $_POST['loginPassword'])) {
    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];

    if (array_key_exists($loginEmail, $users)) {
        $userData = $users[$loginEmail];

        if (password_verify($loginPassword, $userData['password'])){
            $_SESSION['user'] = $loginEmail;
            $_SESSION['role'] = $userData['role'];

            if ($_SESSION['role'] === 'admin') {
                header('Location: index.php');
            } else {
                header('Location: index.php');
            }
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}
?>
