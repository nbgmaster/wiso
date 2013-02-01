<?php 

if ($pm_disable == "0")  {


    $proof_limit = "true";

    // Check PM Numbers Limit

    $query_messages  = mysql_query("SELECT * from $pm_in_tblname WHERE receiver_id = '$user_id'");  
 
    $message_numbers = mysql_num_rows($query_messages);

    if ($message_numbers >= $max_pm_inbox)  {

        $text01 = "Senden nicht möglich! <br>Der Posteingang des Empfängers ist voll!";

        $link   = "javascript:history.back();";

        include("templates/refresh.php");

        $proof_limit = "false";

    }
  
    $query_messages2  = mysql_query("SELECT * from $pm_out_tblname WHERE sender_id = '$userdata_id'");
  
    $message_numbers2 = mysql_num_rows($query_messages2);

    if ($message_numbers2 >= $max_pm_outbox)  {

        $text01 = "Ihr Postausgang ist voll!<br> Löschen Sie erst einige Nachrichten!";

        $link   = "index.php?do=outbox";

        include("templates/refresh.php");

        $proof_limit = "false";

    }

    $query_ignorer  = mysql_query("SELECT * from $buddylist_tblname WHERE friendid = '$userdata_id' && userid = '$user_id' && function = 'ignore'");  
 
    $check_ignorer = mysql_num_rows($query_ignorer);

    if ($check_ignorer != "0" or $check_ignorer != "")  { 

        $text01 = "Der User hat dich auf seiner Ignorierliste!<br> Versendnung nicht möglich!";

        $link   = "javascript:history.back();";

        include("templates/refresh.php");

        $proof_limit = "false";

    }

    // Write new PM

    if ($proof_limit == "true")  {

        $query_user_id = mysql_query("SELECT * from $user_tblname WHERE UserID = '$user_id'");
  
        while ($row_user_id  =  mysql_fetch_assoc($query_user_id))  {


               if ($a_id != "")  {

                   $query_a_id = mysql_query("SELECT * from $pm_in_tblname WHERE id = '$a_id'");
  
                   while ($row_a_id  =  mysql_fetch_assoc($query_a_id))  {

                          $title   = "Re: $row_a_id[title]";
                          $message = "-------- Original-Nachricht --------\n$row_a_id[message]";

                    }

               }
  
               include("templates/newpm_top.php"); 

               include("reply.php");

        }

    }

  }

  else  {

      $text01 = "Modul zur Zeit deaktiviert!";

      $link   = "javascript:history.back();";

      include("templates/refresh.php");
 
  }