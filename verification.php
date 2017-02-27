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
					<td><?php echo "Submitted Quesiton"?></td>
				</tr>
				<tr>
					<td><label for="shortAnswer">Answer: </label></td>
					<td><?php echo "Submitted Answer" ?></td>
				</tr>		
			</table>
			
			<input type=button value="Go Back" onclick="history.go(-1);"></input>
			<input type=button value="Submit"></input>

		</fieldset>
		<img class="imgbanner" src="images/podiums.png" alt="Podium"/>

    <footer>Team: Cindy Park (csp9sm) and Sabina Yim (sjy8hy)</footer>
</div>

	</body>
</html>