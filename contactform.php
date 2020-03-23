<?php
    $result="";
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

		$mailTo='gelixgole@gmail.com'; // Receiver Email ID, Replace with your email ID
		$message="Name :".$name."\n"."From :".$mailFrom."\n". "Youtube:" .$subject."\n"."Wrote the following :"."\n\n".$message;
		header("Location: succes.html?mailsend");


		if(mail($mailTo, $subject, $message)){
          echo"Something went wrong. Please try again.";
		}
         else {
          echo"Thanks".$_POST['name']."for submitting your video";
		}
	}
?>
