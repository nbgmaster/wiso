<?php  

  $time_d    =  date("d",$timestamp);
  $time_m    =  date("m",$timestamp);
  $time_y    =  date("Y",$timestamp); 

  $query_userbirthdays = mysql_query("SELECT * from $user_tblname WHERE birthday = '$time_d' && birthmonth = '$time_m'");
	
  $check_userbirthdays = mysql_num_rows($query_userbirthdays);

  if ($check_userbirthdays != "" or $check_userbirthdays != "0")  {


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

  $query_birthday = mysql_query("SELECT * FROM $user_tblname");

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

      $query_birthday = mysql_query("SELECT * FROM $user_tblname");

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

  $query_nbirthchild = mysql_query("SELECT * FROM $user_tblname WHERE birthday = '$nextbdday' && birthmonth = '$nextbdmonth'");
  $numberofbirths    = mysql_num_rows($query_nbirthchild);


  include("templates/birthday.php");
