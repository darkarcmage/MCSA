<?php

$EmailFrom = "ddall94@gmail.com";
$Name = Trim(stripslashes($_POST['Name'])); 
$Phone = Trim(stripslashes($_POST['Phone'])); 
$Email = Trim(stripslashes($_POST['Email']));  
$Permit = Trim(stripslashes($_POST['Permit'])); 
$dateFrom = Trim(stripslashes($_POST['dateFrom'])); 
$dateTo = Trim(stripslashes($_POST['dateTo'])); 
$adults = Trim(stripslashes($_POST['adults'])); 
$children = Trim(stripslashes($_POST['children'])); 
$youngsters = Trim(stripslashes($_POST['youngsters'])); 
$students = Trim(stripslashes($_POST['students'])); 
$MCSANumber = Trim(stripslashes($_POST['MCSANumber'])); 
$Message = Trim(stripslashes($_POST['Message'])); 
$PreviousVisit = Trim(stripslashes($_POST['PreviousVisit'])); 
$TermsAndConditions = Trim(stripslashes($_POST['TermsAndConditions'])); 
$EmailTo = "ddall94@gmail.com, $Email";
$Subject = "MCSA Permit application, $Permit";

// validation
if(isset($_POST['g-recaptcha-response'])){
	$captcha=$_POST['g-recaptcha-response'];
}

if(!$captcha){
	print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php?e=cm\">";
	exit;
}

$fields = array(
        'secret'    =>  "6LdQykEUAAAAAP6So0kvFLj4cKSjCm0NHsT_J1U7",
        'response'  =>  $captcha,
        'remoteip'  =>  $_SERVER['REMOTE_ADDR']
    );
    $ch = curl_init("https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
 
    $response = curl_exec($ch);
    $responseKeys = (array) json_decode($response);
    curl_close($ch);
   
if  ($responseKeys["success"] == false) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php?e=cf\">";
	exit;
} else {

// prepare email body text
$Body .= "";
$Body .= "Hallo $Name";
$Body .= "\n";
$Body .= "\n";
$Body .= "Thank you for applying for a permit through our website. ";
$Body .= "\n";
$Body .= "\n";
$Body .= "";
$Body .= "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Permit property: ";
$Body .= $Permit;
$Body .= "\n";
$Body .= "Date From: ";
$Body .= $dateFrom;
$Body .= "\n";
$Body .= "Date To: ";
$Body .= $dateTo;
$Body .= "\n";
$Body .= "Adults: ";
$Body .= $adults;
$Body .= "\n";
$Body .= "Children: ";
$Body .= $children;
$Body .= "\n";
$Body .= "Youngsters: ";
$Body .= $youngsters;
$Body .= "\n";
$Body .= "Students: ";
$Body .= $students;
$Body .= "\n";
$Body .= "MCSA Number: ";
$Body .= $MCSANumber;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
$Body .= "Previously visited this property: ";
$Body .= $PreviousVisit;
$Body .= "\n";
$Body .= "Terms and conditions: ";
$Body .= $TermsAndConditions;
$Body .= "\n";
$Body .= "\n";
$Body .= "Thank you for applying for a permit through our website. We will get back to you shortly.";
$Body .= "\n";
$Body .= "\n";
$Body .= "Kind regards,";
$Body .= "\n";
$Body .= "MCSA team";
$Body .= "\n";
$Body .= "www.facebook.com/groups/MCSA.Magaliesberg/";
$Body .= "\n";
$Body .= "www.mcsamagalies.co.za";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
}

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thankyou.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
}
?>