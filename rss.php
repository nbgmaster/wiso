<?php header('Content-Type: application/rss+xml; charset=ISO-8859-1');
echo "<?php xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>";


  $timestamp = time();

  $datum = date("D, j F Y H:i:s +0200", $timestamp);

  ?>

<rss version="2.0">
<channel> 
    <title>wiwistud.de - Bachelorstudiengang Wirtschaftswissenschaften an der Universit&auml;t Erlangen - N&uuml;rnberg</title>
    <link>http://www.wiwistud.de</link>
    <description>Die letzten 10 aktiven Themen im Forum</description>
    <language>de-de</language>
    <pubDate><?php echo"$datum";?></pubDate>
    <lastBuildDate><?php echo"$datum";?></lastBuildDate>
    <docs></docs>
    <generator>Rss Feed Engine</generator>
    <managingEditor></managingEditor>
    <webMaster>stefan@wiwistud.de</webMaster>

<?php 

require('dbCon.php');

$SqlSelect = "SELECT id, rankingtime, threadname, f FROM threads order by rankingtime DESC LIMIT 10";
    $result = mysql_query($SqlSelect);

    if (!$result)    {        die('Invalid query: ' . mysql_error());    }
    
    while ($row = mysql_fetch_assoc($result))    {

  $datum = date("D, j F Y H:i:s +0200", $row['rankingtime']);

  $SqlSelect2 = "SELECT id, message, user_id FROM posts WHERE t = '$row[id]' ORDER by time DESC LIMIT 1";
      $result2 = mysql_query($SqlSelect2);
      while ($row2 = mysql_fetch_assoc($result2))    {
           $post = $row2[message];   $pid = $row2[id];    $uid = $row2[user_id];
      }

        $SqlSelect3 = "SELECT forum FROM forums WHERE id = '$row[f]'";
      $result3 = mysql_query($SqlSelect3);
      while ($row3 = mysql_fetch_assoc($result3))    {
           $forum = $row3[forum];
               }

                 $SqlSelect4 = "SELECT UserName FROM users WHERE UserID = '$uid'";
      $result4 = mysql_query($SqlSelect4);
      while ($row4 = mysql_fetch_assoc($result4))    {
           $user = $row4[UserName];
      }

        $query_admin_config = mysql_query("SELECT * from admin_config LIMIT 1");

  while  ($row_admin_config  =  mysql_fetch_assoc($query_admin_config))  {

          $postsperpage          =  $row_admin_config["postsperpage"];        // Row:: Posts

  }

                $ponu2res = mysql_query("SELECT COUNT( id ) AS post_numbers3 from posts WHERE t = '$row[id]' LIMIT 1");

                $ponu2row = mysql_fetch_row( $ponu2res );

                $post_numbers3 = $ponu2row[ 0 ];

                $output2 = $post_numbers3 / $postsperpage;

                $output2 = floor($output2);

                $output2++;


                if ($output2 == "1")  {

                          $test = "http://www.wiwistud.de/index.php?t=".$row[id]."#".$pid;
                }

                else  {

                $test = "http://www.wiwistud.de/index.php?t=".$row[id]."&amp;page=".$output2."#".$pid;

                }


  $str = "$post";

         for ($count_quote=0;$count_quote<=20;$count_quote++)  {

            $str = preg_replace('#\[QUOTE=(.*)\](.*)\[/QUOTE\]#Uis',
            '--- \2 [Zitat von \1] ---',
            $str);

            $str = preg_replace('#\[QUOTE](.*)\[/QUOTE\]#Uis',
            '--- \2 [Zitat] ---',
            $str);

       }

              $str = preg_replace('=\[IMG\](.*)\[/IMG\]=Uis',
                            '\1 [Bild]',
                            $str);

       $str = preg_replace('#\[COLOR=(.*)\](.*)\[/COLOR\]#Uis',
                            '\2',
                            $str);

       $str = preg_replace('#\[SIZE=(.*)\](.*)\[/SIZE\]#Uis',
                            '\2',
                            $str);

       $str = preg_replace('=\[CENTER\](.*)\[/CENTER\]=Uis',
                            '\1',
                            $str);


       $str = preg_replace('=\[B\](.*)\[/B\]=Uis',
                            '\1',
                            $str);

       $str = preg_replace('=\[I\](.*)\[/I\]=Uis',
                            '\1',
                            $str);


       $str = preg_replace('=\[U\](.*)\[/U\]=Uis',
                            '\1',
                            $str);



       $str = preg_replace('#\[URL=(.*)\](.*)\[/URL\]#Uis',
                            '\2',
                            $str);


       $str = preg_replace('=\[URL\](.*)\[/URL\]=Uis',
                            '\1',
                            $str);

   /*
     $str = str_replace("&", "&amp;", $str);
     $str = str_replace("&auml;", "&auml;", $str);
     $str = str_replace("&Auml;", "&Auml;", $str);
     $str = str_replace("&ouml;", "&ouml;", $str);
     $str = str_replace("&ouml;", "&Ouml;", $str);
     $str = str_replace("&uuml;", "&uuml;", $str);
     $str = str_replace("&Uuml;", "&Uuml;", $str);
     $str = str_replace("\"", "&quot;", $str);
     $str = str_replace("<", "&lt;", $str);
     $str = str_replace(">", "&gt;", $str);

     $threadi = str_replace("&", "&amp;", $threadi);
     $threadi = str_replace("&auml;", "&auml;", $threadi);
     $threadi = str_replace("&Auml;", "&Auml;", $threadi);
     $threadi = str_replace("&ouml;", "&ouml;", $threadi);
     $threadi = str_replace("&ouml;", "&Ouml;", $threadi);
     $threadi = str_replace("&uuml;", "&uuml;", $threadi);
     $threadi = str_replace("&Uuml;", "&Uuml;", $threadi);
     $threadi = str_replace("<", "&lt;", $threadi);
     $threadi = str_replace(">", "&gt;", $threadi);

   //  $forum = str_replace("\"", "&quot;", $forum);
     $forum = str_replace("<", "&lt;", $forum);
     $forum = str_replace(">", "&gt;", $forum);
     $forum = str_replace("&", "&amp;", $forum);
     $forum = str_replace("&auml;", "&auml;", $forum);
     $forum = str_replace("&Auml;", "&Auml;", $forum);
     $forum = str_replace("&ouml;", "&ouml;", $forum);
     $forum = str_replace("&ouml;", "&Ouml;", $forum);
     $forum = str_replace("&uuml;", "&uuml;", $forum);
     $forum = str_replace("&Uuml;", "&Uuml;", $forum);
 //    $forum = str_replace("\"", "&quot;", $forum);
     $forum = str_replace("<", "&lt;", $forum);
     $forum = str_replace(">", "&gt;", $forum);
  */
?>

    <item>
    <title><?php echo htmlspecialchars($row['threadname']); ?> [<?php echo htmlspecialchars($forum); ?>]</title>
<guid><?php  echo $test; ?></guid>

<link><?php  echo $test; ?></link>


    <description>
    <?php  echo htmlspecialchars($str); ?>
    (<?php  echo $user; ?>)
    </description>

    <pubDate><?php echo"$datum";?></pubDate>
    </item>


<?php 
    }
mysql_free_result($result);
mysql_close($dbh);


?>

</channel>
</rss>
