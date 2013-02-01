<?php 

  // Start Session

  session_start();
  ob_start();


 // include('../dbCon.php');

  include('../config.php');

  // Retrieve data from Query String

  $name = $_GET['name'];

  // Escape User Input to help prevent SQL Injection

  $name = mysql_real_escape_string($name);

  //build query

  $rowA = "0";



  if(!isset($_SESSION['IP'])) {

            $_SESSION['IP'] = $_SERVER['REMOTE_ADDR'];

  }



  // Check Session or Cookie set

  if ($_COOKIE["cookie_wiwistud"] != "")  {

      $str_session = explode("|", $_COOKIE["cookie_wiwistud"]);

      $auto_logon_session = $str_session[0];
      $auto_logon_id      = $str_session[1];

  } 

  else  {

      $auto_logon_session = "";
      $auto_logon_id      = "";

  }


  if ($name != "")  { 

          $qures = mysql_query("SELECT COUNT( UserID ) AS rowA from users WHERE UserID != '$auto_logon_id' && UserName = '$name' LIMIT 1");

          $qurow = mysql_fetch_row( $qures );

          $rowA = $qurow[ 0 ];

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

