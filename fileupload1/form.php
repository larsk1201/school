<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Choose file</label>
        <input type="file" name="uploadedFile" id="file">
        <input type="submit" name="submit" value="Upload file">
    </form>
    <p><a href="uploaded.php">Show all uploaded files</a></p>
</body>
</html>