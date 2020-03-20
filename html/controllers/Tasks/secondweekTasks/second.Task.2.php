<?php

class Uploads
{
    protected $files_details;

    protected $upload_path = "/var/www/sharkoprojects.com/html/uploads/";

    protected $uploaded_file;

    public function __construct()
    {
        $this->files_details = $_FILES;
        print_r($_FILES);
    }

    public function uploadFiles()
    {
        //print_r($this->files_details);
        $file_name = $this->files_details['upload-file']['name'];
        $tmp_path = $this->files_details["upload-file"]["tmp_name"];

        $file_type = $this->files_details['upload-file']['type'];
        // Get the image extension
        $file_extension = substr($file_type, 6);
        echo $file_extension;
        //Allowed extension Type
        $allowed_file_type = ["jpg","jpeg","png","gif","webp"];
        // Validation for allowed extensions .in_array() function searches an array for a specific value.
        if($this->files_details["upload-file"]["error"] == 4){
            echo ("<script>
            var redirect = confirm('Sorry! No files was selected. Please select a file first.');
            if(redirect)
            { 
                window.history.back();
            }
            </script>");
        }
        else{
            if (!in_array($file_extension, $allowed_file_type)) {
                echo "<script>alert('Sorry! Invalid format. Only jpg / jpeg/ png /gif /webp format allowed');</script>";
                echo "<h2>Please upload valid image format only.</h2>";
            } else {
                $this->uploaded_file = md5($file_name).".".$file_extension;
                if (move_uploaded_file($tmp_path, $this->upload_path.$this->uploaded_file)) {
                    echo "<h2>Files Has been uploaded successfully</h2>";
                } elseif ($this->files_details["upload-file"]["error"] > 0) {
                    echo "Error: " . $_FILES["upload-file"]["error"] . "<br />";
                }
            }
        }
        
        
    }

    public function showFile()
    {
        echo "<img src='/uploads/".$this->uploaded_file."'"."style='display:block; margin:auto; width:100% auto;height: 100%'alt='Uploaded Image'>";
    }
}

$upload = new Uploads;
$upload->uploadFiles();
$upload->showFile();
