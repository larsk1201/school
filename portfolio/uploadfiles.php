<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fileupload</title>
</head>
<body>
    
</body>
</html>
<?php
$fileSize = (3*1024*1024);

if ($_FILES["uploadedFile" ]["error"] == 0) {
    if ($_FILES["uploadedFile"]["size"] < $fileSize) {
        $acceptedFileTypes = ["image/gif", "image/jpg", "image/jpeg"];
        $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
        $uploadedFileType = finfo_file($fileInfo, $_FILES["uploadedFile"]["tmp_name"]);
        if(in_array($uploadedFileType, $acceptedFileTypes)) {
            if (!file_exists("upload/" . $_FILES["uploadedFile"]["name"])) {
                if(move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], "uploadedfiles/". $_FILES["uploadedFile"]["name"])){
                    echo "Upload: " . $_FILES["uploadedFile"]["name"] . "<br />";
                    echo "Type: " . $uploadedFileType . "<br />";
                    echo "Size: " . ($_FILES["uploadedFile"]["size"] / 1024) . " Kb<br />";
                    echo "Stored temporarily in: " . $_FILES["uploadedFile"]["tmp_name"] . "<br />";
                    echo "Stored permanently in: " . "uploadedfiles/". $_FILES["uploadedFile"]["name"];
                    
                } else {
                    echo "Something went wrong while uploading.";
                }
            } else {
                echo $_FILES["uploadedFile"]["name"] . " already exists. ";               
            }
        } else {
            echo "Invalid file type. Must be gif, jpg or jpeg.";
        }
    } else {
        echo "Invalid file size. Must be less than ". $fileSize/1024/1024 ."Mb.";
    }
} else {
    echo "Error: " . $_FILES["uploadedFile"]["error"] . "<br />";
    echo "See <a href='https://www.php.net/manual/en/features.file-upload.errors.php' target='_BLANK'>PHP.net</a> for the explanation of the error messages.";
}
?>