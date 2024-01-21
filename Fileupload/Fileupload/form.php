<!DOCTYPE html>
<html>
    <head>
        <title>The bay of Pirates</title>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
    <body>
		<div id="main">
			<h1 id="title">The bay of Pirates</h1>
			<p><img src="img/Logo.jpg" alt="Logo of The bay of Pirates" id="logo"></p>
			
			<!--ENCTYPE-->
			<form action="uploadfiles3.php" method="post" enctype="multipart/form-data">
				<label for="file">Filename:</label>
				<input type="file" name="uploadedFile" id="file" />
				
				<input type="submit" name="submit" value="Aaaarrrrgh" />
			</form>
			<p><a href="readingDir.php">Show everything in the bay</a></p>
		</div>
    </body>
</html>
