<?php
if(isset($_POST) && !empty($_POST)) {
	$command = $_POST['command'];
	switch($command) {
		case 'contact_form' :


			$First_Name = $_POST['First-Name'];
			$Middle_Name = $_POST['Middle-Name'];
			$Last_Name = $_POST['Last-Name'];
			$Organisation = $_POST['Organisation'];
			$street_address = $_POST['Street-Address'];
			$City = $_POST['City'];
			$State = $_POST['State'];
			$Postal_Code = $_POST['Postal-Code'];
			$Country = $_POST['Country'];
			$Tel = $_POST['Tel'];
			$Fax = $_POST['Fax'];
			$Email = $_POST['Email'];	
			$Profession = $_POST['Profession'];
			$Comments = $_POST['Comments'];

		    //$to = "krish@togglehead.in";
			
			//$to = "kaustubh@togglehead.in";
			$to = "rangoon@rcwpltd.com";
			$to .= ", alibham36@yahoo.com";
			$to .= ", ahmedrcw@gmail.com";
			$to .= ", aatef@togglehead.in";
			$to .= ", sunny@togglehead.in";
			
			


			$subject = "Email From Rangoon Chemical Works Website";

			 $message = '<center><strong><div style="font-size:22px; color:#000000;">Rangoon Chemical Works Contact Form</strong></div><br><br>
		<div style="color:#000000;"><table border=1 cellspacing="0" cellpadding="10">
		
		<tr>
            <td colspan="2"><strong>Contact Form Details:</strong></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td>'.$First_Name.' '.$Middle_Name.' '.$Last_Name.'</td>
        </tr>
        <tr>
            <td>Organisation:</td>
            <td>'.$Organisation.' </td>
        </tr>
        <tr>
            <td>Street Address:</td>
            <td>'.$street_address.' </td>
        </tr>
        <tr>
            <td>City:</td>
            <td>'.$City.' </td>
        </tr>
        <tr>
            <td>State:</td>
            <td>'.$State.' </td>
        </tr>
        <tr>
            <td>Postal Code or Zip:</td>
            <td>'.$Postal_Code.' </td>
        </tr>
        <tr>
            <td>Country:</td>
            <td>'.$Country.' </td>
        </tr>
        <tr>
            <td>Tel:</td>
            <td>'.$Tel.' </td>
        </tr>
        <tr>
            <td>Fax:</td>
            <td>'.$Fax.' </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>'.$Email.' </td>
        </tr>
        <tr>
            <td>Profession:</td>
            <td>'.$Profession.' </td>
        </tr>
        <tr>
            <td>Comments:</td>
            <td>'.$Comments.' </td>
        </tr>
		
</table></div></center>

';
			 
			 

			$headers = "From: ". $Email."\r\nReply-To: ". $Email;
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