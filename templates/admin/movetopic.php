<form action="index.php?do=movetopic" method="post">

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

       <td align="center" class="cellbg">

       Thema verschieben

       </td>

     </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="tablea" width="50%">
    
    <b>

    Thema in dieses Forum verschieben:

    </b>

    </td>

    <td class="tableb" width="50%">

        <select name="move_to">

        <?php 
 
          $query_cats = mysql_query("SELECT * from $c_tblname ORDER by id");

          while ($row_cats = mysql_fetch_assoc($query_cats))  {  

                 echo"<option style=\"font-weight:bold;\" value=\"\">";

                 echo"<b>".$row_cats["title"]."*</b></option>";

                 $query_forums = mysql_query("SELECT * from $f_tblname WHERE cat = '$row_cats[id]' ORDER by id");
 
                 while ($row_forums = mysql_fetch_assoc($query_forums))  {
  
                        echo"<option value=\"".$row_forums[id]."\">";

                        echo"--- ".$row_forums["forum"]."</option>";

                 }

          }

        ?>

        </select>

        <br>
        <font class="small"> * Kann nicht in eine Kategorie verschoben werden</font>    

        </td>

  </tr>
    
</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

       <td align="center" class="tableb">

       <input type="hidden" name="adminoptions" value="movetopic">

       <input type="hidden" name="t" value="<?php  echo"$t"; ?>">

       <input type="submit" class="buttons" name="send_moveto_data" value="Thema verschieben" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

       </td>

     </tr>

  </form>

</table>