<?php
$fileSize = (2*1024*1024); //2Mb

//#### Upload with restrictions and move to folder####
//If there are no errors (error == 0), continue
if ($_FILES["uploadedFile"]["error"] == 0)
{
    //The user may only upload a file with a size under the defined size:
    if ($_FILES["uploadedFile"]["size"] < $fileSize)
    {
        //The user may only upload gif or .jpeg files 
        $acceptedFileTypes = ["image/gif", "image/jpg", "image/jpeg"];
        
        $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
        $uploadedFileType = finfo_file($fileinfo, $_FILES["uploadedFile"]["tmp_name"]);

        //A shorter version of line 13 - 14
        //$uploadedFileType = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $_FILES["uploadedFile"]["tmp_name"]);

        //If the type is in the array, proceed
        if(in_array($uploadedFileType, $acceptedFileTypes))
        {
            if (!file_exists("upload/" . $_FILES["uploadedFile"]["name"])){
                //If the file does not exist, transfer the file from the temporary folder to the upload folder using the original upload name
                if(move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], "upload/". $_FILES["uploadedFile"]["name"])){
                    echo "Upload: " . $_FILES["uploadedFile"]["name"] . "<br />";
                    echo "Type: " . $uploadedFileType . "<br />";
                    echo "Size: " . ($_FILES["uploadedFile"]["size"] / 1024) . " Kb<br />";
                    echo "Stored temporarily in: " . $_FILES["uploadedFile"]["tmp_name"] . "<br />";
                    echo "Stored permanently in: " . "upload/". $_FILES["uploadedFile"]["name"];
                }else{
                    echo "Something went wrong while uploading.";
                }     
            }else{   
                echo $_FILES["uploadedFile"]["name"] . " already exists. ";               
            }
        }else{
            echo "Invalid file type. Must be gif, jpg or jpeg.";
        }
    }else{
        echo "Invalid file size. Must be less than ". $fileSize/1024/1024 ."Mb.";
    }
}else{
    echo "Error: " . $_FILES["uploadedFile"]["error"] . "<br />";
    echo "See <a href='https://www.php.net/manual/en/features.file-upload.errors.php' target='_BLANK'>PHP.net</a> for the explanation of the error messages.";
}
?> 


