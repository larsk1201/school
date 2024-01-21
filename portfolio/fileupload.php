<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Portfolio</title>
</head>
<body>
    <header>
        <h1>File Upload</h1>
    </header>
    <?php
    include("nav.php");
    ?>
    <div class="container">
        <div class="fileupload">
            <h1>Upload file</h1>
            <form action="uploadfiles.php" method="post" enctype="multipart/form-data">
                <label for="file">Choose file:</label>
                <input type="file" name="uploadedFile" id="file" />
                <input type="submit" name="submit" value="Upload file" />
            </form>
        </div>
    </div>
    <footer>
        <p>&copy; 2023 Lars Kuijer</p>
    </footer>
</body>
</html>
