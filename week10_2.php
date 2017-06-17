<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<form action = "upload.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="10000000">

	<?php
	$i=$_POST["count"];
	for($j=0;$j<$i;$j++){
	?>

	¿ï¾ÜÀÉ®×<?php echo $j+1;?>:<input type="file" name="uploadfile[]">

	<?php
	
	}
	?>

	<input type="hidden" name="number" value=<?php $i; ?>>
	<input type="submit" value="°e¥X">
	</form>

</body>
</html>