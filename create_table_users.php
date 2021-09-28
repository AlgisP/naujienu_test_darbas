<?php 

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "testdarbas";
$charset = "utf8mb4";

// Create connection



$conn = new mysqli($servername, $username, $pass, $dbname); // connection
// Check connection

$temp = 0;
$idVar = 0;



$numberOfPosts = 10;

$limit = $numberOfPosts; 

//  for ($i = 1; $i <= $limit; $i++) {

    // $idVar++;
    storeUsers($conn, $idVar);
    
// }

function now() {
    date_default_timezone_set('Europe/Vilnius');
    return date('Y-m-d H:i:s');
    }


echo now();

function storeUsers($conn, $idVar) {

          if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        
        $sql = "INSERT INTO users (id, user, passw)
        VALUES ('$idVar', 'Doe3', 'pass7')";

         

        // echo $sql;

                      
        if ($conn->query($sql) === TRUE) {

           
        echo "New record in table users created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        

      //  $conn->close();
      return $idVar;
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document1</title>
</head>
<body>

    <a href="./create_table_users.php">Create Table Users</a>
    <a href="./create_table_news.php">Create Table News</a>
    <a href="./create_table_news_type.php">Create Table News Type</a>
    <a href="./update.php">Update</a>
    <a href="./display.php">Display</a>

    CREATE
</body>
</html>