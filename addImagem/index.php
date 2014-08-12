<!DOCTYPE html>
<html lang="pr-br">
<head>
<meta charset="utf-8">
<title>Upload Multiplo com PHP</title>
</head>

<body>
	
	<?php include "upload.php"; ?>
	
	<form action="" method="post" enctype="multipart/form-data">
		
		<input type="file" name="img[]" multiple>
		<input type="submit" name="upload" value="Upload">
		
	</form>
	
</body>
</html>
