<?php
    $file = $_FILES['upload-file']['name'];
    $full_path = pathinfo($file)."/uploads"."$file";
    $path = pathinfo($file);    
   print_r($path['dirname']);
   if ($_FILES["upload-file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["upload-file"]["error"] . "<br />";
  }
else
  {
  echo "Upload: " . $_FILES["upload-file"]["name"] . "<br />";
  echo "Type: " . $_FILES["upload-file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["upload-file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["upload-file"]["tmp_name"];
  }
    echo "<img src='$file' style='width:200px;height:400px'alt='Uploaded Image'>";
?>