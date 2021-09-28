<?php
namespace News;
use PDO;
class Db_news {

    private $pdo;

    public function __construct()
    {
        // Pagrindiniai nustatymai
        $host = '127.0.0.1';
        $db   = 'testdarbas';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

        // Papildomi nustatymai
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $this->pdo = new PDO($dsn, $user, $pass, $options); //<---- prisijungimas
    }

//================================================================

public function storeUsers(array $props)
    {

        $sql = "INSERT INTO users (`id`, `user`, `password`)
        VALUES (".$props['id'].", '".$props['user']."''".$props['password']."')";

        $stmt = $this->pdo->prepare($sql);

    }

public function storeNews(array $props) // <----- ['frequency' => '88.7']
    {
        // $sql = "INSERT INTO medziai (`type`, `name`) 
        // VALUES (".$props['type'].", '".$props['name']."');";


        $sql = "INSERT INTO news (`id`, `short`, `full_text`, `visible`, `news_type.id`, `created_at`,`updated_at`,`visible_at`)
        VALUES (".$props['id'].", '".$props['short']."''".$props['full_text'].", '".$props['visible'].", '".$props['news_type.id'].", '".$props['created_at'].", '".$props['updated_at'].", '".$props['visible_at']."')"; 
      //  VALUES (:fr );";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([ 'fr' => $props['frequency'] ]); // Cia negerai



        // $this->pdo->query($sql);
    }

    public function storeNewsType(array $props)
    {

        $sql = "INSERT INTO news_type (`id`, `type_name`)
        VALUES (".$props['id'].", '".$props['type_name']."')";

        $stmt = $this->pdo->prepare($sql);

    }

    public function updateNewsType1($props) {

        $sql = "UPDATE news_type SET funct".
        $props;       
        " WHERE id = 1";

        $this->pdo->query($sql);

    }

    public function updateNewsType2($props) {

        $sql = "UPDATE news_type SET module".
        $props;       
        " WHERE id = 2";

        $this->pdo->query($sql);

    }

    public function updateNewsType3($props) {

        $sql = "UPDATE news_type SET updates".
        $props;       
        " WHERE id = 3";

        $this->pdo->query($sql);

    }

    public function updateNewsType4($props) {

        $sql = "UPDATE news_type SET news".
        $props;       
        " WHERE id = 4";

        $this->pdo->query($sql);

    }


    

    public function showNewsPosts()

    {



    }

    public function hideNewsPosts()

    {



    }

    public function writeNews()

    {



    }


    public function updateNews()

    {



    }

    public function dataPicker()

    {



    }

    public function createdAt()

    {



    }


    public function updatedAt()

    {




    }

    public function now()

    {



    }

    public function numberOfPostsType1($limit)

    {


        return $limit;
    }

    public function numberOfPostsType2($limit)

    {


        return $limit;
    }

    public function numberOfPostsType3($limit)

    {


        return $limit;
    }

    public function numberOfPostsType4($limit)

    {


        return $limit;
    }


}