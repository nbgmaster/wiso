<?php 


$tp_F .= "<tr>";

$tp_F .= "<td class=\"tablea\" width=\"30\" align=\"center\">";


$tp_F .= "<img src=\"images/templates/$template/$img_newposts\">";


$tp_F .= "</td>";


$tp_F .= "<td class=\"tableb\" align=\"left\" onclick=\"location.href='index.php?f=$rwF[id]';\" onmouseover=\"this.className='mouseover';\" onmouseout=\"this.className='mouseout';\">";

     
$tp_F .= "<font class=\"title\"><b>$rwF[forum]</b></font>";

$tp_F .= "<br>$rwF[description]";

     
$tp_F .= "</td>";


/*

$tp_F .= "<td class=\"tablea\" align=\"center\" width=\"90\">";


if ($mods != "")  {

    foreach($mods as $GeTmD)  {
     
        foreach($GeTmD as $key => $value)  {
 
          if ($key == "id")  {

              $tp_F .= "&nbsp;<a href=\"index.php?do=profile&user_id=$value\">";

          }

          if ($key == "name")  { 

              $tp_F .= "$value</a>, "; 

          }

        }

    }  

}

$tp_F .= "</td>";

*/

           
$tp_F .= "<td class=\"tablea\" align=\"center\" width=\"50\">$topic</td>";


$tp_F .= "<td class=\"tablea\" align=\"center\" width=\"50\">$article</td>";

if ($last_article2 != "0")  { 

$tp_F .= "<td class=\"tableb\" align=\"left\" width=\"260\" onclick=\"location.href='$show_link';\" onmouseover=\"this.className='mouseover';\" onmouseout=\"this.className='mouseout';\">";

}

else  {

$tp_F .= "<td class=\"tableb\" align=\"left\" width=\"260\" onmouseover=\"this.className='mouseover';\" onmouseout=\"this.className='mouseout';\">";

}

if($last_article2 == "0")  { 
    
$tp_F .= "<center>noch keine Beitr&auml;ge vorhanden</center>";
                    
} else {

$tp_F .= "<a href=\"$show_link\" class=\"mouseo\">";

$tp_F .= "<div class=\"divIcon\"><img src=\"images/templates/$template/lastpost.png\" border=\"0\"></div></a>";

// if (strlen($lastth) > 24) $lastth = substr($lastth,0,21).'...';

$tp_F .= "&nbsp;";

$tp_F .= "<u>$lastth</u><br>&nbsp;von ";


    $tp_F .= "<b>$last_user_name</b>";



   $tp_F .= "&nbsp;";



$tp_F .= "($current_date, $current_time)";

    } 

$tp_F .= "</td>";


$tp_F .= "</tr>";
