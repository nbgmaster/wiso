<?php 

  include("dbCon.php");


 if ($_POST[changeview] != "")  {

     $query_update = "UPDATE users SET view_shownewposts = '$_POST[changeview]' WHERE UserID = '1'";     
 
     mysql_query($query_update) OR die(mysql_error());

header ("Location:select.php");

  }



      $query_userdata = mysql_query("SELECT view_shownewposts from users WHERE UserID = '1'");

      while  ($row_userdata  =  mysql_fetch_assoc($query_userdata))  {

             $act_view = $row_userdata[view_shownewposts];          

 }  

?>

<form action="select.php" method="post">

<select onChange="this.form.submit();" name="changeview">

<option value="1"
<?php  if ($act_view == 1)  { echo" selected"; } ?>
>
nur meine Foren anzeigen
</option>

<option value="0"
<?php  if ($act_view == 0)  { echo" selected"; } ?>
>
alle Foren anzeigen
</option>

</select>

</form>



