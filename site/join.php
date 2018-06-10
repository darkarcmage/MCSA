<!DOCTYPE HTML>
<?php $join=true; ?>
<html>
<head>
<title>Membership applications</title>
<style>  .faqQ {cursor: pointer;}
.disclaim { height:15rem; }
.disclaim label {height: 15rem;} </style>
<?php include "parts/head.php"; ?>
<script type="text/javascript">
  function InitHide(qnum) {
    $('#a' + qnum).hide()
    $('#q' + qnum).attr("onclick","$('#a" + qnum + "').toggle()");
  }
  function ShowAnswer(qnum) {
    $('#a' + qnum).toggle(400);
  }
  $( function() {
       InitHide('001');
       InitHide('002');
       InitHide('003');
       InitHide('004');
       InitHide('005');
       InitHide('006');
       InitHide('007');
     })
</script>
<script type="text/javascript" SRC="js/validate.js" defer></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<!-- header  -->
<?php include "parts/header.php"; ?>
<!-- header -->
<!-- about -->
	<div class="main">
		<div class="container contentMain">
			<div class="about">
				<h4>Join the MCSA Magaliesberg section</h4>
			<div class="about-bottom">
				<div class="col-md-8 about-grid">
					<form method="post" action="joinEngine.php" id="formtocomplete"  name="JoinForm" onsubmit="return validateJoin(this)">
						  <p> <b><i>Please complete the below form for membership at the Mountain Club of South Africa Magaliesberg section:</i></b></p>
						<h4>Personal info - Applicant</h4>
						<div class="visitors">
						<label for="Name">Full name<span style="color:red;">* </span></label>
						  <input type="text" name="Name" id="Name" /> <br>
						  </div>
						<div class="visitors">
						<label for="Surname">Surname:<span style="color:red;">* </span></label>
						  <input type="text" name="Surname" id="Surname" /> <br>
						  </div>
						<div class="visitors">
						<label for="Phone">Phone:<span style="color:red;">* </span></label>
						  <input type="text" name="Phone" id="Phone" /><br>
						  </div>
						<div class="visitors">
						<label for="Email">Email:<span style="color:red;">* </span></label>
						  <input type="text" name="Email" id="Email" /><br>
						  </div>
						  <div class="visitors">
						<label for="HomeA">Home address:<span style="color:red;">* </span></label>
						  <input type="text" name="HomeA" id="HomeA" /> <br>
						  </div>
						<div class="visitors">
						<label for="ID">ID number:<span style="color:red;">* </span></label>
						  <input type="text" name="ID" id="ID" /> <br>
						  </div>
						  <h4 class="faqQ" id="q005" style="cursor: pointer;">Family members</h4>
						  <div class="faqA" id="a005">
						  <h4 class="faqQ" id="q001" style="cursor: pointer;">Personal info - Partner</h4>
						  <div class="faqA" id="a001">
						<div class="visitors">
						<label for="NameP">Full name<span style="color:red;">* </span></label>
						  <input type="text" name="NameP" id="NameP" /> <br>
						  </div>
						<div class="visitors">
						<label for="SurnameP">Surname:<span style="color:red;">* </span></label>
						  <input type="text" name="SurnameP" id="SurnameP" /> <br>
						  </div>
						<div class="visitors">
						<label for="PhoneP">Phone:<span style="color:red;">* </span></label>
						  <input type="text" name="PhoneP" id="PhoneP" /><br>
						  </div>
						<div class="visitors">
						<label for="EmailP">Email:<span style="color:red;">* </span></label>
						  <input type="text" name="EmailP" id="EmailP" /><br>
						  </div>
						  <div class="visitors">
						<label for="IDP">ID number:<span style="color:red;">* </span></label>
						  <input type="text" name="IDP" id="IDP" /> <br>
						  </div>
						  </div>

						    <h4 class="faqQ" id="q002">Personal info - Child 1</h4>
						    <div class="faqA" id="a002">
						<div class="visitors">
						<label for="NameC1">Full name<span style="color:red;">* </span></label>
						  <input type="text" name="NameC1" id="NameC1" /> <br>
						  </div>
						<div class="visitors">
						<label for="SurnameC1">Surname:</label>
						  <input type="text" name="SurnameC1" id="SurnameC1" /> <br>
						  </div>
						<div class="visitors">
						<label for="PhoneC1">Phone:</label>
						  <input type="text" name="PhoneC1" id="PhoneC1" /><br>
						  </div>
						<div class="visitors">
						<label for="EmailC1">Email:</label>
						  <input type="text" name="EmailC1" id="EmailC1" /><br>
						  </div>
						  <div class="visitors">
						<label for="IDC1">ID number:</label>
						  <input type="text" name="IDC1" id="IDC1" /> <br>
						  </div>
						  </div>

						   <h4 class="faqQ" id="q003">Personal info - Child 2</h4>
						   <div class="faqA" id="a003">
						<div class="visitors">
						<label for="NameC2">Full name<span style="color:red;">* </span></label>
						  <input type="text" name="NameC2" id="NameC2" /> <br>
						  </div>
						<div class="visitors">
						<label for="SurnameC2">Surname:</label>
						  <input type="text" name="SurnameC2" id="SurnameC2" /> <br>
						  </div>
						<div class="visitors">
						<label for="PhoneC2">Phone:</label>
						  <input type="text" name="PhoneC2" id="PhoneC2" /><br>
						  </div>
						<div class="visitors">
						<label for="EmailC2">Email:</label>
						  <input type="text" name="EmailC2" id="EmailC2" /><br>
						  </div>
						  <div class="visitors">
						<label for="IDC2">ID number:</label>
						  <input type="text" name="IDC2" id="IDC2" /> <br>
						  </div>
						  </div>

						<h4 class="faqQ" id="q004">Personal info - Child 3</h4>
						<div class="faqA" id="a004">
						<div class="visitors">
						<label for="NameC3">Full name<span style="color:red;">* </span></label>
						  <input type="text" name="NameC3" id="NameC3" /> <br>
						  </div>
						<div class="visitors">
						<label for="SurnameC3">Surname:</label>
						  <input type="text" name="SurnameC3" id="SurnameC3" /> <br>
						  </div>
						<div class="visitors">
						<label for="PhoneC3">Phone:</label>
						  <input type="text" name="PhoneC3" id="PhoneC3" /><br>
						  </div>
						<div class="visitors">
						<label for="EmailC3">Email:</label>
						  <input type="text" name="EmailC3" id="EmailC3" /><br>
						  </div>
						  <div class="visitors">
						<label for="IDC3">ID number:</label>
						  <input type="text" name="IDC3" id="IDC3" /> <br>
						  </div>
						  </div>

						  <h4 class="faqQ" id="q006">Personal info - Child 4</h4>
						<div class="faqA" id="a006">
						<div class="visitors">
						<label for="NameC4">Full name<span style="color:red;">* </span></label>
						  <input type="text" name="NameC4" id="NameC4" /> <br>
						  </div>
						<div class="visitors">
						<label for="SurnameC4">Surname:</label>
						  <input type="text" name="SurnameC4" id="SurnameC4" /> <br>
						  </div>
						<div class="visitors">
						<label for="PhoneC4">Phone:</label>
						  <input type="text" name="PhoneC4" id="PhoneC4" /><br>
						  </div>
						<div class="visitors">
						<label for="EmailC4">Email:</label>
						  <input type="text" name="EmailC4" id="EmailC4" /><br>
						  </div>
						  <div class="visitors">
						<label for="IDC4">ID number:</label>
						  <input type="text" name="IDC4" id="IDC4" /> <br>
						  </div>
						  </div>

						  <h4 class="faqQ" id="q007">Personal info - Child 5</h4>
						<div class="faqA" id="a007">
						<div class="visitors">
						<label for="NameC5">Full name<span style="color:red;">* </span></label>
						  <input type="text" name="NameC5" id="NameC5" /> <br>
						  </div>
						<div class="visitors">
						<label for="SurnameC5">Surname:</label>
						  <input type="text" name="SurnameC5" id="SurnameC5" /> <br>
						  </div>
						<div class="visitors">
						<label for="PhoneC5">Phone:</label>
						  <input type="text" name="PhoneC5" id="PhoneC5" /><br>
						  </div>
						<div class="visitors">
						<label for="EmailC5">Email:</label>
						  <input type="text" name="EmailC5" id="EmailC5" /><br>
						  </div>
						  <div class="visitors">
						<label for="IDC5">ID number:</label>
						  <input type="text" name="IDC5" id="IDC5" /> <br>
						  </div>
						  </div>

						  </div>

						  <h4>Other info</h4>
						<div class="visitors">
						<label for="Language">Language:<span style="color:red;">* </span></label>
						  <input type="text" name="Language" id="Language" /> <br>
						  </div>
						<div class="visitors">
						<label for="Occupation">Occupation:<span style="color:red;">* </span></label>
						  <input type="text" name="Occupation" id="Occupation" /> <br>
						  </div>

						<div class="visitors">
						<label for="Gender">Gender:<span style="color:red;">* </span></label>
						  <select name="Gender" id="Gender">
						  <option value="None" name="None" id="None">None</option>
						  <option value="Male" name="Male" id="Male">Male</option>
						  <option value="Female" name="Female" id="Female">Female</option>
						</select>
						</div>


						 <h4>Mountaineering experience</h4>
						<div class="visitors" style="width: 100%; max-width: 1000px;">
							<label style="width: 100%" for="OtherClub">Have you ever been refused membership of any Section of the MCSA, or of any other mountain club or had your membership been suspended? :<span style="color:red;">* </span></label>
							  <select name="OtherClub" id="OtherClub">
							  <option value="NoO" name="No" id="NoO">No</option>
							  <option value="YesO" name="Yes" id="YesO">Yes</option>
							</select>
						</div>
						<div class="clearfix"></div>
						<br/><br/><br/><br/>
						<div class="visitors" style="width: 100%; max-width: 1000px;">
						<label style="width: 100%" for="CurrentMembership">Name any MCSA Section or other mountain club of which you are a member at present if any:</label>
						  <input type="text" name="CurrentMembership" id="CurrentMembership" /> <br/>
						  </div>

						  <div class="visitors" style="width: 100%; max-width: 1000px; margin-top:20px;">

						<label style="width: 100%" for="PreviousMembership">Name any section of the MCSA or the mountain club of which you were previously a member, and the duration  of  your membership:</label>
						  <input type="text" name="PreviousMembership" id="PreviousMembership" /> <br/>
						  </div>

						<br><br><label for="Message">Give a brief description of your mountaneering experience:</label><br>
						  <textarea name="Message" rows="20" cols="20" id="Message" placeholder="Have you hiked or climbed before? Where did you hike or climb?"></textarea>

						<h4>Choice of membership Activity contribution</h4>
						<div class="  ">
						<br><label for="Patrolling">Patrolling:</label>
						<input type="checkbox" name="Patrolling" value="Yes"  id="Patrolling"> <br>
						<div class="  ">
						<br><label for="Clearing">Clearing of allien vegetaion:</label>
						<input type="checkbox" name="Clearing" value="Yes"  id="Clearing"> <br>
						<div class="  ">
						<br><label for="WorkMeets">Work meets:</label>
						<input type="checkbox" name="WorkMeets" value="Yes"  id="WorkMeets"> <br>

						  <h4>Club meets attended</h4>
						  <p> Please note that you have to have attended at least 3 meets before applying for membership. </p>
						  <p> <b><i>Club meet 1:</i></b></p>
						  <div class="visitors">
						  <label for="Date1">Date:<span style="color:red;">* </span></label>
						  <input type="date" name="Date1" id="Date1" /> <br>
						  </div>
						<div class="visitors">
						<label for="Venue1">Venue:<span style="color:red;">* </span></label>
						  <input type="text" name="Venue1" id="Venue1" /><br>
						  </div>
						<div class="visitors">
						<label for="Leader1">Leader's name:<span style="color:red;">* </span></label>
						  <input type="text" name="Leader1" id="Leader1" /><br>
						  </div>
						<div class="visitors">
						<label for="Activity1">Activity:<span style="color:red;">* </span></label>
						  <select name="Activity1" id="Activity1">
						  <option value="Sport" name="Sport" id="Sport">Sport climbing</option>
						  <option value="Trad" name="Trad" id="Trad">Trad climbing</option>
						  <option value="Hiking" name="Hiking" id="Hiking">Hiking</option>
						  <option value="Canyoning" name="Canyoning" id="Canyoning">Canyoning</option>
						  <option value="Other" name="Other" id="Other">Other</option>
						</select>
						  <br>
						  </div>

						  <p> <b><i>Club meet 2:</i></b></p>
						   <div class="visitors">
						  <label for="Date2">Date:<span style="color:red;">* </span></label>
						  <input type="date" name="Date2" id="Date2" /> <br>
						  </div>
						<div class="visitors">
						<label for="Venue2">Venue:<span style="color:red;">* </span></label>
						  <input type="text" name="Venue2" id="Venue2" /><br>
						  </div>
						<div class="visitors">
						<label for="Leader2">Leader's name:<span style="color:red;">* </span></label>
						  <input type="text" name="Leader2" id="Leader2" /><br>
						  </div>
						<div class="visitors">
						<label for="Activity2">Activity:<span style="color:red;">* </span></label>
						   <select name="Activity2" id="Activity2">
						  <option value="Sport" name="Sport" id="Sport">Sport climbing</option>
						  <option value="Trad" name="Trad" id="Trad">Trad climbing</option>
						  <option value="Hiking" name="Hiking" id="Hiking">Hiking</option>
						  <option value="Canyoning" name="Canyoning" id="Canyoning">Canyoning</option>
						  <option value="Other" name="Other" id="Other">Other</option>
						</select><br>
						  </div>

						  <p> <b><i>Club meet 3:</i></b></p>
						   <div class="visitors">
						  <label for="Date3">Date:<span style="color:red;">* </span></label>
						  <input type="date" name="Date3" id="Date3" /> <br>
						  </div>
						<div class="visitors">
						<label for="Venue3">Venue:<span style="color:red;">* </span></label>
						  <input type="text" name="Venue3" id="Venue3" /><br>
						  </div>
						<div class="visitors">
						<label for="Leader3">Leader's name:<span style="color:red;">* </span></label>
						  <input type="text" name="Leader3" id="Leader3" /><br>
						  </div>
						<div class="visitors">
						<label for="Activity3">Activity:<span style="color:red;">* </span></label>
						   <select name="Activity3" id="Activity3">
						  <option value="Sport" name="Sport" id="Sport">Sport climbing</option>
						  <option value="Trad" name="Trad" id="Trad">Trad climbing</option>
						  <option value="Hiking" name="Hiking" id="Hiking">Hiking</option>
						  <option value="Canyoning" name="Canyoning" id="Canyoning">Canyoning</option>
						  <option value="Other" name="Other" id="Other">Other</option>
						</select><br>
						  </div>

						  <h4>Proposer details</h4>
						  <p> <b><i>Proposer:</i></b></p>
						<div class="visitors">
						  <label for="Name2">Proposer name and surname:<span style="color:red;">* </span></label>
						  <input type="text" name="Name2" id="Name2" /> <br>
						  </div>
						<div class="visitors">
						<label for="Phone2">Proposer Phone:<span style="color:red;">* </span></label>
						  <input type="text" name="Phone2" id="Phone2" /><br>
						  </div>
						<div class="visitors">
						<label for="Email2">Proposer Email:<span style="color:red;">* </span></label>
						  <input type="text" name="Email2" id="Email2" /><br>
						  </div>
						<div class="visitors">
						<label for="MagN1">Proposer Mag number:<span style="color:red;">* </span></label>
						  <input type="text" name="MagN1" id="MagN1" /><br>
						  </div>

						  <p> <b><i>Seconder:</i></b></p>
						<div class="visitors">
						<label for="Name3">Seconder Name and Surname:<span style="color:red;">* </span></label>
						  <input type="text" name="Name3" id="Name3" /> <br>
						  </div>
						<div class="visitors">
						<label for="Phone3">Seconder Phone:<span style="color:red;">* </span></label>
						  <input type="text" name="Phone3" id="Phone3" /><br>
						  </div>
						<div class="visitors">
						<label for="Email3">Seconder Email:<span style="color:red;">* </span></label>
						  <input type="text" name="Email3" id="Email3" /><br>
						  </div>
						<div class="visitors">
						<label for="MagN2">Seconder Mag number:<span style="color:red;">* </span></label>
						  <input type="text" name="MagN2" id="MagN2" /><br>
						  </div>

						  <h4>Your agreement with the club</h4>

						<div class="col-md-11">
							<div class="visitors disclaim" style="max-width: 1000px;">
							<label  for="Abide" style="width: 100%;">I undertake to uphold the good name of the MCSA at all times, support the objectives of the club in general and abide by the specific guidelines as set out in this <a href="https://drive.google.com/drive/folders/1lv_7v2JqUPyMUiYgDyX9O09BmoMjdglJ">Code of Conduct</a>:<span style="color:red;">* </span></label>
							</div>
						</div>
						<div class="col-md-1">
							<select name="Abide" id="Abide">
							  <option value="YesO" name="Yes" id="YesO">Yes</option>
							  <option value="NoO" name="No" id="NoO">No</option>
							</select>
						</div>

						<div class="col-md-11">
							<div class="visitors disclaim"  style="max-width: 1000px;">
							<label for="Agree" style="width: 100%;">If accepted, I agree to be bound by the <a href="https://drive.google.com/drive/folders/1lv_7v2JqUPyMUiYgDyX9O09BmoMjdglJ">Constitution</a>, the specific guidelines as set out in the <a href="https://drive.google.com/drive/folders/1lv_7v2JqUPyMUiYgDyX9O09BmoMjdglJ">Code of Conduct</a> and rules of the Mountain Club of South Africa (Magaliesberg Section) and undertake to uphold the good name of the MCSA and do all in my power to promote the interests of the Club while I remain a member:<span style="color:red;">* </span></label>

						</div>
						</div>
						<div class="col-md-1">
							<select name="Agree" id="Agree">
							  <option value="YesO" name="Yes" id="YesO">Yes</option>
							  <option value="NoO" name="No" id="NoO">No</option>
							</select>
						</div>

						<div class="col-md-11">
							<div class="visitors disclaim"  style="max-width: 1000px;">
							<label  for="Notice" style="width: 100%;"> I further undertake to give the Administrator written notice of resignation should I resign from my membership, to discharge any unpaid subscriptions or other charges due by me at the date of such notice and to return any club badges issued to me.  I will also notify the Administrator of any contact details changes. I understand that the subscription and entrance fee will be refunded if my membership application is declined:<span style="color:red;">* </span></label>
						</div>
						</div>
						<div class="col-md-1">
							<select name="Notice" id="Notice">
								<option value="YesO" name="Yes" id="YesO">Yes</option>
								<option value="NoO" name="No" id="NoO">No</option>
							</select>
						</div>

						<div class="col-md-11">
								<div class="visitors disclaim" style="max-width: 1000px;">
								<label for="Disclaim" style="width: 100%;">I acknowledge that mountaineering (hiking and climbing) is de facto an activity which carries certain risks and that neither the MCSA nor any of its members accept responsibility for any deaths, injury or illness sustained or suffered by any person or for any theft, loss of or damage to any property that result from participation in MCSA activities, no matter in what manner caused and whether allegedly due to negligence or not.:<span style="color:red;">* </span></label>

							</div>

						</div>
						<div class="col-md-1">
						  <select name="Disclaim" id="Disclaim">
								<option value="YesO" name="Yes" id="YesO">Yes</option>
								<option value="NoO" name="No" id="NoO">No</option>
							</select>

						</div>
						<div class="clearfix"> </div>

						<br><label for="TermsAndConditions">Disclaimer <i>Tick the box if you agree </i>:<span style="color:red;">* </span></label>
						<input type="checkbox" name="TermsAndConditions" value="Yes"  id="TermsAndConditions"> <a target="_blank" href="disclaimer.php">Disclaimer</a><br>
						</div>

						<div class="g-recaptcha" data-sitekey="6LdQykEUAAAAAKM2VnTfQ8pDvS84CgvgTRqajJGM"></div>
						  <input style="background-color: #fa7252; border-color: #fa7252;" type="submit" name="submit" value="Submit" class="submit-button" />
						</form>
						<p> This application will be send to our administrator at <a href="mailto: admin@mag.mcsa.org.za">admin@mag.mcsa.org.co.za</a>.</p>

					</div>
				<div class="clearfix"> </div>
			</div>


		</div>
	</div>
	</div>
</div>
</div>
<!-- about -->
<!-- footer -->
<?php include "parts/footer.php"; ?>
<!-- footer -->
</body>
</html>
