<?php

/* mySQL-Abfrage :: SELECT Baustein */

class EstablishDBSelect  {

  function selectDB($cols, $table, $condition, $limit, $template) {

     if (!$condition)  {

         $select = mysql_query("SELECT $cols from $table LIMIT $limit");

     }

     else  {

         $select = mysql_query("SELECT $cols from $table WHERE $condition LIMIT $limit");

     }

     $smarty = new Smarty;

     while ($result = mysql_fetch_assoc($select))  { 

            if ($result[formmailer] == 0)  {

                $smarty->assign('img_email_visibility', "visibility:hidden");

            }

            else  {

                $smarty->assign('img_email_visibility', "");

            }

            $smarty->assign('userid', $result[UserID]);

            $smarty->assign('username', $result[UserName]);

            $smarty->display($template);

     }
  
     mysql_free_result($select);

  }

}
