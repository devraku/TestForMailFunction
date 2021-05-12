<?php

  if (isset($_POST['submit']))  {
	  
	  $text = $_POST['name'];
	  $email= $_POST['email']
	  $demo_message= $_POST['demo_message'];
	  
	  $mailTo = "transactionandsupport@dimensionnetwork.tk";
	  
	  $headers = "Kunde: ". $email;
	  $txt = " möchte was von Dimension" "\n\n". $demo_message
	  mail($email, $text, $demo_message, $headers);
  } 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
[];