<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
		//Assignment -> How to upload gif only?

        if ($_FILES["uploadedFile"]["error"] > 0)
        {
            echo "Error: " . $_FILES["uploadedFile"]["error"] . "<br>";
        } 
		else
        {
            echo "Upload: " . $_FILES["uploadedFile"]["name"] . "<br>";
            echo "Type: " . $_FILES["uploadedFile"]["type"] . "<br>";
            echo "Size: " . ($_FILES["uploadedFile"]["size"] / 1024) . " Kb<br>";
            echo "Stored in: " . $_FILES["uploadedFile"]["tmp_name"];
        }

        /*
          By using the global PHP $_FILES array you can upload files from a client computer to the remote server.

          The first parameter is the form's input name and the second index can be either "name", "type", "size", "tmp_name" or "error". 
          Like this:

         * $_FILES["file"]["name"] - the name of the uploaded file
         * $_FILES["file"]["type"] - the type of the uploaded file
         * $_FILES["file"]["size"] - the size in bytes of the uploaded file
         * $_FILES["file"]["tmp_name"] - the name of the temporary copy of the file stored on the server
         * $_FILES["file"]["error"] - the error code resulting from the file upload

          This is a very simple way of uploading files. For security reasons, you should add restrictions on what the user
          is allowed to upload.
         */
        ?> 
    </body>
</html>
