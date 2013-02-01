<?php 

  include('../dbCon.php');

  // Retrieve data from Query String

  $name = $_GET['name'];
  $mail = $_GET['mail'];

  // Escape User Input to help prevent SQL Injection

  $name = mysql_real_escape_string($name);
  $mail = mysql_real_escape_string($mail);
 
  //build query

  $rowA = "0";
  $rowB = "0";

  if ($name != "")  { 

          $qures = mysql_query("SELECT COUNT( UserID ) AS rowA from users WHERE UserName = '$name' LIMIT 1");

          $qurow = mysql_fetch_row( $qures );

          $rowA = $qurow[ 0 ];

  }

  if ($mail != "")  {

          $qu2res = mysql_query("SELECT COUNT( UserID ) AS rowB from users WHERE UserMail = '$mail' LIMIT 1");

          $qu2row = mysql_fetch_row( $qu2res );

          $rowB = $qu2row[ 0 ];

  }


  $allowed_chars = '[^a-z0-9|*_\-\:\~\.\ \-]';  

  if ( eregi($allowed_chars, $name))  {

      $queryString = "nameSonder";
      echo $queryString;

  }


  if ($rowA > 0)  {

      $queryString = "nameVergeben";
      echo $queryString;

  }

  else if ($rowB > 0)  {

     $queryString = "mailVergeben";
     echo $queryString;

  }

