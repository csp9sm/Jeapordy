<?php
	session_start();
	$_SESSION['Question']="";
	$_SESSION['Answer'] = array();
	$_SESSION['post-data'] = $_POST;
	$_SESSION['keyList'] = array_keys($_POST);
	$arrayLength = count($_SESSION['post-data']);
	foreach($_SESSION['post-data'] as $key => $value){	

		if(isset($_SESSION['post-data'][$key]) == 0){
			$_SESSION['post-data'][$key] = "";
		}else{
			// echo $_SESSION['post-data'][$i]; 
			if($key == 'question2') {
				$_SESSION['Question'] = $_SESSION['post-data'][$key];
				$_SESSION['Answer']['A'] = $_SESSION['post-data']['multipleChoice1']; 
				$_SESSION['Answer']['B'] = $_SESSION['post-data']['multipleChoice2']; 
				$_SESSION['Answer']['C'] = $_SESSION['post-data']['multipleChoice3']; 
				$_SESSION['Answer']['D'] = $_SESSION['post-data']['multipleChoice4']; 
				$_SESSION['Answer']['Correct Answer'] = $_SESSION['post-data']['mcChoice'];
			}
			if($key == 'question1'){
				$_SESSION['Question'] = $_SESSION['post-data'][$key];
				$_SESSION['Answer']['A'] = $_SESSION['Answer']['A']= $_SESSION['post-data']['shortAnswer'];
			}	
			if($key == 'question3'){
				$_SESSION['Question'] = $_SESSION['post-data'][$key];
				$_SESSION['Answer']['A'] = $_SESSION['Answer']['A']= $_SESSION['post-data']['tfAnswer'];
			}	

		}
	}
	$ansLength = count($_SESSION['Answer']);

?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">  
        <title>Jeopardy</title> 
        <link rel=stylesheet href="main.css" type="text/css">
        <script type="text/javascript" src="main.js"></script>
	</head>

	<body>
		<?php 
			// Will be passing the form elements value: Either back to the jeopardyForm submission page or to the formHandler that will send it to the txt file to save the question. 
		?>
		<header><img id="banner" src="images/jeopardy_logo1.png" alt="Jeopardy Logo Banner"/></header>
		<div class="center">
			<h1>Verification: </h1>

			<p>Please verify if the question and answer(s) below are correct. If it is not select the back button to revise
				your question and answer(s)</p>

			<!-- <h2 class="underline" >Submission</h2> -->
		</div>
		
		<fieldset name="questionType" class="center">
			<!-- <legend align="center" style="font-size: 18px;">Select the type of question to create:</legend> -->
			<table class="center">
				<tr>
					<td><label for="question1">Question: </label></td>
					<td><?php echo $_SESSION['Question']; ?></td>
				</tr>
				<tr>
					<td><label for="shortAnswer">Answer: </label></td>
					<td><?php 
						foreach($_SESSION['Answer'] as $key => $value)
						{
    						echo $value;
						}
						?></td>
				</tr>		
			</table>
			
			<input type=button value="Go Back"></input>
			<input type=button value="Submit"></input>

		</fieldset>
		<img class="imgbanner" src="images/podiums.png" alt="Podium"/>

    <footer>Team: Cindy Park (csp9sm) and Sabina Yim (sjy8hy)</footer>
</div>

	</body>
</html>