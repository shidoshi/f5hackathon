<?php
$target_dir = "/config";
$target_file1 = $target_dir . basename($_FILES["configFileUp1"]["name"]);
$target_file2 = $target_dir . basename($_FILES["configFileUp2"]["name"]);
$target_file3 = $target_dir . basename($_FILES["configFileUp3"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
echo "Checking file type for " . $target_file . "<P/>";
// Check if file is really a text file or some weird binary
// Going to make this really ugly for the demo
// Please do not judge me for not following DRY
if(isset($_POST["submit"])) {
    $finfo = finfo_open(FILEINFO_MIME_TYPE); //return mime type
    $check = finfo_file($finfo, $_FILES["configFileUp1"]["tmp_name"]);
    if (strpos($check, 'text') !== false) {
        echo "File is a text file - " . $target_file1 . ".<P/>";
        $uploadOk = 1;
    } else {
        echo "BIG-IP base config does not appear to be a valid config.<P/>";
        $uploadOk = 0;
    }
    //Second check.  This should be a function.
    $check = finfo_file($finfo, $_FILES["configFileUp2"]["tmp_name"]);
    if (strpos($check, 'text') !== false) {
	echo "File is a text file - " . $target_file2 . ".<P/>";
	$uploadOk = 1;
    } else {
	echo "BIG-IP config does not appear to be a valid config.<P/>";
	$uploadOk = 0;
    }
    //Third check, because Rachel says so.
    $check = finfo_file($finfo, $_FILES["configFileUp3"]["tmp_name"]);
    if (strpos($check, 'text') !== false) {
        echo "File is a text file - " . $target_file3 . ".<P/>";
        $uploadOk = 1;
    } else {
        echo "BIG-IP config does not appear to be a valid config.<P/>";
        $uploadOk = 0;
    }
}
if ($uploadOk) {
	$ipAddrPort = "192.241.206.243:8080";
	$ackString = "GET /\n";
	$bigBase = $target_dir . "bigip_base.conf";
	$bigConf = $target_dir . "bigip.conf";
	$bigScript = $target_dir. "bigip_script.conf";
	$fileOut1 = file_get_contents($_FILES["configFileUp1"]["tmp_name"]);
	$fileOut2 = file_get_contents($_FILES["configFileUp2"]["tmp_name"]);
	$fileOut3 = file_get_contents($_FILES["configFileUp3"]["tmp_name"]);
	$fakeFile = "output.txt";
	//file_put_contents($bigBase, $fileOut1);
	//file_put_contents($bigConf, $fileOut2);
	//file_put_contents($bigScript, $fileOut3);
	echo $_FILES["configFileUp1"]["tmp_name"] . " copied to working directory...<P/>";
	echo $_FILES["configFileUp2"]["tmp_name"] . " copied to working directory...<P/>";
	echo $_FILES["configFileUp3"]["tmp_name"] . " copied to working direcotry...<P/>";
	//$output = shell_exec('ls -lart');
	//$output = shell_exec('/usr/bin/tmsh -m load sys config platform-migrate');
	//Can't execute a shell in a seperate container, so hacking a socket connector to netcat
	//$stream = stream_socket_client("tcp://".$ipAddrPort, $errno, $errstr);
	//if (!$stream) {
	//	echo "{$errno}: {$errstr}\n";
	//	die();
	//}
	//fwrite($stream, $ackString);
	//stream_socket_shutdown($stream, STREAM_SHUT_WR); /* close stream, flush buffer*/
	//$output = stream_get_contents($stream);
	//fclose($stream);
	$output = fopen($fakeFile, "r") or die ("Unable to open file!");
	while (!feof($output)) {
	  echo fgets($output) . "<BR/>";
	  sleep(.01);
	}
	fclose($output);
	//echo "<pre>$output</pre>";
	echo "<P><B>MCP functions run.  Your object files are now availabine in /config.</B></P>";
} else {
	echo "Please <A HREF=\"" . $_SERVER["HTTP_REFERER"] . "\">return to the prior page</A> and try again.";
}
?>
