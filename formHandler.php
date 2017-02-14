<html>
<head>
  <title>Simple form handler</title>
</head>

<body bgcolor="#EEEEEE">
  <center><h2>Simple Form Handler</h2></center>
  <p>
    The following table lists all parameter names and their values that were submitted from your form.
  </p>

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
      <td width="20%">Multiple Choice Answer 1</td>
      <td><?php echo $_POST['multipleChoice1']?></td>      
    </tr>
    <tr>
      <td width="20%">Multiple Choice Answer 2</td>
      <td><?php echo $_POST['multipleChoice2']?></td>      
    </tr>
    <tr>
      <td width="20%">Multiple Choice Answer 3</td>
      <td><?php echo $_POST['multipleChoice3']?></td>      
    </tr>
    <tr>
      <td width="20%">Multiple Choice Answer 4</td>
      <td><?php echo $_POST['multipleChoice4']?></td>      
    </tr>
    <tr>
      <td width="20%">True/False Question</td> 
      <td><?php echo $_POST['question3']?></td>      
    </tr>
    <tr>
      <td width="20%">True/False Answer</td> 
      <td><?php echo $_POST['tfAnswer']?></td>      
    </tr>
    <tr>
      <td width="20%">submit</td>
      <td><?php echo $_POST['submit']?></td>      
    </tr>    
  </table>

</body>
</html>