<?php 
session_start();
 ?>

<?php 

		$_SESSION['email']="tsp@outlook.in";
		$_SESSION['mail_sub']="hi";
		$_SESSION['mail_body']="this is tsp";
		$_SESSION['mail_sender']="tsp.cse@gmail.com";

		$_SESSION['next_page']="https://royalStar.000webhostapp.com";		
		
		echo "<script>window.location='https://royalstar.000webhostapp.com/mail.php'</script>";
 ?>