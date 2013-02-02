<?php 

  include("dbCon.php");

  $counter = 1;

  $oldid = 1;
      
  $Ay_userids = array();

  $query_userdata = mysql_query("SELECT UserID from users ORDER by UserID");  
  
  while  ($row_userdata  =  mysql_fetch_assoc($query_userdata))  {


    if ($row_userdata[UserID] != $counter)  { 


       array_push($Ay_userids, $counter);

       $t_counter = $counter;

 
       $xy = $row_userdata[UserID] - $oldid - 1; 

       $counter = $counter + $xy; 


          if ($xy > 1)  { $t2 = $t_counter + 1;  array_push($Ay_userids, $t2); }

          if ($xy > 2)  { $t3 = $t_counter + 2;  array_push($Ay_userids, $t3); }

          if ($xy > 3)  { $t4 = $t_counter + 3;  array_push($Ay_userids, $t4); }

          if ($xy > 4)  { $t5 = $t_counter + 4;  array_push($Ay_userids, $t5); }

          if ($xy > 5)  { $t6 = $t_counter + 5;  array_push($Ay_userids, $t6); }

          if ($xy > 6)  { $t7 = $t_counter + 6;  array_push($Ay_userids, $t7); }

          if ($xy > 7)  { $t8 = $t_counter + 7;  array_push($Ay_userids, $t8); }

          if ($xy > 8)  { $t9 = $t_counter + 8;  array_push($Ay_userids, $t9); }

   

    }


    $counter++;

    $oldid = $row_userdata[UserID];
  
 }

  /*

  foreach ($Ay_userids as $allUids)  {

    echo"$allUids";

  }

  */

  $rt = count($Ay_userids); echo"Anzahl gel&ouml;schter User: $rt<br><br>";
 
 
  $query_p = mysql_query("SELECT user_id from posts ORDER by user_id");  
  
  while  ($row_p  =  mysql_fetch_assoc($query_p))  {


    if (in_array($row_p[user_id],$Ay_userids)) {

      echo"$row_p[user_id]<br>";
 
    }


  }


  $query_p = mysql_query("SELECT user_id from unterlagen");  
  
  while  ($row_p  =  mysql_fetch_assoc($query_p))  {


    if (in_array($row_p[user_id],$Ay_userids)) {

      echo"$row_p[user_id]<br>";
 
    }


  }


