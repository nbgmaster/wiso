
function ReceiverFound(HisName)  { 

  var pmname  = document.getElementById('wrongDiv');

  var ajaxDisplay  = document.getElementById('newpm');

              document.getElementById('newpm_receiver').value = HisName;
              document.getElementById('newpm_receiver').focus(); 

              ajaxDisplay.innerHTML  = ''; 

              ajaxDisplay.style.display='none';

              document.getElementById('newpm_receiver').style.color = '';
              pmname.innerHTML  = ''; 
              pmname.style.display='none';

}


function FadeOff()  {

  var ajaxDisplay  = document.getElementById('newpm');

              ajaxDisplay.innerHTML  = ''; 

              ajaxDisplay.style.display='none';

}


function FadeOut()  {

tr_id_fade = "";

tbl_this_fade = document.getElementById("tbl_fill").getElementsByTagName("tr").length;

for (i_fade=1;i_fade<=tbl_this_fade;i_fade++)  {

act_fade = "tr_" + i_fade;
 
active_tr_fade = document.getElementById(act_fade).style.backgroundColor;


var rbg_tr_fade = "rgb(139, 139, 139)";

if (active_tr_fade == rbg_tr_fade)  { 

tr_id_fade = "tr_" + i_fade;

break;

}

}


document.getElementById(tr_id_fade).style.backgroundColor='';

}



function TasteGedrueckt (Ereignis) {


var goFurther = "on";


  var ajaxDisplay  = document.getElementById('newpm');

  var pmname  = document.getElementById('wrongDiv');

  if (!Ereignis)
    Ereignis = window.event;
  if (Ereignis.which) {
    Tastencode = Ereignis.which;
  } else if (Ereignis.keyCode) {
    Tastencode = Ereignis.keyCode;
  }

     if (Tastencode==27)  {  // backspace

              ajaxDisplay.innerHTML  = ''; 

              ajaxDisplay.style.display='none';

              pmname.style.display='block';

}

     if (Tastencode==9)  {  // tabulator

              document.bbform.title.focus(); 
return false;
}


  if (Tastencode==13)  {  // enter



tr_id_enter = "";

tbl_this_enter = document.getElementById("tbl_fill").getElementsByTagName("tr").length;

for (i_enter=1;i_enter<=tbl_this_enter;i_enter++)  {

act_enter = "tr_" + i_enter;
 
active_tr_enter = document.getElementById(act_enter).style.backgroundColor;


var navName = navigator.appName ;

if (navName == "Microsoft Internet Explorer")  {

var rbg_tr_enter = "rgb(139,139,139)";

} else if (navName == "Opera") {

var rbg_tr_enter = "#8b8b8b";

} else  {

var rbg_tr_enter = "rgb(139, 139, 139)";

}


if (active_tr_enter == rbg_tr_enter)  { 

tr_id_enter = i_enter;

break;

}

}

tr_id_enter = "input_" + tr_id_enter;

var enter_nick = document.getElementById(tr_id_enter).value;

document.getElementById('newpm_receiver').value = enter_nick;

              document.getElementById('newpm').innerHTML  = ''; 

              document.getElementById('newpm').style.display='none';

return false;

}	


}


document.onkeydown = TasteGedrueckt;


function ajaxNewPM()  { 


  var ajaxDisplay  = document.getElementById('newpm');

  var pmname  = document.getElementById('wrongDiv');


 // set autocomplete off
 // TODO: does not work in safari
 document.getElementById('newpm_receiver').setAttribute('autocomplete', 'off');



     if (Tastencode==38)  {  // up arrow



tr_id_up = "";

tbl_this_up = document.getElementById("tbl_fill").getElementsByTagName("tr").length;

for (i_up=1;i_up<=tbl_this_up;i_up++)  {

act_up = "tr_" + i_up;
 
active_tr_up = document.getElementById(act_up).style.backgroundColor;

var navName = navigator.appName ;

if (navName == "Microsoft Internet Explorer")  {

var rbg_tr_up = "rgb(139,139,139)";

} else if (navName == "Opera") {

var rbg_tr_up = "#8b8b8b";

} else  {

var rbg_tr_up = "rgb(139, 139, 139)";

}

if (active_tr_up == rbg_tr_up)  { 

tr_id_up = i_up;
tr_id_up -= 1;

tr_id2_up = act_up;

tr_id_up = "tr_" + tr_id_up; 

break;

}

}


if (tr_id_up != "")  { 

if (tr_id2_up == "tr_1")  {

tr_id3_up = "tr_" + tbl_this_up; 

document.getElementById(tr_id2_up).style.backgroundColor='';

document.getElementById(tr_id3_up).style.backgroundColor='rgb(139, 139, 139)';

} else  {

document.getElementById(tr_id2_up).style.backgroundColor='';

document.getElementById(tr_id_up).style.backgroundColor='rgb(139, 139, 139)';

}

}

else  {

tr_id_up = "tr_" + tbl_this_up;

document.getElementById(tr_id_up).style.backgroundColor='rgb(139, 139, 139)';

}

return false;
}


     if (Tastencode==40)  {  // down arrow

tr_id = "";

tbl_this = document.getElementById("tbl_fill").getElementsByTagName("tr").length;

for (i=1;i<=tbl_this;i++)  {

act = "tr_" + i;
 
active_tr = document.getElementById(act).style.backgroundColor;

var navName = navigator.appName ;

if (navName == "Microsoft Internet Explorer")  {

var rbg_tr = "rgb(139,139,139)";

} else if (navName == "Opera") {

var rbg_tr = "#8b8b8b";

} else {

var rbg_tr = "rgb(139, 139, 139)";

}

if (active_tr == rbg_tr)  {  

tr_id = i;
save_id = i;
tr_id++;

tr_id2 = act;

tr_id = "tr_" + tr_id; 

break;

}

}


if (tr_id == "")  {

tr_id = "tr_1";
document.getElementById(tr_id).style.backgroundColor='rgb(139, 139, 139)';

}
else if (save_id == tbl_this) {

document.getElementById(tr_id2).style.backgroundColor=''; // rgb(186, 186, 186)

document.getElementById("tr_1").style.backgroundColor='rgb(139, 139, 139)';

}  else  {

document.getElementById(tr_id2).style.backgroundColor=''; // rgb(186, 186, 186)

document.getElementById(tr_id).style.backgroundColor='rgb(139, 139, 139)';

}
return false;

}
	

  if (Tastencode==27)  {  // backspace

    ajaxDisplay.innerHTML  = ''; 

    ajaxDisplay.style.display='none';

    return false;

  }


  var ajaxRequest;  // The variable that makes Ajax possible!
	
  /* Create new Object : ajax */

  //Browser Support Code

  try  {

     // Opera 8.0+, Firefox, Safari

     ajaxRequest = new XMLHttpRequest();
 
  } 

  catch (e)  {

     // Internet Explorer Browsers

     try  {

	ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");

     } 

     catch (e)  {

	try  {

	   ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");

	} 

        catch (e)  {

	   // Something went wrong

	}
		
     }

  } 


  // Create a function that will receive data sent from the server


  ajaxRequest.onreadystatechange = function()  {

      /* if readyState (Server response) is complete ( = 4 ) */

      if (ajaxRequest.readyState == 4)  {

          if (ajaxRequest.responseText != '')  { 

	      var ergebnis = ajaxRequest.responseText;
	      var splitter = ergebnis.split("%%");

              if (splitter[1] == 1 && ajaxDisplay.innerHTML != "")  { 

if (Tastencode!=8)  {

              document.getElementById('newpm_receiver').value = splitter[2];
}
              document.getElementById('newpm_receiver').focus(); 

              ajaxDisplay.innerHTML  = ''; 
              ajaxDisplay.style.display='none'; var xyz = 1;

              document.getElementById('newpm_receiver').style.color = '';
              pmname.innerHTML  = ''; 
              pmname.style.display='none';

              } 

              else  {

              ajaxDisplay.style.display='block';
              ajaxDisplay.innerHTML = splitter[0];
              document.bbform.newpm_receiver.focus(); 

              }

          }

          else  {

              ajaxDisplay.innerHTML  = ''; 

              ajaxDisplay.style.display='none';

          }


      }


  }



  var name = document.getElementById('newpm_receiver').value;


  var queryString = "?name=" + name;

  ajaxRequest.open("GET", "./includes/ajax_newpm.php" + queryString, true);
  ajaxRequest.send(null);


}
