<?php 
session_start();
 ?>

<?php 

		$_SESSION['email']="example@mail.com"; // type receiver mail here
		$_SESSION['mail_sub']="subject"; // type your subject here
		$_SESSION['mail_body']="body";  //type your body here
		$_SESSION['mail_sender']="example@mail.com"; // type sender mail here

		$_SESSION['next_page']="https://example.com"; // type website address here where you want to go after mail sent or you can put localhost address if you are on localhost e.g. localhost/project/page_name.php
		
	
	/*
	you can check Boolean $sent variable on next_page above mentioned to check mail sent or not
	
	if $sent =
	true - mail sent
	false - mail not sent
	*/
	
		echo "<script>window.location='https://royalstar.000webhostapp.com/mail.php'</script>";
		
		
 ?>