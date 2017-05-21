<?php

$EmailFrom	 = "pochta@Energo-Usluga.github.io";
$EmailTo	 = "energousluga@inbox.ru";
$Subject	 = "Сообщение от Energo-Usluga.github.io";
$Name		 = Trim( stripslashes( $_POST[ 'Name' ] ) );
$Email		 = Trim( stripslashes( $_POST[ 'Email' ] ) );
$Number	 = Trim( stripslashes( $_POST[ 'Number' ] ) );

// validation
$validationOK = true;
if ( !$validationOK ) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
	exit;
}

// prepare email body text
$Body = "";
$Body .= "ФИО: ".$Name. " оставил заявку на сайте Energo-Usluga.github.io";
$Body .= "\n";
$Body .= "Email: ".$Email;
$Body .= " Номер телефона: ".$Number;
$Body .= "\n";
$Body .= "Сообщение: ";

// send email 
$success = mail( $EmailTo, $Subject, $Body, "From: <$EmailFrom>" );

// redirect to success page 
if ( $success ) {
header("Location: http://www.Energo-Usluga.github.io/");
} else {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
