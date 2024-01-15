<?php
session_start();

if (!isset($_SESSION["user"]) || $_SESSION["user"] != "yes") {
    header("Location: login.php");
    exit();
}

if (isset($_GET["id"])) {
    $userId = $_GET["id"];
    
    require_once "database.php";

    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $userId);
        mysqli_stmt_execute($stmt);
        echo "<div>User deleted successfully</div>";
    } else {
        echo "<div>Error deleting user</div>";
    }

    mysqli_close($conn);
} else {
    echo "<div>User ID not provided</div>";
}
?>
