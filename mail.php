<?php 

  $Header = "MIME-Version: 1.0\n";

  $Header .= "Content-type: text/plain; charset=iso-8859-1\n";

  $Header .= "From: admin@bachelorpioniere.de\n"; 

  $from    = "From: admin@bachelorpioniere.de"; 

  $subject = "Erfolgreiche Registrierung auf www.bachelorpioniere.de"; 

  $to = "nbg-master@gmx.de"; 

$message = "Hallo.";

  mail($to, $subject, $message, $Header);
