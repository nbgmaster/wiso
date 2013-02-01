<?php header('Content-Type: application/rss+xml; charset=ISO-8859-1');
echo "<?php xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>";


  $timestamp = time();

  $datum = date("D, j F Y H:i:s +0200", $timestamp);

  ?>

<rss version="2.0">
<channel> 
    <title>wiwistud.de - Bachelorstudiengang Wirtschaftswissenschaften an der Universität Erlangen - Nürnberg</title>
    <link>http://www.wiwistud.de</link>
    <description>+++ Newsticker +++ Newsticker +++ Newsticker +++ Newsticker +++ Newsticker +++ Newsticker +++ Newsticker +++ Newsticker +++ Newsticker +++ Newsticker +++</description>
    <language>de-de</language>
    <pubDate><?php echo"$datum";?></pubDate>
    <lastBuildDate><?php echo"$datum";?></lastBuildDate>
    <docs></docs>
    <generator>Rss Feed Engine</generator>
    <managingEditor></managingEditor>
    <webMaster>stefan@wiwistud.de</webMaster>

<?php 

require('dbCon.php');

$count_ntIDs = 0;
$count_ntTopics = 0;

function cmp($a, $b)
{
    if ($a[0] == $b[0]) {
        return 0;
    }
    return ($a[0] > $b[0]) ? -1 : 1;
}

$sel_ntick = mysql_query("SELECT t, f from newsticker ORDER by c, position");

    while ($rw_ntick = mysql_fetch_assoc($sel_ntick))  {

           $sel_ntick2 = mysql_query("SELECT threads.id, threads.threadname, threads.f, posts.time from threads, posts WHERE threads.id = $rw_ntick[t] AND posts.t = threads.id ORDER by posts.time LIMIT 1");

           while ($rw_ntick2 = mysql_fetch_assoc($sel_ntick2))  {

                  $Ay_ntTime[$count_ntTopics][1] = $rw_ntick2[threadname];
                  $Ay_ntTime[$count_ntTopics][0] = $rw_ntick2[time];
                  $Ay_ntTime[$count_ntTopics][2] = $rw_ntick[t];

                  $count_ntIDs++;
                  $count_ntTopics++;

           }

    }

    usort($Ay_ntTime, "cmp");

    foreach( $Ay_ntTime as $host ) {

             $countX = 1;

             foreach( $host as $value ) {

                     if ($countX == 2)           $datum = date("D, j F Y H:i:s +0200", $value);
                     if ($countX == 1)           $threadi = $value;
                     if ($countX == 3)           $test="http://www.wiwistud.de/index.php?t=".$value;

                     $countX++;

             }

             ?>

             <item>
             <title><?php echo htmlspecialchars($threadi); ?></title>
             <guid><?php  echo $test; ?></guid>

             <link><?php  echo $test; ?></link>

             <description>
             </description>

             <pubDate><?php  echo $datum; ?></pubDate>
             </item>

             <?php 

    }

    mysql_free_result($result);
    mysql_close($dbh);

?>

</channel>
</rss>
