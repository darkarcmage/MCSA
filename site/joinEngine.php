<?php

$EmailFrom = "ddall94@gmail.com";  //remember to change
$Name = Trim(stripslashes($_POST['Name'])); 
$Surname = Trim(stripslashes($_POST['Surname'])); 
$Phone = Trim(stripslashes($_POST['Phone'])); 
$Email = Trim(stripslashes($_POST['Email']));  
$ID = Trim(stripslashes($_POST['ID']));  
$HomeA = Trim(stripslashes($_POST['HomeA'])); 

$NameP = Trim(stripslashes($_POST['NameP'])); 
$SurnameP = Trim(stripslashes($_POST['SurnameP'])); 
$PhoneP = Trim(stripslashes($_POST['PhoneP'])); 
$EmailP = Trim(stripslashes($_POST['EmailP']));  
$IDP = Trim(stripslashes($_POST['IDP']));  

$NameC1 = Trim(stripslashes($_POST['NameC1'])); 
$SurnameC1 = Trim(stripslashes($_POST['SurnameC1'])); 
$PhoneC1 = Trim(stripslashes($_POST['PhoneC1'])); 
$EmailC1 = Trim(stripslashes($_POST['EmailC1']));  
$IDC1 = Trim(stripslashes($_POST['IDC1']));  

$NameC2 = Trim(stripslashes($_POST['NameC2'])); 
$SurnameC2 = Trim(stripslashes($_POST['SurnameC2'])); 
$PhoneC2 = Trim(stripslashes($_POST['PhoneC2'])); 
$EmailC2 = Trim(stripslashes($_POST['EmailC2']));  
$IDC2 = Trim(stripslashes($_POST['IDC2']));  

$NameC3 = Trim(stripslashes($_POST['NameC3'])); 
$SurnameC3 = Trim(stripslashes($_POST['SurnameC3'])); 
$PhoneC3 = Trim(stripslashes($_POST['PhoneC3'])); 
$EmailC3 = Trim(stripslashes($_POST['EmailC3']));  
$IDC3 = Trim(stripslashes($_POST['IDC3']));  

$NameC4 = Trim(stripslashes($_POST['NameC4'])); 
$SurnameC4 = Trim(stripslashes($_POST['SurnameC4'])); 
$PhoneC4 = Trim(stripslashes($_POST['PhoneC4'])); 
$EmailC4 = Trim(stripslashes($_POST['EmailC4']));  
$IDC4 = Trim(stripslashes($_POST['IDC4'])); 

$NameC5 = Trim(stripslashes($_POST['NameC5'])); 
$SurnameC5 = Trim(stripslashes($_POST['SurnameC5'])); 
$PhoneC5 = Trim(stripslashes($_POST['PhoneC5'])); 
$EmailC5 = Trim(stripslashes($_POST['EmailC5']));  
$IDC5 = Trim(stripslashes($_POST['IDC5'])); 

$Language = Trim(stripslashes($_POST['Language']));  
$Occupation = Trim(stripslashes($_POST['Occupation']));  
$Gender = Trim(stripslashes($_POST['Gender']));  

$OtherClub = Trim(stripslashes($_POST['OtherClub']));  
$CurrentMembership = Trim(stripslashes($_POST['CurrentMembership']));  
$PreviousMembership = Trim(stripslashes($_POST['PreviousMembership']));  
$Message = Trim(stripslashes($_POST['Message']));  

$Patrolling = Trim(stripslashes($_POST['Patrolling']));  
$Clearing = Trim(stripslashes($_POST['Clearing']));  
$WorkMeets = Trim(stripslashes($_POST['WorkMeets']));  

$Date1 = Trim(stripslashes($_POST['Date1']));  
$Venue1 = Trim(stripslashes($_POST['Venue1']));  
$Leader1 = Trim(stripslashes($_POST['Leader1']));  
$Activity1 = Trim(stripslashes($_POST['Activity1'])); 

$Date2 = Trim(stripslashes($_POST['Date2']));  
$Venue2 = Trim(stripslashes($_POST['Venue2']));  
$Leader2 = Trim(stripslashes($_POST['Leader2']));  
$Activity2 = Trim(stripslashes($_POST['Activity2'])); 

$Date3 = Trim(stripslashes($_POST['Date3']));  
$Venue3 = Trim(stripslashes($_POST['Venue3']));  
$Leader3 = Trim(stripslashes($_POST['Leader3']));  
$Activity3 = Trim(stripslashes($_POST['Activity3'])); 

$Name2 = Trim(stripslashes($_POST['Name2']));  
$Phone2 = Trim(stripslashes($_POST['Phone2']));  
$Email2 = Trim(stripslashes($_POST['Email2']));  
$MagN1 = Trim(stripslashes($_POST['MagN1']));  

$Name3 = Trim(stripslashes($_POST['Name3']));  
$Phone3 = Trim(stripslashes($_POST['Phone3']));  
$Email3 = Trim(stripslashes($_POST['Email3']));  
$MagN2 = Trim(stripslashes($_POST['MagN2']));  

$Abide = Trim(stripslashes($_POST['Abide']));  
$Agree = Trim(stripslashes($_POST['Agree']));  
$Notice = Trim(stripslashes($_POST['Notice']));  
$Disclaim = Trim(stripslashes($_POST['Disclaim']));  
$TermsAndConditions = Trim(stripslashes($_POST['TermsAndConditions']));  
 
$EmailTo = "ddall94@gmail.com, $Email";
$EmailTo2 = "ddall94@gmail.com, $Email2, $Email3";
$Subject = "MCSA Magaliesberg membership application";
$Subject2 = "Urgent: You are required to approve a new MCSA membership application";

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
$Body .= "Thank you for applying for membership at the MCSA Magaliesberg section. If you did not complete this form or you do not agree to the membership terms and conditions please notify the administrator at admin@mag.mcsa.org.za  or 083 845 1573. ";
$Body .= "\n";
$Body .= "\n";
$Body .= " --------------------------------Membership application form start here----------------------------------------------";
$Body .= "\n";
$Body .= " PERSONAL INFO";
$Body .= "\n";
$Body .= " Name : ";
$Body .= $Name  ;
$Body .= "\n";
$Body .= " Surname : ";
$Body .= $Surname  ;
$Body .= "\n";
$Body .= " Phone : ";
$Body .= $Phone  ;
$Body .= "\n";
$Body .= " Email : ";
$Body .= $Email  ;
$Body .= "\n";
$Body .= " ID : ";
$Body .= $ID  ;
$Body .= "\n";
$Body .= " Home Address : ";
$Body .= $HomeA  ;
$Body .= "\n";
$Body .= "\n";
$Body .= " FAMILY MEMBERS IF APPLICABLE";
$Body .= "\n";
$Body .= " Name of Partner : ";
$Body .= $NameP  ;
$Body .= "\n";
$Body .= " Surname of Partner : ";
$Body .= $SurnameP  ;
$Body .= "\n";
$Body .= " Partner phone : ";
$Body .= $PhoneP  ;
$Body .= "\n";
$Body .= " Email partner : ";
$Body .= $EmailP  ;
$Body .= "\n";
$Body .= " ID partner: ";
$Body .= $IDP  ;
$Body .= "\n";
$Body .= " Name Child 1 : ";
$Body .= $NameC1  ;
$Body .= "\n";
$Body .= " Surname Child 1: ";
$Body .= $SurnameC1  ;
$Body .= "\n";
$Body .= " Phone Child 1 : ";
$Body .= $PhoneC1  ;
$Body .= "\n";
$Body .= " Email Child 1 : ";
$Body .= $EmailC1  ;
$Body .= "\n";
$Body .= " ID Child 1 : ";
$Body .= $IDC1  ;
$Body .= "\n";
$Body .= " Name Child 2: ";
$Body .= $NameC2  ;
$Body .= "\n";
$Body .= " Surname Child 2 : ";
$Body .= $SurnameC2  ;
$Body .= "\n";
$Body .= " Phone Child 2 : ";
$Body .= $PhoneC2  ;
$Body .= "\n";
$Body .= " Email Child 2: ";
$Body .= $EmailC2  ;
$Body .= "\n";
$Body .= " ID Child 2: ";
$Body .= $IDC2  ;
$Body .= "\n";
$Body .= " Name Child 3 : ";
$Body .= $NameC3  ;
$Body .= "\n";
$Body .= " Surname Child 3 : ";
$Body .= $SurnameC3  ;
$Body .= "\n";
$Body .= " Phone Child 3 : ";
$Body .= $PhoneC3  ;
$Body .= "\n";
$Body .= " Email child 3: ";
$Body .= $EmailC3  ;
$Body .= "\n";
$Body .= " ID child 3 : ";
$Body .= $IDC3  ;
$Body .= "\n";

$Body .= "\n";
$Body .= " Name Child 4 : ";
$Body .= $NameC4  ;
$Body .= "\n";
$Body .= " Surname Child 4 : ";
$Body .= $SurnameC4  ;
$Body .= "\n";
$Body .= " Phone Child 4 : ";
$Body .= $PhoneC4  ;
$Body .= "\n";
$Body .= " Email child 4: ";
$Body .= $EmailC4  ;
$Body .= "\n";
$Body .= " ID child 4 : ";
$Body .= $IDC4  ;
$Body .= "\n";

$Body .= "\n";
$Body .= " Name Child 5 : ";
$Body .= $NameC5  ;
$Body .= "\n";
$Body .= " Surname Child 5 : ";
$Body .= $SurnameC5  ;
$Body .= "\n";
$Body .= " Phone Child 5 : ";
$Body .= $PhoneC5  ;
$Body .= "\n";
$Body .= " Email child 5: ";
$Body .= $EmailC5  ;
$Body .= "\n";
$Body .= " ID child 5 : ";
$Body .= $IDC5  ;
$Body .= "\n";

$Body .= "\n";
$Body .= "\n";
$Body .= " OTHER INFO";
$Body .= "\n";
$Body .= " Language : ";
$Body .= $Language  ;
$Body .= "\n";
$Body .= " Occupation : ";
$Body .= $Occupation  ;
$Body .= "\n";
$Body .= " Gender : ";
$Body .= $Gender  ;
$Body .= "\n";
$Body .= " Other Clubs : ";
$Body .= $OtherClub  ;
$Body .= "\n";
$Body .= " Current Membership at another section of the MCSA: ";
$Body .= $CurrentMembership  ;
$Body .= "\n";
$Body .= " Previous Membership at any section of the MCSA: ";
$Body .= $PreviousMembership  ;
$Body .= "\n";
$Body .= " Message : ";
$Body .= $Message  ;
$Body .= "\n";
$Body .= "  Membership Activity contribution: Patrolling : ";
$Body .= $Patrolling  ;
$Body .= "\n";
$Body .= " Membership Activity contribution: Clearing : ";
$Body .= $Clearing  ;
$Body .= "\n";
$Body .= " Membership Activity contribution: Work Meets : ";
$Body .= $WorkMeets  ;
$Body .= "\n";
$Body .= "\n";
$Body .= "\n";
$Body .= " CLUB MEETS ATTENDED";
$Body .= "\n";
$Body .= " Club meet 1: Date : ";
$Body .= $Date1  ;
$Body .= "\n";
$Body .= " 1. Venue: ";
$Body .= $Venue1  ;
$Body .= "\n";
$Body .= " 1. Leader: ";
$Body .= $Leader1  ;
$Body .= "\n";
$Body .= " 1. Activity: ";
$Body .= $Activity1  ;
$Body .= "\n";
$Body .= " Club meet 2: Date : ";
$Body .= $Date2  ;
$Body .= "\n";
$Body .= " 2. Venue: ";
$Body .= $Venue2  ;
$Body .= "\n";
$Body .= " 2. Leader: ";
$Body .= $Leader2  ;
$Body .= "\n";
$Body .= " 2. Activity: ";
$Body .= $Activity2  ;
$Body .= "\n";
$Body .= " Club meet 3: Date: ";
$Body .= $Date3  ;
$Body .= "\n";
$Body .= " 3. Venue: ";
$Body .= $Venue3  ;
$Body .= "\n";
$Body .= " 3. Leader: ";
$Body .= $Leader3  ;
$Body .= "\n";
$Body .= " 3. Activity: ";
$Body .= $Activity3  ;
$Body .= "\n";
$Body .= "\n";
$Body .= " PROPOSED AND SECONDED BY";
$Body .= "\n";
$Body .= " Proposer Name : ";
$Body .= $Name2  ;
$Body .= "\n";
$Body .= " Proposer Phone : ";
$Body .= $Phone2  ;
$Body .= "\n";
$Body .= " Proposer Email : ";
$Body .= $Email2  ;
$Body .= "\n";
$Body .= " Proposer MCSA member number : ";
$Body .= $MagN1  ;
$Body .= "\n";
$Body .= " Seconder Name : ";
$Body .= $Name3  ;
$Body .= "\n";
$Body .= " Seconder Phone : ";
$Body .= $Phone3  ;
$Body .= "\n";
$Body .= " Seconder Email : ";
$Body .= $Email3  ;
$Body .= "\n";
$Body .= "\n";
$Body .= " AGREEMENT TO MCSA MAGALIESBERG TERMS AND CONDITIONS";
$Body .= "\n";
$Body .= " Seconder MCSA member number : ";
$Body .= $MagN2  ;
$Body .= "\n";
$Body .= " I agree to uphold the MCSA name : ";
$Body .= $Abide  ;
$Body .= "\n";
$Body .= " I agree to be bound by the MCSA Constitution : ";
$Body .= $Agree  ;
$Body .= "\n";
$Body .= " I agree to give written notice of resignation should I resign from my membership : ";
$Body .= $Notice  ;
$Body .= "\n";
$Body .= " I acknowledge that mountaineering (hiking and climbing) is de facto an activity which carries certain risks  : ";
$Body .= $Disclaim  ;
$Body .= "\n";
$Body .= " I agree to the terms and conditions of MCSA membership : ";
$Body .= $TermsAndConditions  ;
$Body .= "\n";
$Body .= " --------------------------------Membership application form end here----------------------------------------------";
$Body .= "\n";
$Body .= "Thank you for applying for membership at the MCSA Magaliesberg. We will get back to you as soon as the proposer and seconder confirmed, whereby we will ask you for a photo of yourself, of each family member and for proof of payment.";
$Body .= "\n";
$Body .= "\n";
$Body .= "Kind regards,";
$Body .= "\n";
$Body .= "MCSA team";
$Body2 .= "\n";
$Body2 .= "admin@mag.mcsa.org.za";
$Body .= "\n";
$Body .= "www.facebook.com/groups/MCSA.Magaliesberg/";
$Body .= "\n";
$Body .= "www.mcsamagalies.co.za";

$Body2 .= "";
$Body2 .= "Hallo $Name2 and $Name3";
$Body2 .= "\n";
$Body2 .= "\n";
$Body2 .= "$Name $Surname applied for membership at the MCSA Magaliesberg section and elected you as the proposer. Can you please confirm, by replying to the club adminstrator at admin@mag.mcsa.org.za,  that you know this person and that you do propose him/her.";
$Body2 .= "\n";
$Body2 .= "\n";
$Body2 .= " The person who applied for membership and selected you as the proposer is:";
$Body2 .= "\n";
$Body2 .= " Name : ";
$Body2 .= $Name  ;
$Body2 .= "\n";
$Body2 .= " Surname : ";
$Body2 .= $Surname  ;
$Body2 .= "\n";
$Body2 .= " Phone : ";
$Body2 .= $Phone  ;
$Body2 .= "\n";
$Body2 .= " Email : ";
$Body2 .= $Email  ;
$Body2 .= "\n";
$Body2 .= "\n";
$Body2 .= "Please reply to the MCSA Magaliesberg section administrator at admin@mag.mcsa.org.za.";
$Body2 .= "\n";
$Body2 .= "\n";
$Body2 .= "Thank you";
$Body2 .= "\n";
$Body2 .= "\n";
$Body2 .= "Kind regards,";
$Body2 .= "\n";
$Body2 .= "MCSA team";
$Body2 .= "\n";
$Body2 .= "www.facebook.com/groups/MCSA.Magaliesberg/";
$Body2 .= "\n";
$Body2 .= "admin@mag.mcsa.org.za";
$Body2 .= "\n";
$Body2 .= "www.mcsamagalies.co.za";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
$success = mail($EmailTo2, $Subject2, $Body2, "From: <$EmailFrom>");
}

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thankyou.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
}
?>