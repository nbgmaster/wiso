<?php 
  
  $reg_step = "1";
  $formLink = "?do=register&step=2";


  if (isset($gender))  {

          $r_nickname = str_replace("<", "&lt;", $r_nickname);
          $r_nickname = str_replace(">", "&gt;", $r_nickname);
          $email = str_replace("<", "&lt;", $email);
          $email = str_replace(">", "&gt;", $email);
          $firstname = str_replace("<", "&lt;", $firstname);
          $firstname = str_replace(">", "&gt;", $firstname);
          $lastname = str_replace("<", "&lt;", $lastname);
          $lastname = str_replace(">", "&gt;", $lastname);

      $_SESSION["_Sre_nickname"]   = $r_nickname;
      $_SESSION["_Sre_email"]      = $email;
      $_SESSION["_Sre_password"]   = $r_password;
      $_SESSION["_Sre_gender"]     = $gender;
      $_SESSION["_Sre_firstname"]  = $firstname;
      $_SESSION["_Sre_lastname"]   = $lastname;
      $_SESSION["_Sre_wisostudent"]= $wisostudent;
      $_SESSION["_Sre_study"]      = $study;
      $_SESSION["_Sre_mstudy"]     = $mstudy;
      $_SESSION["_Sre_semester"]   = $semester;

      $reg_step = "2";
      $formLink = "?do=register&step=3";

  }

  if (isset($reg_TOstep3))  {

          $studivz = str_replace("<", "&lt;", $studivz);
          $studivz = str_replace(">", "&gt;", $studivz);
          $hometown = str_replace("<", "&lt;", $hometown);
          $hometown = str_replace(">", "&gt;", $hometown);
          $place = str_replace("<", "&lt;", $place);
          $place = str_replace(">", "&gt;", $place);
          $street = str_replace("<", "&lt;", $street);
          $street = str_replace(">", "&gt;", $street);
          $telefon = str_replace("<", "&lt;", $telefon);
          $telefon = str_replace(">", "&gt;", $telefon);
          $handy = str_replace("<", "&lt;", $handy);
          $handy = str_replace(">", "&gt;", $handy);
          $homepage = str_replace("<", "&lt;", $homepage);
          $homepage = str_replace(">", "&gt;", $homepage);
          $icq = str_replace("<", "&lt;", $icq);
          $icq = str_replace(">", "&gt;", $icq);
          $job = str_replace("<", "&lt;", $job);
          $job = str_replace(">", "&gt;", $job);
          $hobbys = str_replace("<", "&lt;", $hobbys);
          $hobbys = str_replace(">", "&gt;", $hobbys);


      $_SESSION["_Sre_birthday"]    = $birthday;
      $_SESSION["_Sre_birthmonth"]  = $birthmonth;
      $_SESSION["_Sre_birthyear"]   = $birthyear;
      $_SESSION["_Sre_hometown"]    = $hometown;
      $_SESSION["_Sre_place"]       = $place;
      $_SESSION["_Sre_street"]      = $street;
      $_SESSION["_Sre_telefon"]     = $telefon;

      $_SESSION["_Sre_handy"]     = $handy;
      $_SESSION["_Sre_homepage"]  = $homepage;
      $_SESSION["_Sre_studivz" ]  = $studivz;
      $_SESSION["_Sre_icq"]       = $icq;

      $_SESSION["_Sre_job"]       = $job;
      $_SESSION["_Sre_hobbys"]    = $hobbys;
      $_SESSION["_Sre_misc"]      = $misc;


      $reg_step = "3";
      $formLink = "?do=register&step=4";

  }

  if (isset($reg_back))  {

      $reg_step = "3";
      $formLink = "?do=register&step=4";

  }

  if (isset($reg_TOstep4))  {

      $_SESSION["_Sre_hide_email"]   = $hide_email;
      $_SESSION["_Sre_formmailer"]   = $formmailer;
      $_SESSION["_Sre_hide_user"]    = $hide_user;
      $_SESSION["_Sre_email_pm"]     = $email_pm;
      $_SESSION["_Sre_board_style"]  = $board_style;

      $reg_step = "4";
      $formLink = "?do=register&step=5";

  }

  if (isset($reg_TOstep5))  {

  if ($v_fid != "")  {

      $v_cou  = 0;    
      $v_cou2 = 0;
      $v_cid2[] = "";
      $v_cid4[] = "";

      foreach ($v_fid as $v_key => $v_fid2)  {

               $v_cid2[$v_cou] = $v_cid[$v_key];      
               $v_cou++;

      }


      foreach ($v_cid2 as $v_cid3)  {

               if (!in_array($v_cid3, $v_cid4) )  {

                   $v_cid4[$v_cou2] = $v_cid3;  
                   $v_cou2++;

               }

      }

      natsort($v_fid);
      natsort($v_cid4);

      $v_Cou1 = count($v_fid);
      $v_Cou2 = count($v_cid4);

      $v_Cou1x = "1";
      $v_Cou2x = "1";

      foreach ($v_fid as $v_fidDB)  {

               $v_fDB .= $v_fidDB;

               if ($v_Cou1 != $v_Cou1x)  {
       
                   $v_fDB .= ",";

               }

               $v_Cou1x++;

      }

      foreach ($v_cid4 as $v_cidDB)  {

               $v_cDB .= $v_cidDB;
     
               if ($v_Cou2 != $v_Cou2x)  {
        
                   $v_cDB .= ",";

               }

               $v_Cou2x++;

      }


      }

      else  {

          $v_cDB = ""; $v_fDB = "";

      }

      $_SESSION["_Sre_cDB"] = $v_cDB;
      $_SESSION["_Sre_fDB"] = $v_fDB;

      $reg_step = "5";
      $formLink = "?do=register&step=6";

  }


  if (isset($send_reg_data))  {          

      include("includes/create_member.php");

  }

  else  {

  if ($reg_step == "1")  { ?>

<script type="text/javascript" src="javascript/ajax.js" language="JavaScript1.2"></script>
<script type="text/javascript" src="javascript/ajax2.js" language="JavaScript1.2"></script>
<form onSubmit="ajaxFunction2();return false;" action="<?php echo"$formLink";?>" name="reg_form" method="post">
<?php  } else { ?>

<form action="<?php echo"$formLink";?>" name="reg_form" method="post">

<?php  } ?>
   

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="tableinborder">

              
  <tr>

    <td class="cellbg" align="left">

        <span class="big">

        <b>Registrierung</b>

        </span>

    </td>

  </tr>

</table>


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

  <tr>

    <?php  if ($reg_step == "1")  { 

    echo"<td class=\"hoverbg\">Schritt 1</td>";

    } else  { 

    echo"<td class=\"catbg\">Schritt 1</td>";

    } if ($reg_step == "2")  { 

    echo"<td class=\"hoverbg\">Schritt 2</td>";

    } else  { 

    echo"<td class=\"catbg\">Schritt 2</td>";

    } if ($reg_step == "3")  { 

    echo"<td class=\"hoverbg\">Schritt 3</td>";

    } else  { 

    echo"<td class=\"catbg\">Schritt 3</td>";

    } if ($reg_step == "4")  { 

    echo"<td class=\"hoverbg\">Schritt 4</td>";

    } else  { 

    echo"<td class=\"catbg\">Schritt 4</td>";

    } if ($reg_step == "5")  { 

    echo"<td class=\"hoverbg\">Schritt 5</td>";

    } else  { 

    echo"<td class=\"catbg\">Schritt 5</td>";

    }

    ?>

  </tr>

</table>

<br>

<?php  

  if ($reg_step == "1")  { 

      include("register_step1.php");

  }

  if ($reg_step == "2")  { 

      include("register_step2.php");

  }

  if ($reg_step == "3")  { 

      include("register_step3.php");

  }

  if ($reg_step == "4")  { 

      include("register_step4.php");

  }


  if ($reg_step == "5")  { 

      include("register_step5.php");

  }



}
