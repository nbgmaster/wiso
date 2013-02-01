
function emoticon(text) {
var txtarea = document.bbform.message;
text = ' ' + text + ' ';
if (txtarea.createTextRange && txtarea.caretPos) {
var caretPos = txtarea.caretPos;
caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? caretPos.text + text + ' ' : caretPos.text + text;
txtarea.focus();
} else {
txtarea.value  += text;
txtarea.focus();
}
}

function ajaxNewPM3()  { 

  var emp_array = document.bbform.newpm_receiver.value.split(" "); 
  var neuer_emp = emp_array.join("");
  var empLength = neuer_emp.length;

  if (empLength < 2)  {
           alert( "Fehler: Empfänger ungültig!" );
           document.bbform.title.focus();
           return false;
      }

      if ( document.bbform.title.value == "" )  {
           alert( "Fehler: Titel fehlt!" );
           document.bbform.title.focus();
           return false;
      }

  var title_array = document.bbform.title.value.split(" "); 
  var neuer_title = title_array.join("");
  var titleLength = neuer_title.length;

  if (titleLength < 3)  {

           alert( "Fehler: Titel zu kurz!" );
           document.bbform.title.focus();
           return false;

  }

  var msg_array = document.bbform.message.value.split(" "); 
  var neuer_msg = msg_array.join("");
  var msgLength = neuer_msg.length;


strnobr = document.bbform.message.value;

 Ergebnis = strnobr.search(/\n/);     
  while(Ergebnis != -1)               
   {
   strnobr = strnobr.replace(/\n/,"");   
   Ergebnis = strnobr.search(/\n/);      
   }


if (strnobr.length < 2)  {

           alert( "Fehler: Nachricht muss mindestens 2 Zeichen lang sein!" );
           document.bbform.message.focus();
           return false;

}



   if( document.bbform.message.value == "" )

      {
       alert( "Fehler: Sie müssen eine Nachricht eingeben!" );
       document.bbform.message.focus();
       return false;
      }


  if (msgLength < 2)  {

           alert( "Fehler: Nachricht muss mindestens 2 Zeichen lang sein!" );
           document.bbform.message.focus();
           return false;

  }


  var pmname  = document.getElementById('wrongDiv');


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

  var ajaxT  = document.getElementById('newpm');
  var pmname  = document.getElementById('wrongDiv');


  ajaxRequest.onreadystatechange = function()  {


      /* if readyState (Server response) is complete ( = 4 ) */

      if (ajaxRequest.readyState == 4)  {

	  var ergebnis2 = ajaxRequest.responseText;
	  var splitter2 = ergebnis2.split("%%");


          if (splitter2[0] == 'nameFalsch')  {

              pmname.innerHTML = '<b>Der Username existiert nicht!</b>';
              document.bbform.newpm_receiver.style.color = 'red';
              document.bbform.newpm_receiver.focus(); 
              pmname.style.display='block';
              return false; 

          }

          else if (splitter2[0] == "onlyCase")  { 

              document.getElementById('newpm_receiver').value = splitter2[1];
             // document.getElementById('newpm_receiver').focus(); 

          } else  { 

              document.bbform.newpm_receiver.style.color = '';
              pmname.innerHTML  = ''; 

              pmname.style.display='none';

              document.bbform.submit(); 

          }

      }

  }


  var name = document.getElementById('newpm_receiver').value;


  var queryString = "?name=" + name;

  ajaxRequest.open("GET", "./includes/newpm2.php" + queryString, true);
  ajaxRequest.send(null);


}
