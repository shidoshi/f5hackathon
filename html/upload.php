<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["configFileUp"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
echo "Checking file type for " . $target_file . "<P/>";
// Check if file is really a text file or some weird binary
if(isset($_POST["submit"])) {
    $finfo = finfo_open(FILEINFO_MIME_TYPE); //return mime type
    $check = finfo_file($finfo, $_FILES["configFileUp"]["tmp_name"]);
    if(strpos($check, 'text') !== false) {
        echo "File is a text file - " . $target_file . ".<P/>";
        $uploadOk = 1;
    } else {
        echo "File is not a text file.<P/>";
        $uploadOk = 0;
    }
}
if ($uploadOk) {
	echo file_get_contents($_FILES["configFileUp"]["tmp_name"]);
	$output = shell_exec('ls -lart');
	echo "<pre>$output</pre>";
}
?>
