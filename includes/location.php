<?php 
$header .= "Content-Type: text/html; charset=ISO-8859-1";
header($header);

  include('../dbCon.php');

  // Retrieve data from Query String

  $pid = $_GET['pid'];

  // Escape User Input to help prevent SQL Injection

  $pid = mysql_real_escape_string($pid);

  //build query

      $queryPid = mysql_query("SELECT * from gutscheine WHERE id = '$pid'");
 
      while ($rowPid = mysql_fetch_assoc($queryPid))  {  

       //    $queryString = "<img src=images/credits/$rowPid[picture]>$rowPid[description]";

             $queryString = "$rowPid[description]";

      }  

      echo $queryString;
