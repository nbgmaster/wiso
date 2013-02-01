<?php

//UPDATE credits SET points = '1' WHERE post > 0

//UPDATE credits SET points = '2' WHERE datei > 0

   include("config.php");

    /*
      $qy_cred = mysql_query("SELECT * from credits");

      while ($rw_cred = mysql_fetch_assoc($qy_cred))  {

            if ($rw_cred[post]  > 0)  {

            $qy_cred2 = mysql_query("SELECT * from posts WHERE id = '$rw_cred[post]'");

            $treffer = mysql_num_rows($qy_cred2);

            if ($treffer != 1)  { $AyP[] = $rw_cred[post]; }

            }

            if ($rw_cred[datei]  > 0)  {


            $qy_cred3 = mysql_query("SELECT * from unterlagen WHERE id = '$rw_cred[datei]'");

            $treffer2 = mysql_num_rows($qy_cred3);

            if ($treffer2 != 1)  { $AyU[] = $rw_cred[datei]; }

            }

   }
   ?>

   Posts: <?php print_r($AyP); ?>
   <br>
         Unterlagen: <?php print_r($AyU); ?>

         */

  $upd_c  = "UPDATE $user_tblname Set semester = semester + 1";
  $sql_c  = mysql_query($upd_c);
