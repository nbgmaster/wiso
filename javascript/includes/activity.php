<?php  

    if ($f == "" && $do == "")  { 
         
        $activity = "main";

    }


    if ($c != "" or $f != "" or $t != "")  {

        $activity = "$f";

    }


    if ($do == "inbox" or $do == "outbox" or $do == "newpm")  {

        $activity = "pmbox";

    }

    if ($do == "usercp")  {

        $activity = "usercp";

    }

    if ($do == "profile")  {

        $activity = "profile";

    }

    if ($do == "members")  {

        $activity = "members";

    }

    if ($do == "search")  {

        $activity = "search";

    }

    if ($do == "links")  {

        $activity = "links";

    }

    if ($do == "team")  {

        $activity = "team";

    }

    if ($do == "disclaimer")  {

        $activity = "disclaimer";

    }

    if ($do == "email")  {

        $activity = "email";

    } 

  $queryactivity = "UPDATE $user_tblname SET activity = '$activity' WHERE UserID = '$userdata_id'";     

  mysql_query($queryactivity) OR die(mysql_error());

