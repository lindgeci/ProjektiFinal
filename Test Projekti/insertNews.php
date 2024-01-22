<?php
include_once("NEWS.php");
include_once('CRUDAT_PER_LAJME.php');

if (isset($_POST["submit"])) {
    $newsname = $_POST["newsname"];
    $newstext = $_POST["newstext"];

    
    $NEWS = new NEWS($newsname, $newstext);
    $crud = new CRUDAT_PER_LAJME();
    $crud->insertNews($NEWS);
    header("Location: index.php");
    
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
                <p>News : <input type="text" name="newsname" required><br></p>
                <p>Text: <input type ="text" name="newstext" required><br></p>
                <button type="submit" name="submit">Add News</button>
            </form>
        </div>
    </div>
    <div>
        <a href="index.php">GO BACK</a>
    </div>
</body>

</html>
