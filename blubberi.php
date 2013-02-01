<?php
 set_time_limit  ( 0 );
include("config.php");

/*

 // $qy_NwP   = mysql_query("SELECT message from posts2 WHERE message REGEXP CONVERT(_utf8 \'www.nbg-master.de\wiso\' USING latin1)");

//$qy_NwP = 'SELECT message FROM `posts2` WHERE `message` REGEXP CONVERT(_utf8 \'www.nbg-master.de\wiso\' USING latin1) COLLATE latin1_german1_ci';

*/


//$qy_NwP   = mysql_query("SELECT id, message from posts2 WHERE MATCH (message) AGAINST ('www.nbg-master.de/wiso/' IN BOOLEAN MODE)");

//$qy_NwP   = mysql_query("SELECT id, message from posts2 WHERE MATCH (message) AGAINST ('www.nbg-master.de/wiso/' IN BOOLEAN MODE) WHERE message REGEXP //CONVERT(_utf8 \'www.nbg-master.de\wiso\' USING latin1) COLLATE latin1_german1_ci");

$qy_NwP   = mysql_query("SELECT id, message from posts");

echo mysql_num_rows($qy_NwP);

$count = 0;

$trans = array("www.nbg-master.de/wiso/" => "www.wiwistud.de/", "http://www.nbg-master.de/wiso/" => "http://www.wiwistud.de/", "http://www.nbg-master.de/wiso" => "http://www.wiwistud.de");

  while ($rw_NwP = mysql_fetch_assoc($qy_NwP))  { 

$count++;

//echo"$rw_NwP[id]<br> $rw_NwP[message]";


$rw_NwP[message] = strtr($rw_NwP[message], $trans);
$rw_NwP[message] = str_replace("nbg-master.de/wiso/", "wiwistud.de/", $rw_NwP[message]);
$rw_NwP[message] = str_replace("nbg-master.de/wiso", "wiwistud.de", $rw_NwP[message]);

$update_at  = "UPDATE posts Set message = '$rw_NwP[message]' WHERE id = '$rw_NwP[id]'";

$sql_at     = mysql_query($update_at);


} //echo $count;



//$update_at  = "UPDATE posts2 set message=replace(message,'www.nbg-master.de/wiso','www.wiwistud.de')";
//$sql_at     = mysql_query($update_at);
