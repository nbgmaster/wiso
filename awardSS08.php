<script type="text/javascript" src="javascript/dtabsA.js"></script>

<style type="text/css">

.tgfx {
        width: 200px;
        text-align: left;

}

.gfxB {
        text-align: left;
        border-width: 1px;

        border-color: #000;
        border-style: solid;
        height: 12px;
        font-size: 6px; /* needed for correct usage-bar display in IE-browsers */
}

</style>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="tableinborder">

  <tr>

        <td class="catbg" align="center">


        <span style="font-size:14px;"><b>Die wiwistud.de RANGLISTE der Bachelor-Lehrveranstaltungen</b></span>

   </td>

  </tr>

</table>


<table cellpadding="4" cellspacing="1" border="0" width="100%" class="tableinborder">

  <tr>

        <td class="tableb" align="justify">

        <span style="line-height:24px;font-size:12px;">
        Zur Ermittlung einer Rangliste der einzelnen <b>Bachelor-Lehrveranstaltungen</b> wurde eine Umfrage am Ende des <b>Sommersemesters 08</b>
        durchgef&uuml;hrt. Jede(r) Bachelor Student/in hatte dazu auf <u><a href="http://www.wiwistud.de">wiwistud.de</a></u> die M&ouml;glichkeit
        seine/ihre Veranstaltungen anhand verschiedener Kriterien zu bewerten (von 1,0 = sehr gut bis 5,0 = sehr schlecht).

        <br><br>

        Diese Rangliste soll <b>Bachelor-Student(inn)en der WiSo N&uuml;rnberg</b> helfen, die Qualit&auml;t verschiedener Veranstaltungen besser einsch&auml;tzen
        zu k&ouml;nnen und soll sie folglich auch bei der Wahl der eigenen Kurse unterst&uuml;tzen.
        <br> <br>

        <b>Kurse mit weniger als 3 Bewertungen werden nicht gelistet.</b>

        </span>

   </td>

  </tr>

</table>

<br>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
  <td align="center" valign="top">

<table align="center" border="0" cellpadding="0" cellspacing="0" width="350" height="250">
<tbody><tr>
  <td valign="top" height="21">
    <script type="text/javascript" src="javascript/dtabsB.js"></script>

  </td>
</tr>

<tr>
  <td class="pagestyle4" valign="top" height="100%">&nbsp;

     <table border="0" cellpadding="0" cellspacing="0">
     <tbody><tr>
       <td valign="top" width="10"><img src="images/ranking/blank.gif" width="10" height="1"></td>
       <td class="tabPage" valign="top" width="100%" height="100%">

         <div id="sem1" style="height: 100%; visibility: visible;" class="tabPage">
        <br>
         <table class="tableinborder" cellspacing="1" cellpadding="4"><tr><td class="tablea" style="font-size:12px;line-height:22px">
         <b>Wichtige Anmerkung:</b>
         Diese Veranstaltungen sind f&uuml;r das Wintersemester vorgesehen. Daher gab es im Sommersemester zumeist keine Vorlesungen oder &Uuml;bungen sondern lediglich
         Nachholklausuren im Angebot. <br>Deshalb sind einige Kriterien der vorliegenen Ergebnisse nur bedingt aussagekr&auml;ftig.
         </td></tr></table><br> <br>

<?php 


$position = 1;

$qy_awa_ss08   = mysql_query("SELECT * from awardss08 WHERE semester = '1' && schwerpunkt = 'ap' ORDER BY ((gesamtnote)/(counter1))");
$tot_s1 = mysql_num_rows($qy_awa_ss08);

while ($rw_ss08 = mysql_fetch_assoc($qy_awa_ss08))  {

include("includes/awaSS08_main.php");

 }

 ?>

         </div>

         <div id="sem2" style="height: 0%; visibility: hidden; display: none;" class="tabPage">
         <br>
<?php 

$position = 1;

$qy_awa_ss08   = mysql_query("SELECT * from awardss08 WHERE semester = '2' && schwerpunkt = 'ap' ORDER BY ((gesamtnote)/(counter1))");
$tot_s1 = mysql_num_rows($qy_awa_ss08);

while ($rw_ss08 = mysql_fetch_assoc($qy_awa_ss08))  {

include("includes/awaSS08_main.php");

 }

 ?>

         </div>

         <div id="sem3" style="height: 0%; visibility: hidden; display: none;" class="tabPage">
           <br>   <table class="tableinborder" cellspacing="1" cellpadding="4"><tr><td class="tablea" style="font-size:12px;line-height:22px">
         <b>Wichtige Anmerkung:</b>
         Diese Veranstaltungen sind f&uuml;r das Wintersemester vorgesehen. Daher gab es zumeist keine Vorlesungen sondern lediglich
         Nachschreibeklausuren im Angebot. Dies sollte bei der Beurteilung der vorliegenen Ergebnissen ber&uuml;cksichtigt werden.
         </td></tr></table><br><br>
<?php 

$position = 1;

$qy_awa_ss08   = mysql_query("SELECT * from awardss08 WHERE semester = '3' && schwerpunkt = 'bp' && id != '22' ORDER BY ((gesamtnote)/(counter1))");
$tot_s1 = mysql_num_rows($qy_awa_ss08);

while ($rw_ss08 = mysql_fetch_assoc($qy_awa_ss08))  {

include("includes/awaSS08_main.php");

 }

 ?>    </div>

         <div id="sem4" style="height: 0%; visibility: hidden; display: none;" class="tabPage">
         <br>

<?php 

$position = 1;

$qy_awa_ss08   = mysql_query("SELECT * from awardss08 WHERE semester = '4' && schwerpunkt = 'bp' ORDER BY ((gesamtnote)/(counter1))");
$tot_s1 = mysql_num_rows($qy_awa_ss08);

while ($rw_ss08 = mysql_fetch_assoc($qy_awa_ss08))  {

include("includes/awaSS08_main.php");

 }

 ?>
         </div>


         <div id="bwl" style="height: 0%; visibility: hidden; display: none;" class="tabPage">

<?php 

$position = 1;

$qy_awa_ss08   = mysql_query("SELECT * from awardss08 WHERE schwerpunkt = 'bwl' ORDER BY ((gesamtnote)/(counter1))");
$tot_s1 = mysql_num_rows($qy_awa_ss08);

while ($rw_ss08 = mysql_fetch_assoc($qy_awa_ss08))  {

include("includes/awaSS08_main.php");

 }

 ?>
         </div>


         <div id="vwl" style="height: 0%; visibility: hidden; display: none;" class="tabPage">

<?php 

$position = 1;

$qy_awa_ss08   = mysql_query("SELECT * from awardss08 WHERE schwerpunkt = 'vwl' ORDER BY ((gesamtnote)/(counter1))");
$tot_s1 = mysql_num_rows($qy_awa_ss08);

while ($rw_ss08 = mysql_fetch_assoc($qy_awa_ss08))  {

include("includes/awaSS08_main.php");

 }

 ?>
         </div>


         <div id="info" style="height: 0%; visibility: hidden; display: none;" class="tabPage">

<?php 

$position = 1;

$qy_awa_ss08   = mysql_query("SELECT * from awardss08 WHERE schwerpunkt = 'info' ORDER BY ((gesamtnote)/(counter1))");
$tot_s1 = mysql_num_rows($qy_awa_ss08);

while ($rw_ss08 = mysql_fetch_assoc($qy_awa_ss08))  {

include("includes/awaSS08_main.php");

 }

 ?>
         </div>


                  <div id="wipaed" style="height: 0%; visibility: hidden; display: none;" class="tabPage">

<?php 

$position = 1;

$qy_awa_ss08   = mysql_query("SELECT * from awardss08 WHERE schwerpunkt = 'paed' ORDER BY ((gesamtnote)/(counter1))");
$tot_s1 = mysql_num_rows($qy_awa_ss08);

while ($rw_ss08 = mysql_fetch_assoc($qy_awa_ss08))  {

include("includes/awaSS08_main.php");

 }

 ?>
         </div>
                    <?php  /*
                  <div id="int" style="height: 0%; visibility: hidden; display: none;" class="tabPage">

<?php 

$position = 1;

$qy_awa_ss08   = mysql_query("SELECT * from awardss08 WHERE schwerpunkt = 'int' ORDER BY ((gesamtnote)/(counter1))");
$tot_s1 = mysql_num_rows($qy_awa_ss08);

while ($rw_ss08 = mysql_fetch_assoc($qy_awa_ss08))  {

include("includes/awaSS08_main.php");

 }

 ?>
         </div>
              <?php  */ ?>

                  <div id="sonst" style="height: 0%; visibility: hidden; display: none;" class="tabPage">

<?php 

$position = 1;

$qy_awa_ss08   = mysql_query("SELECT * from awardss08 WHERE schwerpunkt = 'sonst' or id = '22' or id = '52' ORDER BY ((gesamtnote)/(counter1))");
$tot_s1 = mysql_num_rows($qy_awa_ss08);

while ($rw_ss08 = mysql_fetch_assoc($qy_awa_ss08))  {

include("includes/awaSS08_main.php");

 }

 ?>
         </div>

      </td>
       <td valign="top" width="10"><img src="images/ranking/blank.gif" width="10" height="1"></td>
     </tr>
     </tbody></table>

  </td>

</tr>
</tbody></table>

  </td>
</tr>
</tbody></table>

