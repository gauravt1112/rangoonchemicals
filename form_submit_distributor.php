<?php
if(isset($_POST) && !empty($_POST)) {
	$command = $_POST['command'];
	switch($command) {
		case 'distributor_form' :


			$principal_full_name = $_POST['principal-full-name'];
			$principal_company_name = $_POST['principal-company-name'];
			$principal_Email = $_POST['principal-Email'];
			$principal_Tel = $_POST['principal-Tel'];
			$principal_State = $_POST['principal-State'];
			$principal_Operation_Country = $_POST['principal-Operation-Country'];
			$principal_Operation_State = $_POST['principal-Operation-State'];
			
			$Website = $_POST['Website'];
			$Mailing_Street_Address = $_POST['Mailing-Street-Address'];
			$Mailing_Building = $_POST['Mailing-Building'];
			$Mailing_Suite = $_POST['Mailing-Suite'];
			$Mailing_City = $_POST['Mailing-City'];
			$Mailing_State = $_POST['Mailing-State'];
			$Mailing_Postal_Code = $_POST['Mailing-Postal-Code'];
			
			
			$Ownership_Business_Type = $_POST['Ownership-Business-Type'];
			$Ownership_First_Name = $_POST['Ownership-First-Name'];
			$Ownership_Middle_Name = $_POST['Ownership-Middle-Name'];
			$Ownership_Last_Name = $_POST['Ownership-Last-Name'];
			$Ownership_Residential_Address = $_POST['Ownership-Residential-Address'];
			$Ownership_City = $_POST['Ownership-City'];
			$Ownership_State = $_POST['Ownership-State'];
			$Ownership_Postal_Code = $_POST['Ownership-Postal-Code'];
			$Ownership_Tel = $_POST['Ownership-Tel'];
			$Ownership_partner = $_POST['Ownership-partner'];
			
			
			$partner_First_Name = $_POST['partner-First-Name'];
			$partner_Middle_Name = $_POST['partner-Middle-Name'];
			$partner_Last_Name = $_POST['partner-Last-Name'];
			$partner_Address = $_POST['partner-Address'];
			$partner_City = $_POST['partner-City'];
			$partner_State = $_POST['partner-State'];
			$partner_Postal_Code = $_POST['partner-Postal-Code'];
			$partner_Tel = $_POST['partner-Tel'];

		    //$to = "krish@togglehead.in";
			
			//$to = "kaustubh@togglehead.in";
			$to = "rangoon@rcwpltd.com";
			$to .= ", alibham36@yahoo.com";
			$to .= ", ahmedrcw@gmail.com";
			$to .= ", aatef@togglehead.in";
			$to .= ", sunny@togglehead.in";
			


			$subject = "Email From Rangoon Chemical Works Website";

			 $message = '<center><strong><div style="font-size:22px; color:#000000;">Rangoon Chemical Works Distributor Form</strong></div><br><br>
		<div style="color:#000000;"><table border=1 cellspacing="0" cellpadding="10">
		
		<tr>
            <td colspan="2"><strong>Essential Required Details:</strong></td>
        </tr>
        <tr>
            <td>Full Name:</td>
            <td>'.$principal_full_name.' </td>
        </tr>
        <tr>
            <td>Company Name:</td>
            <td>'.$principal_company_name.' </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>'.$principal_Email.' </td>
        </tr>
        <tr>
            <td>Tel:</td>
            <td>'.$principal_Tel.' </td>
        </tr>
        <tr>
            <td>State:</td>
            <td>'.$principal_State.' </td>
        </tr>
        <tr>
            <td>Country of Operation:</td>
            <td>'.$principal_Operation_Country.' </td>
        </tr>
        <tr>
            <td>State of Operation:</td>
            <td>'.$principal_Operation_State.' </td>
        </tr>
        <tr>
            <td>Website:</td>
            <td>'.$Website.' </td>
        </tr>
		
		<tr>
            <td colspan="2"><strong>Mailing Address:</strong></td>
        </tr>
        <tr>
            <td>Street Address:</td>
            <td>'.$Mailing_Street_Address.' </td>
        </tr>
        <tr>
            <td>Building:</td>
            <td>'.$Mailing_Building.' </td>
        </tr>
        <tr>
            <td>Suite:</td>
            <td>'.$Mailing_Suite.' </td>
        </tr>
        <tr>
            <td>City:</td>
            <td>'.$Mailing_City.' </td>
        </tr>
        <tr>
            <td>State:</td>
            <td>'.$Mailing_State.' </td>
        </tr>
        <tr>
            <td>Postal Code or Zip:</td>
            <td>'.$Mailing_Postal_Code.' </td>
        </tr>
        <tr>
            <td>Postal Code or Zip:</td>
            <td>'.$Mailing_Postal_Code.' </td>
        </tr>
		
		<tr>
            <td colspan="2"><strong>Ownership Information:</strong></td>
        </tr>
        <tr>
            <td>Please Select Business Type:</td>
            <td>'.$Ownership_Business_Type.'</td>
        </tr>
        <tr>
            <td>Name of Owner:</td>
            <td>'.$Ownership_First_Name.' '.$Ownership_Middle_Name.' '.$Ownership_Last_Name.'</td>
        </tr>
        <tr>
            <td>Residential Address:</td>
            <td>'.$Ownership_Residential_Address.' </td>
        </tr>
        <tr>
            <td>City:</td>
            <td>'.$Ownership_City.' </td>
        </tr>
        <tr>
            <td>State:</td>
            <td>'.$Ownership_State.' </td>
        </tr>
        <tr>
            <td>Postal Code or Zip:</td>
            <td>'.$Ownership_Postal_Code.' </td>
        </tr>
        <tr>
            <td>Tel:</td>
            <td>'.$Ownership_Tel.' </td>
        </tr>
        <tr>
            <td>Partners:</td>
            <td>'.$Ownership_partner.' </td>
        </tr>
		
		
		
		<tr>
            <td colspan="2"><strong>Partner Information:</strong></td>
        </tr>
        <tr>
            <td>Name of Owner:</td>
            <td>'.$partner_First_Name.' '.$partner_Middle_Name.' '.$partner_Last_Name.'</td>
        </tr>
        <tr>
            <td>Residential Address:</td>
            <td>'.$partner_Address.' </td>
        </tr>
        <tr>
            <td>City:</td>
            <td>'.$partner_City.' </td>
        </tr>
        <tr>
            <td>State:</td>
            <td>'.$partner_State.' </td>
        </tr>
        <tr>
            <td>Postal Code or Zip:</td>
            <td>'.$partner_Postal_Code.' </td>
        </tr>
        <tr>
            <td>Tel:</td>
            <td>'.$partner_Tel.' </td>
        </tr>
		
</table></div></center>

';
			 
			 

			$headers = "From: ". $principal_Email."\r\nReply-To: ". $principal_Email;
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html;\n\tcharset=\"iso-8859-1\"\r\n";


			if(mail($to, $subject, $message, $headers)) {
				$result = array('status'=>'success', 'message'=>"<div style='float:left; width:100%;'><p align='center' style='margin-top: 40px;color: white; line-height:20px;'><br />Thank you for your enquiry.<br>You will be hearing from us shortly.<br /><br /></p></div>");
				echo json_encode($result);
			} else {
				$result = array('status'=>'error', 'message'=>"<p align='center' class='error'><br /><br />Please try again!</p>");
				echo json_encode($result);
			}

	}

} else {
	echo "Sorry! Please try again!";
}

?>