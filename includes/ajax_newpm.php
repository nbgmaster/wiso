<?php 

  include('../config.php');

if ($userdata_tpl == "1")  {
?>

<style type="text/css">


.mouseover {
 background-color : #BE7400;
 cursor           : pointer;
}

.mouseout {
 background-color : #BABABA;
 cursor           : pointer;
}

.tableb {
 background-color : #<?php  echo"$cell_bg02"; ?>;
}

</style>

<?php     } else { ?>

<style type="text/css">


.mouseover {
 background-color : #ff0000;
 cursor           : pointer;
}

.mouseout {
 background-color : #2C2C2C;
 cursor           : pointer;
}

.tableb {
 background-color : #<?php  echo"$cell_bg02"; ?>;
}

</style>

<?php  }

  // Retrieve data from Query String

  $name = $_GET['name'];

  // Escape User Input to help prevent SQL Injection

  $name = mysql_real_escape_string($name);
 
  //build query

  $rowA = "0";

  if ($name != "")  { 

      $qu2res = mysql_query("SELECT COUNT( UserID ) AS rowB from users WHERE UserName LIKE '$name%' LIMIT 1");

      $qu2row = mysql_fetch_row( $qu2res );

      $rowB = $qu2row[ 0 ];

      $qu3res = mysql_query("SELECT COUNT( UserID ) AS rowC from users WHERE UserName = '$name' LIMIT 1");

      $qu3row = mysql_fetch_row( $qu3res );

      $rowC = $qu3row[ 0 ];

      $queryString .= "<table id=\"tbl_fill\" style=\"width:150px;bgcolor:#c0c0c0;border:1px solid #000000\" cellspacing=\"0\" cellpadding=\"4\">";

      $qures = mysql_query("SELECT UserName from users WHERE UserName LIKE '$name%'");

      $count_id = 1;

      while ($rwres = mysql_fetch_assoc($qures))  { 

             $tr_id = "tr_$count_id";
             $input_id = "input_$count_id";

             if ($rowB == "1")  { $FillName = "$rwres[UserName]"; }

             $queryString .= "<tr id=\"$tr_id\" value=\"$rwres[UserName]\" onclick=\"ReceiverFound('$rwres[UserName]')\" class=\"tableb\" onmouseover=\"this.className='mouseover';\" onmouseout=\"this.className='mouseout';\"><td><input type=\"hidden\" id=\"$input_id\" value=\"$rwres[UserName]\">$rwres[UserName]</td></tr>";

             $count_id++;

      }

      $queryString .= "</table>";

  }

  if ($rowB == "1")  {

  //    $queryString = "$FillName";  
 $queryString = "";    

  }

  echo "$queryString%%$rowB%%$FillName";
