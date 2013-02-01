<?php



  include("dbCon.php");







  echo"Anzahl Threadleichen: <br><br>";





  $query_p = mysql_query("SELECT id from threads");  

  

  while  ($row_p  =  mysql_fetch_assoc($query_p))  {



     $query_p2 = mysql_query("SELECT id,t from posts WHERE t = '$row_p[id]'");  

  

     $xyz = mysql_num_rows($query_p2); echo"$xyz<br>";



     if ($xyz == 0)  {  echo"$row_p[id]<br>"; }



  }



  /*





  $query_p = mysql_query("SELECT t from polls");  

  

  while  ($row_p  =  mysql_fetch_assoc($query_p))  {



     $query_p2 = mysql_query("SELECT id, t from threads WHERE id = '$row_p[t]'");  

  

     $xyz = mysql_num_rows($query_p2);



     if ($xyz == 0)  {  echo"$row_p[t]<br>"; }



  }





  $query_p = mysql_query("SELECT t from posts");  

  

  while  ($row_p  =  mysql_fetch_assoc($query_p))  {



     $query_p2 = mysql_query("SELECT id from threads WHERE id = '$row_p[t]'");  

  

     $xyz = mysql_num_rows($query_p2);



     if ($xyz == 0)  {  echo"$row_p[t]<br>"; }



  }





  $query_p = mysql_query("SELECT poll_id from poll_votes");  

  

  while  ($row_p  =  mysql_fetch_assoc($query_p))  {



     $query_p2 = mysql_query("SELECT id from polls WHERE id = '$row_p[poll_id]'");  

  

     $xyz = mysql_num_rows($query_p2);



     if ($xyz == 0)  {  echo"$row_p[poll_id]<br>"; }



  }



  */