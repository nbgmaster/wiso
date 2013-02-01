<script type="text/javascript" src="../javascript/smilies.js" language="JavaScript1.2"></script>

<?php 
  
  include("../config.php");
  include("../stylesheets/style.php");

  include("../templates/allsmilies_top.php");

  $countrows  = "1";
  $countrows2 = "0";

  $query_smilies = mysql_query("SELECT * from $smilies_tblname Order by id");

  while ($row_smilies = mysql_fetch_assoc($query_smilies))  {  

         $query_smilies2 = mysql_query("SELECT * from $smilies_tblname WHERE smile_url = '$row_smilies[smile_url]' && id < '$row_smilies[id]'");
         $check_smile    = mysql_num_rows($query_smilies2);

         if ($check_smile == "0")  {

             $countrows2 = $countrows2 + 1;

         }

         if ($countrows2 > $smilies_showstart && $check_smile == "0")  {            

             include("../templates/allsmilies.php");

             $countrows = $countrows + 1;

         }             

  }

  include("../templates/allsmilies_bottom.php");
