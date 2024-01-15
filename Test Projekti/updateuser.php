<?php

session_start();

if (!isset($_SESSION["user"]) || $_SESSION["user"] != "yes") {
    header("Location: login.php");
    exit();
}

if (isset($_GET["id"])) {
    $userId = $_GET["id"];

    require_once "database.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $email = $_POST["email"];

        $sql = "UPDATE users SET Name = ?, Surname = ?, Email = ? WHERE id = ?";
        $stmt = mysqli_stmt_init($conn);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssi", $name, $surname, $email, $userId);
            mysqli_stmt_execute($stmt);
            echo "<div>User updated successfully</div>";
        } else {
            echo "<div>Error updating user</div>";
        }

        mysqli_close($conn);
    } else {
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = mysqli_stmt_init($conn);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "i", $userId);
            mysqli_stmt_execute($stmt);
            
            $result = mysqli_stmt_get_result($stmt);
            $user = mysqli_fetch_assoc($result);

            mysqli_stmt_close($stmt);
        } else {
            echo "<div>Error fetching user data</div>";
            exit();
        }
    }
 } else {
    echo "<div>User ID not provided</div>";
    exit();
}

?>