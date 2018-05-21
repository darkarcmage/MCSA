	
function validateContact(form) {
	var adultsString = form.adults.value;
	var childrenString = form.children.value;
	var youngstersString = form.youngsters.value;
	var studentsString = form.students.value;
	var totalPersons = parseInt(adultsString) + parseInt(childrenString) + parseInt(youngstersString) + parseInt(studentsString);
	
      fail = validateContactName(form.Name.value) 
      fail += validatePhone(form.Phone.value) 
      fail += validateContactEmail(form.Email.value) 
      fail += validateContactTermsAndConditions(form.TermsAndConditions.value)
      fail += validateNumbers(totalPersons)
      if (fail == "") {
      return true 
      }
      else 
  { alert(fail);  
      return false 
  } 
} 

	function validateContactName(field){ 
		if (field == "")  {
			return "No Name was entered.\n" ;
		} 
		return ""
	}
	
	function validatePhone(field) {
		if (field == "" || isNaN(field)) {
			return "No Phone number was entered.\n";
		} else if (field.length < 10 || field.length > 10) {
			return "Phone number must be 10 characters long.\n" ;
		}
		return "" 
	}

	function validateContactEmail(field){ 
		if (field == "")  {
			return "No Email was entered.\n" ;
		} else if (!((field.indexOf(".") > 0) && (field.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(field)) {
			return "The Email address is invalid.\n" 
		}
		return ""
	}

	function validateContactTermsAndConditions(field){ 
		if (!document.forms['ContactForm'].TermsAndConditions.checked)  {
			return "Please do not apply for a permit if you do not agree with our terms and conditions.\n" ;
		} 
		return ""
	}
	
	function validateNumbers(field){ 	
		//alert(field);
		if ((field  > 20) ){
			return "Please remember to indicate for how many people you are applying for a permit. Please note that we do not issue permits for more than 20 persons per property per day.\n" ;
		} 
		return ""
	}
	


function validateJoin(form) {	
      fail = validateJoinName(form.Name.value) 
	
      fail += validateJoinSurname(form.Surname.value)
      fail += validateJoinHomeA(form.HomeA.value)
      fail += validateJoinID(form.ID.value)
	
      fail += validateJoinVenue1(form.Venue1.value)
      fail += validateJoinLeader1(form.Leader1.value)
      fail += validateJoinActivity1(form.Activity1.value)
	
      fail += validateJoinVenue2(form.Venue2.value)
      fail += validateJoinLeader2(form.Leader2.value)
      fail += validateJoinActivity2(form.Activity2.value)
	
      fail += validateJoinVenue3(form.Venue3.value)
      fail += validateJoinLeader3(form.Leader3.value)
      fail += validateJoinActivity3(form.Activity3.value)

      fail += validateJoinName2(form.Name2.value) 
      fail += validateJoinEmail2(form.Email2.value) 
      fail += validateJoinName3(form.Name3.value) 
      fail += validateJoinEmail3(form.Email3.value) 
	
      fail += validateJoinPhone(form.Phone.value) 
      fail += validateJoinEmail(form.Email.value) 
      fail += validateJoinTermsAndConditions(form.TermsAndConditions.value)
      if (fail == "") {
      return true 
      }
      else 
  { alert(fail);  
      return false 
  } 
} 
	

	function validateJoinName(field){ 
		if (field == "")  {
			return "No Name was entered.\n" ;
		} 
		return ""
	}


	function validateJoinSurname(field){ 
		if (field == "")  {
			return "No Surname was entered.\n" ;
		} 
		return ""
	}

	
	function validateJoinHomeA(field){ 
		if (field == "")  {
			return "No address was entered.\n" ;
		} 
		return ""
	}

	function validateJoinID(field) {
		if (field == "" || isNaN(field)) {
			return "No ID number was entered.\n";
		} else if (field.length < 13 || field.length > 13) {
			return "Phone number must be 13 characters long.\n" ;
		}
		return "" 
	}
	
	function validateJoinPhone(field) {
		if (field == "" || isNaN(field)) {
			return "No Phone number was entered.\n";
		} else if (field.length < 10 || field.length > 10) {
			return "Phone number must be 10 characters long.\n" ;
		}
		return "" 
	}

	function validateJoinVenue1(field){ 
		if (field == "")  {
			return "No venue was entered for a club event attended.\n" ;
		} 
		return ""
	}
	function validateJoinLeader1(field){ 
		if (field == "")  {
			return "Leader name for first club event attended not entered.\n" ;
		} 
		return ""
	}
	function validateJoinActivity1(field){ 
		if (field == "")  {
			return "Activity name for first club event attended not entered.\n" ;
		} 
		return ""
	}
	
	function validateJoinVenue2(field){ 
		if (field == "")  {
			return "No venue was entered for the second club event attended.\n" ;
		} 
		return ""
	}
	function validateJoinLeader2(field){ 
		if (field == "")  {
			return "Leader name for the second club event attended not entered.\n" ;
		} 
		return ""
	}
	function validateJoinActivity2(field){ 
		if (field == "")  {
			return "Activity name for the second club event attended not entered.\n" ;
		} 
		return ""
	}

	function validateJoinVenue3(field){ 
		if (field == "")  {
			return "No venue was entered for the third club event attended.\n" ;
		} 
		return ""
	}
	function validateJoinLeader3(field){ 
		if (field == "")  {
			return "Leader name for the third club event attended not entered.\n" ;
		} 
		return ""
	}
	function validateJoinActivity3(field){ 
		if (field == "")  {
			return "Activity name for the third club event attended not entered.\n" ;
		} 
		return ""
	}
	
	
	function validateJoinEmail(field){ 
		if (field == "")  {
			return "No Email was entered.\n" ;
		} else if (!((field.indexOf(".") > 0) && (field.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(field)) {
			return "The Email address is invalid.\n" 
		}
		return ""
	}

	function validateJoinName2(field){ 
		if (field == "")  {
			return "No Name was entered for the proposer.\n" ;
		} 
		return ""
	}
		function validateJoinName3(field){ 
		if (field == "")  {
			return "No Name was entered for the seconder.\n" ;
		} 
		return ""
	}
		function validateJoinEmail2(field){ 
		if (field == "")  {
			return "No Email was entered for the proposer.\n" ;
		} else if (!((field.indexOf(".") > 0) && (field.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(field)) {
			return "The Email address of the proposer is invalid.\n" 
		}
		return ""
	}
		function validateJoinEmail3(field){ 
		if (field == "")  {
			return "No Email was entered for the seconder.\n" ;
		} else if (!((field.indexOf(".") > 0) && (field.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(field)) {
			return "The Email address of the seconder is invalid.\n" 
		}
		return ""
	}
	
	function validateJoinTermsAndConditions(field){ 
		if (!document.forms['JoinForm'].TermsAndConditions.checked)  {
			return "Please do not apply for a permit if you do not agree with our terms and conditions.\n" ;
		} 
		return ""
	}
		