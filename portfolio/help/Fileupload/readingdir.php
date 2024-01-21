<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
    <body>
		<div id="main">
			<?php
			// Check file permissions  
			echo "<h1>File permissions</h1>";
			// Decimal value
			echo "Numeric value: ". fileperms("readingdir.php");
			echo "<br>";
			
			// Octal value
			echo "Octal value: ". substr(sprintf("%o",fileperms("readingdir.php")),-4);
			echo "<br>";   
			
			//Show all in dir
			$dir = "upload";		
			echo "<h1>File directory listing in directory: " . $dir . "</h1>";
			$dirOpen = opendir($dir);
			while ($curFile = readdir($dirOpen))
			{
				echo $curFile . "<br />";
				echo "<img src='". $dir . "/" .$curFile . "' alt='an image from the bay' class='image'><br><br>";
				
			}
			closedir($dirOpen);
			?>
			<br />
			
			<h1>Unix permission table</h1>
			<table class="wikitable" style="text-align: center; border: 1px solid;">
				<tbody>
					<tr>
						<th>Symbolic Notation</th>
						<th>Octal Notation</th>
						<th>English</th>
					</tr>
					<tr>
						<td style="text-align: left; padding-left: 5%;"><code>----------</code></td>
						<td>0000</td>
						<td style="text-align: left; padding-left: 5%;">no permissions</td>
					</tr>
					<tr>
						<td style="text-align: left; padding-left: 5%;"><code>---x--x--x</code></td>
						<td>0111</td>
						<td style="text-align: left; padding-left: 5%;">execute</td>
					</tr>
					<tr>
						<td style="text-align: left; padding-left: 5%;"><code>--w--w--w-</code></td>
						<td>0222</td>
						<td style="text-align: left; padding-left: 5%;">write</td>
					</tr>
					<tr>
						<td style="text-align: left; padding-left: 5%;"><code>--wx-wx-wx</code></td>
						<td>0333</td>
						<td style="text-align: left; padding-left: 5%;">write &amp; execute</td>
					</tr>
					<tr>
						<td style="text-align: left; padding-left: 5%;"><code>-r--r--r--</code></td>
						<td>0444</td>
						<td style="text-align: left; padding-left: 5%;">read</td>
					</tr>
					<tr>
						<td style="text-align: left; padding-left: 5%;"><code>-r-xr-xr-x</code></td>
						<td>0555</td>
						<td style="text-align: left; padding-left: 5%;">read &amp; execute</td>
					</tr>
					<tr>
						<td style="text-align: left; padding-left: 5%;"><code>-rw-rw-rw-</code></td>
						<td>0666</td>
						<td style="text-align: left; padding-left: 5%;">read &amp; write</td>
					</tr>
					<tr>
						<td style="text-align: left; padding-left: 5%;"><code>-rwxrwxrwx</code></td>
						<td>0777</td>
						<td style="text-align: left; padding-left: 5%;">read, write, &amp; execute</td>
					</tr>
				</tbody>
			</table>
		</div>
    </body>
</html>
