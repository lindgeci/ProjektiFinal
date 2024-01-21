<?php
include_once('database.php');

class CRUDAT_PER_LAJME
{
    private $connection;

    public function __construct()
    {
        $conn = new DATABASE;
        $this->connection = $conn->startConnection();
    }

    public function insertNews($newsName,$newsText){
        $conn = $this->connection;

        $newsName = $News->getNewsName();
        $newsText = $News->getNewsText();


        $sql = "INSERT INTO news(newsName, newsText) VALUES (?, ?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$newsName,$newsText]);
        echo '<script>alert("U Shtua me sukses");</script>';
    }

    public function editNews($id, $newsName, $newsText)
    {
        $conn = $this->connection;
        $sql = "UPDATE news SET newsName=? ,newsText=? WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$newsName, $newsText, $id]);

        echo '<script>alert("U ndryshua me sukses");</script>';
    }

    public function deleteNews($id)
    {
        $conn = $this->connection;
        $sql = "DELETE FROM news WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
    }

    public function getNewsById($id)
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM news WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $news = $statement->fetch();
        return $news;
    }

    public function getAllNews()
    {
    $conn = $this->connection;
    $sql = "SELECT * FROM news";
     $statement = $conn->prepare($sql);
     $statement->execute();
     $newsList = $statement->fetchAll();
        return $newsList;
     }
}
?>
