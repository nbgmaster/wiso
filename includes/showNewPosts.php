<?php 
  

 if ($_POST[changeview] != "")  {

     $qy_updateVW = "UPDATE $user_tblname SET view2 = '$_POST[changeview]' WHERE UserID = '$userdata_id'";     
 
     mysql_query($qy_updateVW) OR die(mysql_error());

     header ("Location:index.php?do=showNewPosts");

  }

  include("includes/navi_links.php"); 


  ?>

  <br>
 
  <table cellspacing="0" cellpadding="3" width="<?php  echo"$width"; ?>" style="border:1px solid #000000;height:20px">
  <form action="index.php?do=showNewPosts" method="post"><tr>
  <td class="tableb" style="border-right:0;">
  Hinweis: Beitr&auml;ge, die l&auml;nger als 21 Tage zur&uuml;ckliegen werden nicht mehr erfasst.
  </td><td class="tableb" align="right">


  <select onChange="this.form.submit();" name="changeview">

  <option value="1"
  <?php  if ($act_view2 == 1)  { echo" selected"; } ?>
  >nur meine Foren anzeigen</option>

  <option value="0"
  <?php  if ($act_view2 == 0)  { echo" selected"; } ?>
  >alle Foren anzeigen</option>

  </select>

  </td></tr>  </form></table>

  <?php 

  $crwres = mysql_query("SELECT COUNT( id ) AS check_rows from $threads_tblname WHERE rankingtime >= '$lastOnlineTime' LIMIT 1");

  $crwrow = mysql_fetch_row( $crwres );

  $check_rows = $crwrow[ 0 ];


  if ($check_rows > 0)  { 

  $add_tooold = $timestamp - 1814400; // Beitr&auml;ge, die l&auml;nger als 21 Tage zur&uuml;ckliegen werden nicht mehr erfasst 


  if ($lastOnlineTime < $add_tooold)  {

      $addnto = $add_tooold;

  }

  else  {

      $addnto = $lastOnlineTime;

  }


      $query_threads = mysql_query("SELECT threads.announce, threads.id, threads.c, threads.f, threads.threadname,threads.author_id,threads.hits,threads.rankingtime,threads.status
      from threads LEFT JOIN categorys ON(threads.c = categorys.id) LEFT JOIN forums ON(threads.f = forums.id)
      WHERE threads.rankingtime >= '$addnto' ORDER by categorys.position, forums.position,threads.announce DESC, threads.rankingtime DESC");

      include("showNewPosts2.php");
    
  }


  else {

      include("./templates/threads_none.php");

  }


  if ($no_entrys_view == "0")  {

      include("./templates/threads_none.php");

  }

  echo"<br>";


  include("templates/footer_folders_threads.php");


