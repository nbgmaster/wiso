<?php 

  $previewpost = "$_POST[message]";
  $previewpost = stripslashes($previewpost);
  $previewpost = str_replace("[PHP]", "[PHP]<?php ", $previewpost);
  $previewpost = str_replace("[/PHP]", "?>[/PHP]", $previewpost);


  $str = trim($previewpost);

  include("./replace/show_posts.php");
  include("./replace/smilies.php");


  $main_message  = $str;

  if ($_POST[title] == "")  { $Ttitle = "$_POST[newtitle]"; $newtitle = $_POST[newtitle]; }

  else  { $Ttitle = "$_POST[title]"; $title = $_POST[title]; }

   $Ttitle = str_replace("<", "&lt;", $Ttitle);
   $Ttitle = str_replace(">", "&gt;", $Ttitle);



      $qy_userdataX = mysql_query("SELECT user_id from $posts_tblname WHERE id = '$p_id'");

      while  ($rw_userdataX  =  mysql_fetch_assoc($qy_userdataX))  {

              $xyz = $rw_userdataX[user_id];

      }


      if ($_POST[title] != "" or $xyz == "")  {

          $query_userdata3 = mysql_query("SELECT * from $user_tblname WHERE UserID = '$auto_logon_id' && UserPass = '$auto_logon_session'");

      } else {

          $query_userdata3 = mysql_query("SELECT * from $user_tblname WHERE UserID = '$xyz'");

      }

      while  ($row_userdata3  =  mysql_fetch_assoc($query_userdata3))  {

              $post_user_id         =  $row_userdata3["UserID"];             //  Data:: ID
              $post_user_name       =  $row_userdata3["UserName"];           //  Data:: Nickname
              $post_user_first      =  $row_userdata3["firstname"];          //  Data:: Vorname
              $post_user_last       =  $row_userdata3["lastname"];           //  Data:: Nachname
              $post_user_gender     =  $row_userdata3["gender"];             //  Data:: Gender
              $post_user_sem        =  $row_userdata3["semester"];           //  Data:: Semester
              $post_user_admin      =  $row_userdata3["admin"];              //  Data:: Admin
              $postnumbers_user     =  $row_userdata3["postnumbers"];        //  Data:: postnumbers
              $datum_reg            =  $row_userdata3["UserRegdate"];        //  Data:: User Regdate

              $user_signature       =  $row_userdata3["signature"];      
              $post_user_avatar     =  $row_userdata3["avatar"];

              $user_wisostudent     =  $row_userdata3["wisostudent"];           
              $user_studyt          =  $row_userdata3["study"];           
              $user_semester        =  $row_userdata3["semester"];      
              $user_studivz         =  $row_userdata3["studivz"];   

      }
 

  $datum_reg    =  date("d.m.Y",$datum_reg);


  $str = trim($user_signature);

  include("./replace/show_posts.php");  
  include("./replace/smilies.php");

  $user_signature  = $str;



  include("user_rank.php");

         if ($post_user_avatar == "")  {

             $avatar = "<br><br>";

         }

         else  { 

             $avatar = "<img src=\"avatars/$post_user_avatar\">";

         }




?>

  <table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
               
    <tr>

       <td align="left" class="cellbg" bgcolor="<?php  echo"#$cell_bg02"; ?>">

       <span style="font-size:13px"><b>Vorschau</b></span>
  
       </td>

    </tr>

  </table>



<table width="<?php  echo"$width"; ?>" cellpadding="0" cellspacing="1" class="tableinborder">
               
  <tr>
  
    <td width="180" valign="top" class="tablea">

    <table cellpadding="8" cellspacing="0">

      <tr>

        <td class="tablea" align="left">

        <a href="index.php?do=profile&user_id=<?php  echo"$post_user_id"; ?>">


        <font class="big"><b><?php  echo"$post_user_name"; ?></b></font></a>

<?php  if ($post_user_gender == "m")  { $gender_img = "male.gif"; } else  { $gender_img = "female.gif"; } ?>

        <img src="images/templates/<?php  echo"$template/$gender_img"; ?>">



        <br>

        <?php  

        if ($post_user_first != "")  { echo"($post_user_first"; }
        if ($post_user_last != "")   { echo" $post_user_last"; }
        if ($post_user_first != "")  { echo")<br>"; }

        ?>

        <br>

        <?php  echo"$current_stars<br>$current_rank<br>"; 


 if ($user_wisostudent == 1)  { ?>

<br>
            <b>

            <?php  if ($user_studyt == "bwl")  { echo"Schwerpunkt BWL"; } ?> 
            <?php  if ($user_studyt == "vwl")  { echo"Schwerpunkt VWL"; } ?> 
            <?php  if ($user_studyt == "info")  { echo"Wirtschaftsinformatik"; } ?> 
            <?php  if ($user_studyt == "paed")  { echo"Schwerpunkt P&auml;dagogik"; } ?> 
            <?php  if ($user_studyt == "int")  { echo"International Business"; } ?> 
            <?php  if ($user_studyt == "sozi")  { echo"Sozial&ouml;konomik"; } ?> 

            </b>
<br>

<?php  if ($post_user_sem > 0)  { echo"<b>$post_user_sem. Semester</b><br>"; }


}


         if ($avatar != "")  { 

        echo"<br>$avatar<br>"; 

        } ?>

        <br>

        <table cellpadding="0" cellspacing="0">

          <tr>

            <td align="left">

            <b>Dabei seit:</b>

            <?php  echo"$datum_reg";  ?>

            </td>

          </tr>

          <tr>

            <td align="left">

            <b>Beitr&auml;ge:</b> <?php  echo"$postnumbers_user"; ?>

            </td>

          </tr>

        </table>

        </td>

      </tr>

    </table>

    </td>

    <td class="tablea" valign="top">


    <a name="<?php  echo"".$row_posts["id"].""; ?>"></a>

    <table style="width:100%;border-bottom:1px solid <?php  echo"#$bordercolor"; ?>;" class="tableb">

      <tr>

        <td height="20">

        <?php  

       if(strlen($Ttitle) > 43) {   $Ttitle = substr($Ttitle,0,43).'...'; }

        echo"<b>$Ttitle</b>"; ?>

        </td>

      </tr>

    </table>

    <table cellpadding="2" style="width:100%;">

      <tr>

        <td align="left"><font class="big">
        <span style="line-height:20px;">
        <?php  

        echo"$main_message"; 

        ?>
        </span>
        </td>

      </tr>

      <tr>

        <td valign="bottom" align="left">

        <br>

        <?php   if ($user_signature != "" && $sig_disable == "0")  {  ?>

        <table cellspacing="0" cellpadding="0" style="width:100%;">

          <tr>
                                 
            <td style="line-height:15px;">_______________________<br>

            <?php  echo"$user_signature"; ?>

            </td>

          </tr>

        </table> 

        <?php  }  

        if ($user_signature != "" && $sig_disable == "0")  {  

        echo"<br><br>"; }

        ?>

        </td>

       </tr>

    </table>

    </td>

  </tr>

  <tr>

    <td class="tableb" align="left" style="height:25px;">

    <table cellspacing="0" cellpadding="0"><tr><td width="3"></td><td width="20" align="center">
<img src="images/templates/<?php  echo"$template"; ?>/posticon.gif"></td><td><?php  echo"$c_date, $c_time"; ?> Uhr
</td></tr></table>

    </td>

    <td class="tablea" align="left">

   <table cellspacing="0" cellpadding="0" style="width:100%"><tr><td>

    &nbsp;

    <?php  if ($user_studivz != "")  { ?>
    <img src="images/templates/<?php  echo"$template/"; ?>/studivz.gif" border="0">

    &nbsp;  
<?php  }  ?>    
   <img src="images/templates/<?php  echo"$template"; ?>/pn.gif" border="0"><?php  if ($userdata_id != "")  { ?></a><?php  } ?>
          &nbsp;
    <img src="images/templates/<?php  echo"$template"; ?>/search.gif" border="0"><?php  if ($userdata_id != "")  { ?></a><?php  } ?>
   
    </td>

    <td align="right" class="tablea">

    <img src="images/templates/<?php  echo"$template"; ?>/user_online.gif">&nbsp;

    </td></tr></table>

    </td>

  </tr>

</table> 

<br>
