<?php 

//include("../dbCon.php");
include("../config.php");

?>

         <html><head><title>Bonuspunkte aktualisieren</title>

<?php 

         // Load:: Style Data

         if ($browser == "IE")  {

             include("../stylesheets/style_IE.php");

         }

         else if ($browser == "IE7")  {

             include("../stylesheets/style_IE7.php");
   
         }
         
         else  {

             include("../stylesheets/style_gecko.php");

         }

?>

<style type="text/css">

<?php  if ($template == "darkstyle") { ?>
body, td {
color:#fff;
background-color: #<?php echo"$cell_bg02";?>;
}
<?php  } else { ?>
body, td {
color:#fff;
background-color: #<?php echo"$cell_bg01";?>;
}
<?php  } ?>

.mouseoverInput { 
  background  : url(../images/templates/<?php  echo"$template"; ?>/hoverbgB.gif);
  cursor      : pointer;
  font-weight : bold;
  height      : 20px;
 font-size    : 12px; 
}

.mouseoutInput {  
  background  : url(../images/templates/<?php  echo"$template"; ?>/catpic.gif);
  cursor      : pointer;
  font-weight : bold;
  height      : 20px; 
 color        : #<?php  echo"$fontcolor_cat"; ?>;
 font-size    : 12px;
}

.buttons {
 border            : <?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>; 
 background-color  : #<?php  echo"$bgcolor_buttons";   ?>;
 color             : #<?php  echo"$fontcolor_cat"; ?>;
 font-size         : 12px;
 border            : <?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>; 
 background-image  : url(../images/templates/<?php  echo"$template/$img_catbg"; ?>);
 font-weight       : bold;
 height            : 20px; 

}

</style>

</head>

<?php 

if ($_GET[u_id] == "")  {


 if ($userdata_admin == "1")  {


  $credres = mysql_query("SELECT COUNT( id ) AS check_cred from $credits_tblname WHERE user = '$_GET[user_id]' && post = '$_GET[p_id]' LIMIT 1");
 
  $credrow = mysql_fetch_row( $credres );

  $check_cred = $credrow[ 0 ]; 


  if ($check_cred == "0")  {


      $qy_cred = mysql_query("SELECT credits from $user_tblname WHERE UserID = '$_GET[user_id]'");

      while ($rw_cred = mysql_fetch_assoc($qy_cred))  {

             $creditnumber = $rw_cred[credits];

      }

    //  if ($creditnumber != "10")  {

          $creditnumber++; $creditnumber++;

          if ($creditnumber > 10)  {

              $differ = $creditnumber - 10;

              //$creditnumber = 10;

          }

          $qy_cred   = "INSERT into $credits_tblname (user, post, datei, points) ";
          $qy_cred  .= "VALUES ('$_GET[user_id]', '$_GET[p_id]', '0', '2')";

          $res_cred  = @mysql_query($qy_cred) OR die(mysql_error());


          $upd_cred  = "UPDATE $user_tblname Set credits = '$creditnumber' WHERE UserID = '$_GET[user_id]'";
          $sql_cred  = mysql_query($upd_cred);

          echo"<body bgcolor=\"#$cell_bg01\"><center><br><table style=\"width:100%;\"><tr><td align=\"center\">";
          echo"<span style=\"font-size:15px;\"><b>Bonuspunkte wurde dem User gutgeschrieben!</b></span></td>";
          echo"</tr><tr><td align=\"center\"><br><br><br>";
          echo"<input type=\"button\" onclick=\"self.close()\" class=\"buttons\" value=\"Fenster schliessen\" style=\"width:120px;\" onmouseover=\"this.className='mouseoverInput';\" onmouseout=\"this.className='mouseoutInput';\">";
          echo"</td></tr></table>";
          echo"</center></body></html>";

  //    }
     /*
      else  {

          echo"<body bgcolor=\"#c0c0c0\"><center><br><table style=\"width:100%;\"><tr><td align=\"center\">";
          echo"<span style=\"font-size:15px;\"><b>Der User hat momentan 10 Punkte und kann deshalb vorerst keine weiteren Punkte erhalten!</b></span></td>";
          echo"</tr><tr><td align=\"center\"><br><br><br><input type=\"button\" onclick=\"self.close()\" class=\"buttons\" value=\"Fenster schliessen\" style=\"width:120px;\" onmouseover=\"this.className='mouseoverInput';\" onmouseout=\"this.className='mouseoutInput';\">";
          echo"</td></tr></table>";
          echo"</center></body></html>";

      }
       */
  }


  else  {

        echo"<body bgcolor=\"#$cell_bg01\"><center><br><table style=\"width:100%;\"><tr><td align=\"center\">";
        echo"<span style=\"font-size:15px;\"><b>Bonuspunkte bereits vergeben!</b></span></td>";
        echo"</tr><tr><td align=\"center\"><br><br><br><input type=\"button\" onclick=\"self.close()\" class=\"buttons\" value=\"Fenster schliessen\" style=\"width:120px;\" onmouseover=\"this.className='mouseoverInput';\" onmouseout=\"this.className='mouseoutInput';\">";
        echo"</td></tr></table>";
        echo"</center></body></html>";

  }

 }

}

else  {


 if ($userdata_admin == "1")  {


      $credres = mysql_query("SELECT COUNT( id ) AS check_cred from $credits_tblname WHERE user = '$_GET[user_id]' && datei = '$_GET[u_id]' LIMIT 1");
 
      $credrow = mysql_fetch_row( $credres );

      $check_cred = $credrow[ 0 ]; 


  if ($check_cred == "0")  {


      $qy_cred = mysql_query("SELECT credits from $user_tblname WHERE UserID = '$_GET[user_id]'");

      while ($rw_cred = mysql_fetch_assoc($qy_cred))  {

             $creditnumber = $rw_cred[credits];

      }

    //  if ($creditnumber != "10")  {

          $creditnumber = $creditnumber + $points;

          if ($creditnumber > "10")  {

              $differ = $creditnumber - 10;

              //$creditnumber = 10;

            //  $upd_cred11  = "UPDATE $user_tblname Set credits11 = '$differ' WHERE UserID = '$_GET[user_id]'";
          //    $sql_cred11  = mysql_query($upd_cred11);

          }

          $qy_cred   = "INSERT into $credits_tblname (user, post, datei, points) ";
          $qy_cred  .= "VALUES ('$_GET[user_id]', '0', '$_GET[u_id]', '$points')";

          $res_cred  = @mysql_query($qy_cred) OR die(mysql_error());


          $upd_cred  = "UPDATE $user_tblname Set credits = '$creditnumber' WHERE UserID = '$_GET[user_id]'";
          $sql_cred  = mysql_query($upd_cred);

          echo"<body bgcolor=\"#$cell_bg01\"><center><br><table style=\"width:100%\"><tr><td align=\"center\">";
          echo"<span style=\"font-size:15px;\"><b>Bonuspunkte wurden dem User gutgeschrieben!</b></span></td>";
          echo"</tr><tr><td align=\"center\"><br><br><br><input type=\"button\" onclick=\"self.close()\" class=\"buttons\" value=\"Fenster schliessen\" style=\"width:120px;\" onmouseover=\"this.className='mouseoverInput';\" onmouseout=\"this.className='mouseoutInput';\">";
          echo"</td></tr></table>";
          echo"</center></body></html>";

    //  }
      /*
      else  {

        echo"<body bgcolor=\"#c0c0c0\"><center><br><table style=\"width:100%\"><tr><td align=\"center\">";
        echo"<span style=\"font-size:15px;\"><b>Der User hat momentan 10 Punkte und kann deshalb vorerst keine weiteren Punkte erhalten!</b></span></td>";
        echo"</tr><tr><td align=\"center\"><br><br><br><input type=\"button\" onclick=\"self.close()\" class=\"buttons\" value=\"Fenster schliessen\" style=\"width:120px;\" onmouseover=\"this.className='mouseoverInput';\" onmouseout=\"this.className='mouseoutInput';\">";
        echo"</td></tr></table>";
        echo"</center></body></html>";

      }  */

  }

  else  {

        echo"<body bgcolor=\"#000\"><center><br><table style=\"width:100%\"><tr><td align=\"center\">";
        echo"<span style=\"font-size:15px;\"><b>Bonuspunkte bereits vergeben!</b></span></td>";
        echo"</tr><tr><td align=\"center\"><br><br><br><input type=\"button\" onclick=\"self.close()\" class=\"buttons\" value=\"Fenster schliessen\" style=\"width:120px;\" onmouseover=\"this.className='mouseoverInput';\" onmouseout=\"this.className='mouseoutInput';\">";
        echo"</td></tr></table>";
        echo"</center></body></html>";

  }

 }

}
