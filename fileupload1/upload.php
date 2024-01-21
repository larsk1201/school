<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_FILES["uploadedFile"]["error"] == 0){
        $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
        $uploadedFileType = finfo_file($fileinfo, $_FILES["uploadedFile"]["tmp_name"]);
        if(!file_exists("uploads/" . $_FILES["uploadedFile"]["name"])){
            if(move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], "uploads/". $_FILES["uploadedFile"]["name"])){
                echo "Upload: " . $_FILES["uploadedFile"]["name"] . "<br />";
                echo "Type: " . $uploadedFileType . "<br />";
                echo "Size: " . ($_FILES["uploadedFile"]["size"] / 1024) . " Kb<br />";
                echo "Stored temporarily in: " . $_FILES["uploadedFile"]["tmp_name"] . "<br />";
                echo "Stored permanently in: " . "uploads/". $_FILES["uploadedFile"]["name"];
            }else{
                echo "Something went wrong while uploading.";
            }
        }else{
            echo $_FILES["uploadedFile"]["name"] . "already exists.";
        }
    }else{
        echo "Error: " . $_FILES["uploadedFile"]["error"] . "<br />";
    }
}
?>