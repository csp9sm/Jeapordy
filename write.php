<?php
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
	$filename = "/Applications/XAMPP/xamppfiles/htdocs/cs4640/project/Jeopardy/data/data.txt";
			// chmod($filename, 775);
	if (!empty($str)) {
		$file = fopen($filename, "a");
		fputs($file, $str);
		fclose($file);
	}

?>