<?php

if (isset($_POST['submit_foto'])) {
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];	
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png');

	if (in_array($fileActualExt, $allowed )) {
		if ($fileError === 0) {
			if ($fileSize < 10000) {
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'fotos/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("Location: updates.php?uploadsuccess");
			}
			else{
				echo "Fout, bestand te groot";
			}
		} 
		else{
			echo "FOUT, bestand kan niet worden geupload";

		}
	} 
	else{
		echo "Fout verkeerde bestandtype";
	}
}
?>