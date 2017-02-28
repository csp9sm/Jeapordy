<?php
	header("Location:jeopardyForm.php");
	$_SESSION['website'] = "write.php";
	// /Applications/XAMPP/xamppfiles/htdocs/cs4640/project/Jeopardy/
	// in public_html, have to change to "jeopardyForm.php"
	//should redirect to form page
	
	// session_start();
	// $_SESSION['questionType'] = $_SESSION['questionType'];
	// $_SESSION['Question']= $_SESSION['Question'];
	// $_SESSION['Answer'] = $_SESSION['Answer'];

	// $str = $_SESSION['questionType']. "\n" .$_SESSION['Question']. "\n" . $_SESSION['Answer'];

	$answerType = "";
	$question = "";
	$answerArray = array();


	if(isset($_POST['typeToWrite']) != 0){
		$answerType = $_POST['typeToWrite'];
	}
	if(isset($_POST['questionToWrite']) != 0 ){
		$question = $_POST['questionToWrite'];
	}
	if(isset($_POST['answerToWrite']) != 0){
		$answerArray = $_POST['answerToWrite'];
	}

			// echo $_SERVER['DOCUMENT_ROOT']; // /Applications/XAMPP/xamppfiles/htdocs

	$str = "Answer type: \n".$answerType."\nQuestion: \n".$question."\nAnswers:\n";
	// echo count($answerArray);
	// for($i=0; $i<count($answerArray); $i++){
	// 	$str .= $answerArray[$i]."\n";
	// }
	foreach($answerArray as $key=>$value){
		if($key != 0){
			$str .= $key." ";
		}
		$str .= $value."\n";
	}
	$str .= "\n";
	$filename = "data/data.txt";
	// /Applications/XAMPP/xamppfiles/htdocs/cs4640/project/Jeopardy
	// in public_html have to use filename "/data/data.txt"
			// chmod($filename, 775);

	if (!empty($str)) {
		$file = fopen($filename, "a");
		fputs($file, $str);
		fclose($file);
	}

	session_destroy();

?>