<?php
include_once('CRUDAT_PER_LAJME.php');

if (isset($_POST["submit"])) {
    $newsName = $_POST["newsName"];
    $newsText = $_POST["newsText"];

    $crud = new CRUDAT_PER_LAJME();
    $crud->insertNews($newsName, $newsText);
    header("Location: newsdashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add News</title>
</head>

<body>
    <div class="InsertNews">
        <div class="NewsForm">
            <form action="" method="post">
                <h1>Insert News</h1>
                <p>News Name: <input type="text" name="newsname" required><br></p>
                <p>News Text: <textarea name="newstext" required></textarea></p>
                <button type="submit" name="submit">Add News</button>
            </form>
        </div>
    </div>
</body>

</html>
