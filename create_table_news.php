<?php 

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "testdarbas";
$charset = "utf8mb4";


$conn = new mysqli($servername, $username, $pass, $dbname); // connection

$numberOfPosts = 10;
/*
$limit = $numberOfPosts;
$idVarNews = 1;

for ($i = 1; $i <= $limit; $i++) {

    $idVarNews++;
    storeUsers($conn, $idVarNews);
    
} */
function now() {
    date_default_timezone_set('Europe/Vilnius');
    return date('Y-m-d H:i:s');
    }


echo now();


$idVarNews = 1;
$short = "text of news";
$full = "full text of news";
$visible = true;
$news_type_id = 3;
$mysqltime_created_at = now();



$mysqltime_updated_at = now();




$mysqltime_visible_at = now();
/*
echo $mysqltime_created_at;
echo $mysqltime_updated_at;
echo $mysqltime_visible_at; */

// storeNews($conn, $idVarNews, $short, $full, $visible, $news_type_id, $mysqltime_created_at, $mysqltime_updated_at, $mysqltime_visible_at);


/*

    $mysqltime_created_at = date ('Y-m-d H:i:s', $phptime); 
    $mysqltime_updated_at = date ('Y-m-d H:i:s', $phptime);
    $mysqltime_visible_at = date ('Y-m-d H:i:s', $phptime);

    */

function storeNews($conn, $idVarNews, $short, $full, $visible, $news_type_id, $mysqltime_created_at, $mysqltime_updated_at, $mysqltime_visible_at) {

    // $conn = new mysqli($servername, $username, $pass, $dbname);
 
 
         if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
         }
 

         
         $sql = "INSERT INTO news (id, short, full, visible, news_type_id, created_at, updated_at, visible_at)
         VALUES ('$idVarNews', '$short', '$full', '$visible', '$news_type_id', '$mysqltime_created_at', '$mysqltime_updated_at', '$mysqltime_visible_at')";


if ($conn->query($sql) === TRUE) {

           
    echo "New record of table News created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

 }

// storeNews($conn, $idVarNews, $short, $full, $visible, $news_type_id, $mysqltime_created_at, $mysqltime_updated_at, $mysqltime_visible_at);

function updateNews () {



}

function changeNewsType () {


}


function hidePostsFromNews () {


}


function showPostsFromNews () {


}

$idVarNews = 1;

function displayOnePostFromNews ($conn, $idVarNews) {

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
 /*     
if ( ) {

}*/
      // $sql = "SELECT id, short, full, visible, news_type_id, created_at, updated_at, Visible_at FROM news";
      $sql = "SELECT id FROM news";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "id: " . $row["$id"]. /*" - Name: " . $row["firstname"]. " " . $row["lastname"].*/ "<br>";
        }
      } else {
        echo "0 results";
      }
      
      mysqli_close($conn);
}

displayOnePostFromNews($conn, $idVarNews);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document2</title>
</head>
<body>

    <a href="./create_table_users.php">Create Table Users</a>
    <a href="./create_table_news.php">Create Table News</a>
    <a href="./create_table_news_type.php">Create Table News Type</a>
    <a href="./update.php">Update</a>
    <a href="./display.php">Display</a>


   <!-- <form action="" method="post"> -->

    <h1>
    
        ADMIN DASHBOARD

    </h1>

    <button type="submit" name="create">CREATE NEWS</button>

    <button type="submit" name="update" value="<?= $news1['id'] ?>">UPDATE NEWS</button>

    <button type="submit" name="change-type" value="<?= $news1['id'] ?>">CHANGE NEWS TYPE</button>

    <button type="submit" name="show-posts" value="<?= $news1['id'] ?>">SHOW POSTS FROM NEWS</button>

    <button type="submit" name="hide-posts" value="<?= $news1['id'] ?>">HIDE POSTS FROM NEWS</button>

    <button type="submit" name="display" value="<?= $news1['id'] ?>">DISPLAY ONE POST OF NEWS</button>

    <!--

    <?php foreach($_SESSION['a'] as $news1): ?>

<div>
News 1 id <?= $news1['id'] ?>

Object title: <?= $news1['title'] ?>

<button type="submit" name="display" value="<?= $news1['id'] ?>">DISPLAY NEWS</button>
</div>

<?php endforeach ?>



    <?php foreach($_SESSION['a'] as $object): ?>

    <div>
    Object id <?= $object['id'] ?>
    Object title: <?= $object['title'] ?>
    <button type="submit" name="display" value="<?= $object['id'] ?>">DISPLAY OBJECTS</button>
    </div>

    <?php endforeach ?>
    <button type="submit" name="update">UPDATE NEWS</button>
    </form>


    <a href="news.php?id=news[id]"></a>

    <?php
foreach ($objects as $object) {
  echo "<a href='news.php?id=".$object[id]."'>".$object[title]."</a><br>";
}
?> -->

    CREATE TABLE NEWS
</body>
</html>