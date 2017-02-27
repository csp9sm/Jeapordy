<?php
	session_start();
	$_SESSION['questionType'] = $_SESSION['questionType'];
	$_SESSION['Question']= $_SESSION['Question'];
	$_SESSION['Answer'] = $_SESSION['Answer'];

	$str = $_SESSION['questionType']. "\n" .$_SESSION['Question']. "\n" . $_SESSION['Answer'];

			// echo $_SERVER['DOCUMENT_ROOT']; // /Applications/XAMPP/xamppfiles/htdocs
	$filename = "/Applications/XAMPP/xamppfiles/htdocs/cs4640/project/Jeopardy/data/data.txt";
			// chmod($filename, 775);
	if (!empty($str)) {
		$file = fopen($filename, "a");
		fputs($file, $str);
		fclose($file);
	}

?>