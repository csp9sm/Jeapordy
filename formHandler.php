<html>
<head>
<title>Simple form handler</title>
</head>

<body bgcolor="#EEEEEE">
<center><h2>Simple Form Handler</h2></center>
<p>
  The following table lists all parameter names and their values that were submitted from your form.
</p>

<?php
if(isset($_POST['question1']) == 0){
  $_POST['question1'] = "";
}

if(isset($_POST['shortAnswer']) == 0){
  $_POST['shortAnswer'] = "";
}

if(isset($_POST['question2']) == 0){
  $_POST['question2'] = "";
}

if(isset($_POST['multipleChoice1']) == 0){
  $_POST['multipleChoice1'] = "";
}

if(isset($_POST['multipleChoice2']) == 0){
  $_POST['multipleChoice2'] = "";
}

if(isset($_POST['multipleChoice3']) == 0){
  $_POST['multipleChoice3'] = "";
}

if(isset($_POST['multipleChoice4']) == 0){
  $_POST['multipleChoice4'] = "";
}


if(isset($_POST['mcChoice']) == 0){
  $_POST['mcChoice'] = "";
}


if(isset($_POST['question3']) == 0){
  $_POST['question3'] = "";
}

if(isset($_POST['tfAnswer']) == 0){
  $_POST['tfAnswer'] = "";
}
?>

<table cellSpacing=1 cellPadding=1 width="75%" border=1 bgColor="lavender">
  <tr bgcolor="#FFFFFF">
    <td align="center"><strong>Parameter</strong></td>
    <td align="center"><string>Value</string></td>
  </tr>
  <tr>
    <td width="20%">Short Answer Question</td> 
    <td><?php echo $_POST['question1']?></td>      
  </tr>
  <tr>
    <td width="20%">Short Answer</td> 
    <td><?php echo $_POST['shortAnswer']?></td>       
  </tr>
  <tr>
    <td width="20%">Multiple Choice Question</td> 
    <td><?php echo $_POST['question2']?></td>      
  </tr>
  <tr>
    <td width="20%">Multiple Choice Answer A</td>
    <td><?php echo $_POST['multipleChoice1']?></td>      
  </tr>
  <tr>
    <td width="20%">Multiple Choice Answer B</td>
    <td><?php echo $_POST['multipleChoice2']?></td>      
  </tr>
  <tr>
    <td width="20%">Multiple Choice Answer C</td>
    <td><?php echo $_POST['multipleChoice3']?></td>      
  </tr>
  <tr>
    <td width="20%">Multiple Choice Answer D</td>
    <td><?php echo $_POST['multipleChoice4']?></td>      
  </tr>
  <tr>
    <td width="20%">Correct Multiple Choice Answer</td>
    <td><?php echo $_POST['mcChoice']?></td>      
  </tr>
  <tr>
    <td width="20%">True/False Question</td> 
    <td><?php echo $_POST['question3']?></td>      
  </tr>
  <tr>
    <td width="20%">True/False Answer</td> 
    <td><?php echo $_POST['tfAnswer']?></td>      
  </tr>   
</table>

</body>
</html>