<?php 

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "testdarbas";
$charset = "utf8mb4";


$conn = new mysqli($servername, $username, $pass, $dbname); // connection

//=============================================================================

$idVarNews = 1; 
$newsType1 = 'Functions';

storeNewsType($conn, $idVarNews, $newsType1); 


$idVarNews = 2; 
$newsType1 = 'Modules';

storeNewsType($conn, $idVarNews, $newsType1);

$idVarNews = 3; 
$newsType1 = 'Updates';

storeNewsType($conn, $idVarNews, $newsType1);

$idVarNews = 4; 
$newsType1 = 'News';

storeNewsType($conn, $idVarNews, $newsType1);


//==================================================================================

function storeNewsType($conn, $idVarNews, $newsType1) {

    
         if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
         }
 
         $sql = "INSERT INTO news_type (id, newsType)
         VALUES ('$idVarNews', '$newsType1')";


        if ($conn->query($sql) === TRUE) {

                
            echo "New record in table news_type created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
            return;
  }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./create_table_users.php">Create Table Users</a>
    <a href="./create_table_news.php">Create Table News</a>
    <a href="./create_table_news_type.php">Create Table News Type</a>
    <a href="./update.php">Update</a>
    <a href="./display.php">Display</a>
    NEWS TYPE
</body>
</html>