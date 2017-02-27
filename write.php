<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<!-- this is to deal with submitting the form data so it will be written to the text file -->
	</head>
	<body>
		<?php 
			$str = "";
			$key = "Q1";
			$value = "A1";
			$str = "key: ".$key.", value: ".$value."n";
					// echo $_SERVER['DOCUMENT_ROOT']; // /Applications/XAMPP/xamppfiles/htdocs
			$filename = "/Applications/XAMPP/xamppfiles/htdocs/cs4640/project/Jeopardy/data/data.txt";
					// chmod($filename, 775);
			if (!empty($str)) {
				$file = fopen($filename, "a");
				fputs($file, $str);
				fclose($file);
			}
			// echo $str
			// foreach($_SESSION['post-data'] as $key->$value){
			// 	$str = "key: ".$key;."\nvalue: ".$value;
			// }
		?>
	</body>
</html>
