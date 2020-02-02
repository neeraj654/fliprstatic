<?php
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['messgae'];

  $to='neeraj@flipr.ai';
  $subject='Form Submission'
  $message="Name:".$name."\n"."phone: ".$phone."\n". "wrote the following:"."\n\n".$message;
  $header="Form: ".$email;