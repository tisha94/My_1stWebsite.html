<!--- contact/email.php file that will actually grab the data from the fields, compose into a message and send to your/my email.  -->

<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_subject = $_POST['cf_subject'];
$field_message = $_POST['cf_message'];

// ^^^^Assigning the data sent from the contact form fields (cf_name, cf_email,cf_subject,cf_message) to php variables ($cf_message, $field_email,$field_subject, $field_message)^^^^^^

$mail_to = 'tisha_sutherland2001@aol.com';// $mail_to <== shall contain the site owner email, this is where the email is sent to.

$subject = 'New Message from a site visitor!!'.$field_subject;// Subject of the email you receive from the contact form

$body_message = 'From: '.$field_name."\n";
$body_message .= 'Subject: '.$field_subject."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;
// ^^^^Constructing the body of the message^^^^

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";
// ^^^^^Constructing the headers of the message

$mail_status = mail($mail_to, $subject, $body_message, $headers);// Defining mail() function and assigning it to a variable $mail_status, which is used below to check whether the mail has been sent or not

// If the mail() function executed successfully then do the code below
if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for contacting me. I will be in touch with you very soon.');
		window.location = 'My_1stWebsite.html';
	</script>
<?php
}
else { ?><!-- If the mail() function fails, then execute the following code -->
	<script language="javascript" type="text/javascript">
		alert('Darn! :/ Message failed. Please, send an email to tisha_sutherland2001@aol.com');
		window.location = 'contact_page.html';
	</script>
<?php
}
?>
