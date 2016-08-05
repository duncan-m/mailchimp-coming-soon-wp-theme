<?php
			$subject = "new subscription received"; 
			$message = "You got New Subscription from ".get_bloginfo( 'name' )." \r\n Email id :  ".$_REQUEST['mailID'];
			$headers = "From: " . strip_tags($_REQUEST['mailID']) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($_REQUEST['mailID']) . "\r\n";
			//$headers .= "CC: susan@example.com\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			if(!mail($email_id, $subject, $message, $headers)){
             $mail_status='no';
          }else{
          	$mail_status='yes';
           
         }?>