<?php
include "CRUDAT_PER_LAJME.php";
$id = $_GET["id"];

$strep = new CRUDAT_PER_LAJME();
$News = $strep->getNewsById($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit News</title>
</head>

<body>
    <div class="News">
        <div class="Newslist">
            <form action="" method="post">
                <h1>Edit News</h1>
                <p>News Name: <input type="text" name="newsname" value="<?php echo $News["newsName"] ?>" ><br></p>
                <p>News Text: <input type="text" name="newstext" value="<?php echo $News["newsText"] ?>" ><br></p>
                <p>Foto: <input type="file" name="Foto" value="<?php echo $News["foto"] ?>" ><br></p>
                <button type="submit" name="submitt">Save</button>
            </form>
        </div>
    </div>
</body>

</html>

<?php


if (isset($_POST["submitt"])) {
    if(empty($_POST['newsname']) || empty($_POST['newstext'])){
        echo "Fill all fields!";
    }
    else{
    $id = $News["id"];
    $newsName = $_POST["newsname"];
    $newsText = $_POST["newstext"];
    $foto = $_POST["Foto"];

    $strep->editNews($id, $newsName, $newsText, $foto);
    header("Location: newsdashboard.php");
    exit();
    }
}

?>
