<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- Stappenplan File Upload
            add enctype="multipart/form-data" to form attributes
            add <input type="file">
            use $_FILES["name"] to get file data use vardump to check all attributes
            
            move_uploaded_file(upload/$_FILES["name"]["tmp_name"]); 

            File uploading functions:
                $handle = opendir("DirPath");
                while($curFile = readdir($handle)){use $curFile}
                closedir($handle);
                unlink($filePath); Deletes a file
            
            In File functions:
                fopen("path", "r" (read file)); Creates a file handle
                while(!feof($handle); checks end of file){
                    $line = fgets($handle) gets the next line inside of a file
                }
                fclose($handle); closes file pointer
         EXAMPLE --> 
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="uploadedFile" id="uploadedFile">
            <input type="submit" value="Submit">
        </form>
        <?php
            // Use var_dump($_FILES["uploadedFile"]) to check all the files' attributes 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if($_FILES["uploadedFile"]["error"] == 0){
                    $path = $_FILES["uploadedFile"]["tmp_name"];
                    $name = $_FILES["uploadedFile"]["name"];
                    if(move_uploaded_file($path, "upload/$name")){
                        echo "Upload failed";
                    }
                    else{
                        echo "Upload Succesfull";
                    }
                }
                else{
                    echo "Error with uploading file";
                }
            }
        ?>
    </body>
</html>