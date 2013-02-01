<?php  
$marqX = "";

if ($marqX != "")  { ?>

    <table cellpadding="0" cellspacing="0" width="<?php  echo"$width"; ?>">
         
<tr>

<td class="tableb" style="padding-top:0px;padding-bottom:1px;height:13px;border:1px solid #000000;:1px solid #000000">

<table cellspacing="0" cellpadding="0">
<tr>
<td width="5"></td>
<td>

<script>

var marqueewidth=770;

var marqueeheight=14;

<?php  if ($browser == "IE" or $browser == "IE7")  { ?>

var marqueespeed=2;

<?php  } else { ?>

var marqueespeed=1;

<?php  } ?>

var marqueebgcolor="#<?php  echo"$cell_bg02"; ?>";

var pauseit=1;

var marqueecontent='<span style=\"line-height:14px;\"><?php echo"$marqX$marqX$marqX$marqXmarqX";?>';


marqueecontent += '<b><span style=\"color:#<?php  echo"$link_hover_color"; ?>\">+++</span></b></span>';


var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var iedom=document.all||document.getElementById
if (iedom)
document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100;left:-1000">'+marqueecontent+'</span>')
var actualwidth=''
var cross_marquee, ns_marquee

function populate(){
if (iedom){
cross_marquee=document.getElementById? document.getElementById("iemarquee") : document.all.iemarquee
cross_marquee.style.left=marqueewidth-770
cross_marquee.innerHTML=marqueecontent
actualwidth=document.all? cross_marquee.offsetWidth : document.getElementById("temp").offsetWidth
}
else if (document.layers){
ns_marquee=document.ns_marquee.document.ns_marquee2
ns_marquee.left=marqueewidth-770
ns_marquee.document.write(marqueecontent)
ns_marquee.document.close()
actualwidth=ns_marquee.document.width
}
lefttime=setInterval("scrollmarquee()",20)
}
window.onload=populate

function scrollmarquee(){
if (iedom){ 
if (parseInt(cross_marquee.style.left)>(actualwidth*(-1)-350))   // wann neu laden?  gecko
cross_marquee.style.left=parseInt(cross_marquee.style.left)-copyspeed
else
cross_marquee.style.left=marqueewidth-770

}
else if (document.layers){
if (ns_marquee.left>(actualwidth*(-1)-350))    // wann neu laden? IE
ns_marquee.left-=copyspeed
else
ns_marquee.left=marqueewidth-770
}
}

if (iedom||document.layers){
with (document){
document.write('<table border="0" cellspacing="0" cellpadding="0"><td>')
if (iedom){
write('<div style="position:relative;width:'+marqueewidth+';height:'+marqueeheight+';overflow:hidden">')
write('<div style="position:absolute;width:900;height:'+marqueeheight+';background-color:'+marqueebgcolor+'" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">')
write('<div id="iemarquee" style="position:absolute;left:0;top:0"></div>')
write('</div>')
}
else if (document.layers){
write('<ilayer width='+marqueewidth+' height='+marqueeheight+' name="ns_marquee" bgColor='+marqueebgcolor+'>')
write('<layer name="ns_marquee2" left=0 top=0 onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed"></layer>')
write('</ilayer>')
}
document.write('</td></table>')
}
}
</script>

</td></tr>
</table>

</td></tr>

</table>

<br>

<?php  } ?>

    <table cellpadding="0" cellspacing="0" width="<?php  echo"$width"; ?>">
     

     <tr>
   
       <td style="width:100%;">

       <table cellspacing="0" cellpadding="0" style="width:100%;">

         <tr>

     <td>

     <table cellpadding="0" cellspacing="1" class="tableinborder" style="width:100%;">

       <tr>

         <td class="catbg" style="height:19px;">

         <table cellspacing="0" cellpadding="0" style="width:100%" border="0">

           <tr>

             <td align="left">

             <font color="#<?php  echo"$fontcolor_cat"; ?>">&nbsp;<b>Die letzten 5 aktiven Themen</b></font>

             </td>

             <td width="126" align="left"><font color="#<?php  echo"$fontcolor_cat"; ?>"><b>Verfasser</b></font></td>

             <td width="69" align="left"><font color="#<?php  echo"$fontcolor_cat"; ?>"><b>vor...</b></font></td>

             <td width="69" align="right"><font color="#<?php  echo"$fontcolor_cat"; ?>"><b>Hits</b></font>&nbsp;</td>

           </tr>

         </table>
 
         </td>

      </tr> 

    </table>  

    <table cellpadding="0" cellspacing="0" style="width:100%;border:1px solid #<?php  echo"$bordercolor"; ?>;border-top:0px solid;">

      <tr>

        <td class="tableb" style="width:100%;">

        <table style="width:100%;" cellpadding="0" cellspacing="0">
