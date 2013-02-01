<?php 

  // Start Session

  session_cache_limiter('none');

  ini_set('session.gc_maxlifetime',300);

  session_start();
  ob_start();


 // include('../dbCon.php');

  include('../config.php');

  // Retrieve data from Query String

  $mail = $_GET['mail'];
  $pw   = $_GET['pw'];

  // Escape User Input to help prevent SQL Injection

  $mail = mysql_real_escape_string($mail);

  $pw = mysql_real_escape_string($pw);

  $pw2 = MD5($pw);

 
  //build query

  $rowA = "0";
  $rowB = "1";

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



  if ($mail != "")  {

      $qu2res = mysql_query("SELECT COUNT( UserID ) AS rowA from users WHERE UserID != '$auto_logon_id' && UserMail = '$mail' LIMIT 1");

      $qu2row = mysql_fetch_row( $qu2res );

      $rowA = $qu2row[ 0 ];

  }


  if ($pw != "")  {

      $qu2bres = mysql_query("SELECT COUNT( UserID ) AS rowB from users WHERE UserPass = '$pw2' && UserID = '$auto_logon_id' LIMIT 1");

      $qu2brow = mysql_fetch_row( $qu2bres );

      $rowB = $qu2brow[ 0 ];

  }


  if ($rowA > 0)  {

     $queryString = "mailVergeben";
     echo $queryString;

  }


  if ($rowB == "0")  {

     $queryString = "PWfalsch";
     echo $queryString;

  }


