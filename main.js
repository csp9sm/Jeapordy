
function update_question(value){
	//alert(value);
	if(value == "shortanswer"){
		document.getElementById("shortA").style.display ="block";
		document.getElementById("multipleC").style.display = "none";
		document.getElementById("trueFalse").style.display ="none";
	}
	else if(value == "multiplechoice"){
		document.getElementById("shortA").style.display ="none";
		document.getElementById("multipleC").style.display ="block";
		document.getElementById("trueFalse").style.display ="none";
	}
	else{ 
		document.getElementById("shortA").style.display ="none";
		document.getElementById("multipleC").style.display ="none";
		document.getElementById("trueFalse").style.display ="block";
	}

}

function validateInput1(){
	// alert("Validating input!");
	var inputQuestion = document.shortAnswerForm.question1;
	var inputShortAnswer = document.shortAnswerForm.shortAnswer;
	if(inputQuestion.value == ""){
		alert("You must enter a question!");
		//document.getElementById("pwd_msg").innerHTML = "Password must be entered";
		document.shortAnswerForm.question1.focus(); //focus in question so they know they have to fill it
		return (false); //tells status that everything's fine, if false says not to proceed with form 
	}
	if(inputShortAnswer.value == ""){
		alert("You must enter an answer!");
		document.shortAnswerForm.shortAnswer.focus();
		return(false);
	}
	//alert("Thank you for submitting!");
	return true;
}

function validateInput2(){
	// alert("Validating input!");
	var inputQuestion = document.multipleChoiceForm.question2;
	var inputMC1 = document.multipleChoiceForm.multipleChoice1;
	var inputMC2 = document.multipleChoiceForm.multipleChoice2;
	var inputMC3 = document.multipleChoiceForm.multipleChoice3;
	var inputMC4 = document.multipleChoiceForm.multipleChoice4;

	if(inputQuestion.value == ""){
		alert("You must enter a question!");
		//document.getElementById("pwd_msg").innerHTML = "Password must be entered";
		document.multipleChoiceForm.question2.focus(); //focus in question so they know they have to fill it
		return (false); //tells status that everything's fine, if false says not to proceed with form 
	}
	if(inputMC1.value == ""){
		alert("You must enter a value for the first multiple choice answer choice!");
		document.multipleChoiceForm.multipleChoice1.focus();
		return(false);
	}
	if(inputMC2.value == ""){
		alert("You must enter a value for the second multiple choice answer choice!");
		document.multipleChoiceForm.multipleChoice2.focus();
		return(false);
	}
	if(inputMC3.value == ""){
		alert("You must enter a value for the third multiple choice answer choice!");
		document.multipleChoiceForm.multipleChoice3.focus();
		return(false);
	}
	if(inputMC4.value == ""){
		alert("You must enter a value for the fourth multiple choice answer choice!");
		document.multipleChoiceForm.multipleChoice4.focus();
		return(false);
	}
	//alert("Thank you for submitting!");
	return true;
}

function validateInput3(){
	// alert("Validating input!");
	var inputQuestion = document.TrueFalseForm.question3;
	//var inputTF = document.TrueFalseForm.tfAnswer;
	if(inputQuestion.value == ""){
		alert("You must enter a question!");
		//document.getElementById("pwd_msg").innerHTML = "Password must be entered";
		document.TrueFalseForm.question3.focus(); //focus in question so they know they have to fill it
		return (false); //tells status that everything's fine, if false says not to proceed with form 
	}
	//alert("Thank you for submitting!");
	return true;

}





