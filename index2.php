 <?php 

 /*


$show_log = mysql_query("SELECT UserName FROM users");

while($row = mysql_fetch_object($show_log)){

echo $row->UserName;

}

*/



    if ($userdata_admin == "1" && $board_disable == "1")  {

        $boardD = 1;

        $board_disable = 0;

    }


    if ($board_disable == "1")  {

        $update_profile = "1";
        $update_award   = "1";

    }

    $smilies_direction="images/templates/$template/smiles/";


    // Load:: Header


    if ($browser == "IE")  {

        include("templates/header_new.php");

    }
        
    else if ($browser == "IE7")  {

             include("templates/header_new.php");
   
    }

    else  {

        include("templates/header_new.php");

    }


    // Load:: Alert Message

    if ($boardD == "1" && $userdata_admin == "1")  {

        $alert_msg = "Achtung: F&uuml;r G&auml;ste & Mitglieder ist das Board zur Zeit deaktiviert!";

        echo"<font size=\"2\"><b>$alert_msg</b></font><br><br>";

    }


    // Load:: Stats & Newsticker

    if ($action == "" && $f == "" && $t == "" && $do == "")  {

        if ($board_disable == "0" or $userdata_admin == "1")  {

            if ($c == "" && $update_award == "1" && $update_profile == "1" && $userdata_id != "")  {

                //include("includes/newsticker.php");

            }

            if ($stats_enable == "1" && $c == "" && $update_award == "1" && $update_profile == "1" && $userdata_id != "")  {

                include("includes/stats_top.php");

            }

        }

    }

    // Load:: Mainframe
 
    if ($hidecat != "" or $showcat != "")  {

        include("includes/hidecat.php");

    }

    if ($action == "" && $userdata_id == "" or $action == "" && $update_profile == "1" && $update_award == "1" && $userdata_id != "" && $auto_logon_id != "" && $auto_logon_session != "")  {

        // Check:: Access Board

        if ($board_disable == "0" or $board_disable == "1" && $userdata_admin == "1")  {

            $proof_permission = "0";

            if ($do == "" && $p_boardaccess == "1")  {

                include("forum.php"); $proof_permission = "1";
                 
            }

            else  {

                if ($do == "newtopic" && $p_postaccess == "1" or $do == "edit" && $p_postaccess == "1")  {

                    include("reply.php"); $proof_permission = "1";
 
                }

                if ($do == "reply" && $p_postaccess == "1")  {

                    include("reply.php");  $proof_permission = "1";

                }

                if ($do == "post" && $p_postaccess == "1")  {

                    include("post.php"); $proof_permission = "1";

                }

                if ($do == "inbox" && $p_pmaccess == "1" or $do == "outbox" && $auto_logon_id != "" && $auto_logon_session != "" && $userdata_id != "" && $userdata_status == "1" && $p_pmaccess == "1")  {

                    include("pmbox.php"); $proof_permission = "1";

                }

                if ($do == "usercp" && $auto_logon_id != "" && $auto_logon_session != "" && $userdata_id != "" && $userdata_status == "1")  {

                    include("usercp.php"); $proof_permission = "1";

                }

                if ($do == "profile" && $p_profileaccess == "1")  {

                    include("profile.php"); $proof_permission = "1";

                }

                if ($do == "members" && $p_memberaccess == "1")  {

                    if ($sec == "search")  {

                        include("templates/membersearch.php");

                    } else {

                        include("members.php");

                    }

                    $proof_permission = "1";

                }

                if ($do == "search" && $p_searchaccess == "1")  {

                    include("search.php"); $proof_permission = "1";

                }

                if ($do == "showNewPosts" && $userdata_name != "")  {

                    include("includes/showNewPosts.php"); $proof_permission = "1";

                }

                if ($do == "admin" && $userdata_admin == "1")  {

                    include("admin.php");  $proof_permission = "1";

                }

                if ($do == "activate_user")  {

                    include("includes/activate_user.php"); $proof_permission = "1";

                }

                if ($do == "activate_newpw")  {

                    include("includes/activate_newpw.php"); $proof_permission = "1";

                }

                if ($do == "database" && $userdata_id != "")       {

                    include("includes/database.php"); $proof_permission = "1";

                }

                if ($do == "market" && $userdata_id != "")       {

                    include("market/index.php"); $proof_permission = "1";

                }


                if ($do == "links" && $userdata_id != "")       {  include("templates/links.php"); $proof_permission = "1";  }

                if ($do == "principles" or $do == "guidelines")  {  include("templates/principles.php");  $proof_permission = "1";  }

                if ($do == "ranking")        {  include("award.php");  $proof_permission = "1";  }

                if ($do == "team")        {  include("templates/team_main.php");  $proof_permission = "1";  }

                if ($do == "faq")         {  include("templates/faq.php");  $proof_permission = "1";  }

                //if ($do == "disclaimer")  {  include("disclaimer.php");  $proof_permission = "1";  }

                if ($do == "register")    {  include("register.php"); $proof_permission = "1";  }

                if ($do == "markread")    {  include("includes/markread.php"); $proof_permission = "1";  }

                if ($do == "movetopic")   {  include("admin/adminoptions.php"); $proof_permission = "1";   }

                if ($do == "edittopic")   {  include("admin/adminoptions.php"); $proof_permission = "1";   }

                if ($do == "delete")      {  include("includes/delete.php"); $proof_permission = "1";   }

                if ($do == "newpm")       {  include("includes/newpm.php"); $proof_permission = "1";   }

                if ($do == "vote")        {  include("includes/vote.php"); $proof_permission = "1";   }
     
                if ($do == "email")       {  include("includes/email.php"); $proof_permission = "1";   }

                if ($do == "addbuddy")    {  include("includes/addbuddy.php"); $proof_permission = "1";   }

                if ($do == "showCredits")    {  include("includes/showCredits.php"); $proof_permission = "1";   }
 
                if ($do == "rate" && $userdata_admin == "1")    {  include("includes/rate.php"); $proof_permission = "1";   }

                if ($proof_permission == "0")  { 

                    if ($do == "reg_success")    {  

                        include("templates/reg_success.php");

                    }

                    else if ($do == "activate_user")  {

                      include("$do.php");
                       
                    }

                    else if ($do == "impressum")  {

                         include("templates/impressum.php"); 

                    }

                    else  {
 
                      if ($userdata_id == "")  { include("forum.php"); } else 

                      include("templates/no_permission.php");

                    }

                }
 
            }

        }

 
        if ($board_disable == "1" && $userdata_admin != "1")  {

            include("templates/board_disabled.php");

        }

    
    }

    else  {

        if ($action == "")  {

            include("includes/update.php");

        }

    }

    if ($action == "login")  {

        include("login/loginM.php");
                
    }

    if ($action == "logout")  {
                   
        include("login/logoutM.php");

    }


  // Load:: Footer

  include("templates/footer.php"); 

