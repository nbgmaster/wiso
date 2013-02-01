<?php 

// include("./templates/newsticker_top.php");

if ($do == "" && $action == "" && $f == "" && $t == "")  {


$count_ntIDs = 0;
$count_ntTopics = 0;

$sel_ntick = mysql_query("SELECT t, f from $newsticker_tblname ORDER by c, position");

while ($rw_ntick = mysql_fetch_assoc($sel_ntick))  {


$sel_ntick2 = mysql_query("SELECT f, threadname from $threads_tblname WHERE id = '$rw_ntick[t]'");

while ($rw_ntick2 = mysql_fetch_assoc($sel_ntick2))  {

/*

$sel_ntick3 = mysql_query("SELECT forum from $f_tblname WHERE id = '$rw_ntick2[f]'");

while ($rw_ntick3 = mysql_fetch_assoc($sel_ntick3))  {

$f_ntick = "$rw_ntick3[forum]";

}

*/


$Ay_ntIDs[$count_ntIDs] = $rw_ntick[t];
$Ay_ntTopics[$count_ntTopics] = $rw_ntick2[threadname];

$count_ntIDs++;
$count_ntTopics++;

}

}

$count_ntIDs = $count_ntIDs--;

$rand_var = array_rand ( $Ay_ntIDs,$count_ntIDs );

for ( $c_NT = 0; $c_NT < count ( $rand_var ); $c_NT++ )
{ 


$nt_id = $Ay_ntIDs[$rand_var[$c_NT]];
$nt_topic = $Ay_ntTopics[$rand_var[$c_NT]];

$marqX .= " <span style=\"color:#$link_hover_color;\"><b>+++</b></span> <a href=\"index.php?t=$nt_id\"><u>$nt_topic</u></a> ";

}

/*

    </td>

  </tr>

</table>

    </td>

  </tr>

</table>

<br>

*/

}

?>

