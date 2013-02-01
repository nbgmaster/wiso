
<table cellpadding="0" cellspacing="1" style="width:100%;">


<?php   if ($c == "") { echo""; }  if ($c != "")  { ?>


<form action="index.php?c=<?php  echo"$c"; ?>" method="post">
    
<?php  } if ($f != "")  { ?>

<form action="index.php?f=<?php  echo"$f"; ?>" method="post"> 
   
<?php  } if ($row_posts["id"] != "")  { ?>

<form action="index.php?f=<?php  echo"$f"; ?>" method="post">

<?php  } ?>

  <tr>

    <td align="right">

    <table>

      <tr>

        <td align="right"><b>Gehe zu:</b>&nbsp;

        <select style="width:260px" ONCHANGE="location = this.options[this.selectedIndex].value;">

        <?php 
 
          $query_cats = mysql_query("SELECT * from $c_tblname ORDER by position");

          while ($row_cats = mysql_fetch_assoc($query_cats))  {  

                 echo"<option style=\"font-weight:bold;\" value=\"index.php?c=".$row_cats[id]."\"";

                 if ($row_cats[id] == $c)  { echo" selected"; }

                 echo"><b>".$row_cats["title"]."</b></option>";

                 $query_forums = mysql_query("SELECT * from $f_tblname WHERE cat = '$row_cats[id]' ORDER by position");
 
                 while ($row_forums = mysql_fetch_assoc($query_forums))  {
  
                        echo"<option value=\"index.php?f=".$row_forums[id]."\"";

                        if ($row_forums[id] == $f)  { echo" selected"; }

                        echo">--- ".$row_forums["forum"]."</option>";

                 }

          }

        ?>

        </select>

        </td>

       </tr>

    </table>

    </td>

  </tr>

</form>

</table>

<?php  if ($t == "" && $c == "")  { ?>

</td>

</tr>

</table>

<?php  } ?>
