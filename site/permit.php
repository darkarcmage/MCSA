<!DOCTYPE HTML>
<html>
<head>
<title>Permit</title>
<?php include "parts/head.php"; ?>
</head>
<body>
<!-- header -->
<?php include "parts/header.php"; ?>
<!-- header -->
<!-- about -->
	<div class="main">
		<div class="container contentMain">
			<div class="about">
				<h4>Apply for a permit</h4>
			<div class="about-bottom">
				<div class="col-md-10 about-grid">
					<h6 style="color:white;">  </h6>
					<h5>Permit - Grootkloof, Wilgepoort and Dome Pools</h5>
						<p>Permit prices differ depending on whether you are an adult
						, student or child. Please refer to <a href="https://drive.google.com/open?id=1GDPudqfifSn5TmTn7WWzXjEzJdl2-ujH">Member and Permit fees</a> document for costs.

						The Magaliesberg section of the Mountain club of South Africa only issue permits to Grootkloof, Wilgepoort and Dome pools. For a permit to the Wolkberg hut, Mhlabatine and Castle Gorge please check the
						 <a  target="_blank"  href="https://mcsajohannesburg.org/permits-and-huts/">MCSA Johannesburg section </a> website or the <a  target="_blank"  href="http://www.jhbhiking.co.za/main/">Johannesburg Hiking Club </a> for Castle Gorge permits.
						</p>

						<form method="post" action="permitEngine.php" id="formtocomplete"  name="ContactForm" onsubmit="return validateContact(this)">
						  <p> <b><i>Please complete the below form to apply for a permit:</i></b></p>
						  <div class="visitors">
						<label for="Name">Name and Surname:<span style="color:red;">* </span></label>
						  <input type="text" name="Name" id="Name" required="required" /> <br>
						  </div>

						  <div class="visitors">
						<label for="Phone">Phone:<span style="color:red;">* </span></label>
						  <input type="text" name="Phone" id="Phone" required="required"/><br>
						  </div>

						  <div class="visitors">
						<label for="Email">Email:<span style="color:red;">* </span></label>
						  <input type="text" name="Email" id="Email" required="required"/><br>
						  </div>

						<div class="visitors">
						<label for="MCSANumber">MCSA number (only members):</label>
						  <input type="text" name="MCSANumber" id="MCSANumber" value="" placeholder="MCSA number"/> <br>
						</div>

						<div class="visitors">
							<label for="Permit">Which property:<span style="color:red;">* </span></label>
							  <select name="Permit" id="Permit" required="required">
									<option value="" name="null" id="null">--Select Property--</option>
							  	<option value="Grootkloof" name="Grootkloof" id="Grootkloof">Grootkloof</option>
							  	<option value="Wilgepoort" name="Wilgepoort" id="Wilgepoort">Wilgepoort</option>
							  	<option value="DomePools" name="Dome Pools" id="DomePools">Dome pools</option>
								</select>
						</div>
						  <br><br><br>

						<div class="visitors">
						<label for="dateFrom">Date from</label>
						  <input id="dateFrom" type="date"  min="2018-01-02" name="dateFrom" placeHolder="Date"/>
						 </div>
						 <div class="visitors">
						<label for="dateTo">Date to</label>
						  <input id="dateTo" type="date" min="2018-01-02"  name="dateTo" placeHolder="Date"/>
						 </div>

						<div class="visitors">
						<label for="adults">Adults</label>
						  <input id="adults" type="number" name="adults" placeHolder="Adults"/>
						 </div>

						<div class="visitors">
						  <label for="children">Children <i>(3 - 13 years)</i></label>
						  <input id="children" type="number" name="children" placeHolder="Children" />
						   </div>
						<div class="visitors">
						  <label for="youngsters">Youngsters <i> (14 - 20 years)</i></label>
						  <input id="youngsters" type="number" name="youngsters" placeHolder="Youngsters"/>
						   </div>
						<div class="visitors">
						  <label for="students">Students </label>
						  <input id="students" type="number" name="students" placeHolder="Students"/>
						 </div>


						<br><br><label for="Message">Message:</label><br>
						  <textarea name="Message" rows="20" cols="20" id="Message" placeholder=""></textarea>

						<div class="select">
						<br><label for="PreviousVisit">Have you been to this specific property before <i>(If "yes" click the checkbox below)</i>:<span style="color:red;">* </span></label>
						<input type="checkbox" name="PreviousVisit" value="Yes"  id="PreviousVisit"> <br>

						<br><label for="TermsAndConditions">Terms And Conditions for visiting our property <i>Tick the box if you agree </i>:<span style="color:red;">* </span></label>
						<input type="checkbox" name="TermsAndConditions" value="Agreed"  id="TermsAndConditions"> <a target="_blank" href="disclaimer.php">Terms And Conditions for visiting our property</a><br>
						</div>

						<div class="g-recaptcha" data-sitekey="6LdQykEUAAAAAKM2VnTfQ8pDvS84CgvgTRqajJGM"></div>
						  <input style="background-color: #fa7252; border-color: #fa7252;" type="submit" name="submit" value="Submit" class="submit-button" />
						</form>

						<p> <i>To protect the property from erosion we only issue a permit for up to 20 people per property area per day. Please note that we do not issue any permits for the first weekend of each month. </i>
						<br>After completing this form an email will be send to our administrator who will reply to you within 2 business days about the availability of a permit for that day or weekend.
						<br><br></p>

					</div>
				<div class="clearfix"> </div>
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
