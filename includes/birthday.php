<?php  

  $time_d    =  date("d",$timestamp);
  $time_m    =  date("m",$timestamp);
  $time_y    =  date("Y",$timestamp); 


  $birtres = mysql_query("SELECT COUNT( UserID ) AS check_userbirthdays from $user_tblname WHERE birthday = '$time_d' && birthmonth = '$time_m' LIMIT 1");

  $birtrow = mysql_fetch_row( $birtres );

  $check_userbirthdays = $birtrow[ 0 ];


  $query_userbirthdays = mysql_query("SELECT UserID, UserName, birthyear from $user_tblname WHERE birthday = '$time_d' && birthmonth = '$time_m'");


  if ($check_userbirthdays > 0)  {


      $count_childs = "0";

      while ($row_birthdaychild  = mysql_fetch_assoc($query_userbirthdays))  {

             $child[$count_childs]    = "$row_birthdaychild[UserName]"; 

             $age                     = $time_y - $row_birthdaychild[birthyear];
 
             $childage[$count_childs] = "$age";

             $childid[$count_childs]  = "$row_birthdaychild[UserID]";

             $count_childs = $count_childs + 1;

      }

  } 

  else {  $no_birthdays = "1"; }


  $datedm   = date("d.m");
  $dateY    = date("Y");
  $datemd   = date("md");

  $checkthisbd = "1231";

  $query_birthday = mysql_query("SELECT birthday, birthmonth FROM $user_tblname");

  while  ($row_birthday  =  mysql_fetch_assoc($query_birthday)) {

          $bdday   = "$row_birthday[birthday]";
          if ($bdday < 10)  { $bdday = "0$bdday"; }

          $bdmonth = "$row_birthday[birthmonth]";
          if ($bdmonth < 10)  { $bdmonth = "0$bdmonth"; }

          $bdmd    = "$bdmonth$bdday";

          if ($bdmd > $datemd && $bdmd <= $checkthisbd)  { 

              $checkthisbd = "$bdmd";
              $nextbd      = "$row_birthday[birthday].$row_birthday[birthmonth]";

              $nextbdday   = "$row_birthday[birthday]";
              $nextbdmonth = "$row_birthday[birthmonth]";

          }

  }


  if ($nextbd == "") {

  
      $datedm   = date("d.m");
      $dateY    = date("Y");
      $datemd   = date("0101");

      $checkthisbd = "1231";

      $query_birthday = mysql_query("SELECT birthday, birthmonth FROM $user_tblname");

      while  ($row_birthday  =  mysql_fetch_assoc($query_birthday)) {

              $bdday   = "$row_birthday[birthday]";
              if ($bdday < 10)  { $bdday = "0$bdday"; }

              $bdmonth = "$row_birthday[birthmonth]";
              if ($bdmonth < 10)  { $bdmonth = "0$bdmonth"; }

              $bdmd    = "$bdmonth$bdday";

              if ($bdmd > $datemd && $bdmd <= $checkthisbd)  {

                  $checkthisbd = "$bdmd";
                  $nextbd      = "$row_birthday[birthday].$row_birthday[birthmonth]";

              $nextbdday   = "$row_birthday[birthday]";
              $nextbdmonth = "$row_birthday[birthmonth]";

              }

      }


  }

  $nobires = mysql_query("SELECT COUNT( UserID ) AS numberofbirths from $user_tblname WHERE birthday = '$nextbdday' && birthmonth = '$nextbdmonth' LIMIT 1");

  $nobirow = mysql_fetch_row( $nobires );

  $numberofbirths = $nobirow[ 0 ];

  $query_nbirthchild = mysql_query("SELECT UserID, UserName, birthyear FROM $user_tblname WHERE birthday = '$nextbdday' && birthmonth = '$nextbdmonth'");


  include("templates/birthday.php");
