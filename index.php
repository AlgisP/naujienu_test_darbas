<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
<form action="upload_to_uploads_folder.php" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
      <input type="file" name="file">
      <input type="submit" name="submit" value="Upload">
  </form>
  <hr>  <!--

  <form action="upload_to_uploads_subfolder.php" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
      <input type="file" name="file">
      <input type="submit" name="submit" value="Upload">
  </form>
  <hr>


  <form action="upload_to_my_folder.php" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
      <input type="file" name="file">
      <input type="submit" name="submit" value="Upload">
  </form>
  <hr>

-->
  
 /*
  
  
  <?php
  // Include the database configuration file
  include 'config.php';
  // Get images from the database
  $query = $db->query("SELECT file_name FROM images ORDER BY uploaded_on DESC");
  if($query->num_rows > 0){
      while($row = $query->fetch_assoc()){
          $imageURL = 'uploads/'.$row["file_name"];
  ?>
      <img src="<?= $imageURL; ?>" />
  <?php }} ?>
</body>
</html>
*/
<!--
<form action="" method="post">

<button type="submit" name="types" value="tuneDown">changeType</button>

<button type="submit" name="frequency" value="tuneDown">showPostsFromNews</button>
<button type="submit" name="frequency" value="tuneDown">hidePostsFromNews</button>

<button type="submit" name="frequency" value="tuneDown">createNews</button>

<button type="submit" name="frequency" value="tuneDown">updateNews</button>

<button type="submit" name="frequency" value="tuneDown">saveNews</button>

<script src="./js/main.js" type="module"></script>

</form>

-->