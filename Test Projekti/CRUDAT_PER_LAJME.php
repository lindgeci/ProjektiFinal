<?php
include_once('databaseN.php');

class CRUDAT_PER_LAJME
{
    private $connection;

    public function __construct()
    {
        $conn = new DATABASE1;
        $this->connection = $conn->startConnection();
    }

    public function insertNews($NEWS){
        $conn = $this->connection;

        $newsname = $NEWS->getNewsName();
        $newstext = $NEWS->getNewsText();


        $sql = "INSERT INTO news(newsName, newsText) VALUES (?, ?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$newsname, $newstext]);
        echo '<script>alert("U Shtua me sukses");</script>';
    }

    public function editNews($id, $newsName, $newsText)
    {
        $conn = $this->connection;
        $sql = "UPDATE news SET newsName=?, newsText=? WHERE id=?";

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
        $statement = $conn->query($sql);
         $newsList = $statement->fetchAll();
        return $newsList;
        }
}
?>
