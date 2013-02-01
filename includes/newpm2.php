<?php 

  include('../dbCon.php');

  // Retrieve data from Query String

  $name = $_GET['name'];

  // Escape User Input to help prevent SQL Injection

  $name = mysql_real_escape_string($name);

  //build query

  $rowA = "0";

  if ($name != "")  { 

          $qures = mysql_query("SELECT COUNT( UserID ) AS rowA from users WHERE BINARY UserName = '$name' LIMIT 1");

          $qurow = mysql_fetch_row( $qures );

          $rowA = $qurow[ 0 ];

          $qures2 = mysql_query("SELECT COUNT( UserID ) AS rowB from users WHERE UserName = '$name' LIMIT 1");

          $qurow2 = mysql_fetch_row( $qures2 );

          $rowB = $qurow2[ 0 ];

  }

  if ($rowA != "1" && $rowB == "1")  {

        $query_us = mysql_query("SELECT UserName from users WHERE UserName = '$name'");
  
        while ($row_us =  mysql_fetch_assoc($query_us))  {

        $FillName = "$row_us[UserName]"; }

        $queryString = "onlyCase%%$FillName";

  }

  else if ($rowA != "1")  {

      $queryString = "nameFalsch%%$name";

  } else {

    $queryString = "";

  }

  echo $queryString;
