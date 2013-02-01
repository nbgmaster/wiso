function TasteGedrueckt (Ereignis) {
  if (!Ereignis)
    Ereignis = window.event;
  if (Ereignis.which) {
    Tastencode = Ereignis.which;
  } else if (Ereignis.keyCode) {
    Tastencode = Ereignis.keyCode;
  }
 
     if (Tastencode==54 && Ereignis.shiftKey)  {

    return false;

}

}


document.onkeydown = TasteGedrueckt;


function ajaxFunction2()  {
    

  ExNick = document.getElementById("r_nickname");

  if (ExNick)  {
  var nick_array = document.reg_form.r_nickname.value.split(" "); 
  var neuer_nick = nick_array.join("");
  var NickLength = neuer_nick.length;
  }
/*
  var vor_array = document.reg_form.firstname.value.split(" "); 
  var neuer_vor = vor_array.join("");
  var VorLength = neuer_vor.length;

  var nach_array = document.reg_form.lastname.value.split(" "); 
  var neuer_nach = nach_array.join("");
  var NachLength = neuer_nach.length;

*/

   if( NickLength < 3 )

      {

       alert( "Fehler: Nickname ungültig!" );
       document.reg_form.r_nickname.focus();
       return false;
      }
/*
 if( document.reg_form.firstname.value == "" )

      {

       alert( "Fehler: Vorname fehlt!" );
       document.reg_form.firstname.focus();
       return false;
      }


   if( VorLength < 3 )

      {

       alert( "Fehler: Vorname ungültig!" );
       document.reg_form.firstname.focus();
       return false;
      }


   if( document.reg_form.lastname.value == "" )

      {
       alert( "Fehler: Nachname fehlt!" );
       document.reg_form.lastname.focus();
       return false;
      }




   if( NachLength < 3 )

      {
       alert( "Fehler: Nachname ungültig!" );
       document.reg_form.lastname.focus();
       return false;
      }

*/

  var ajaxDisplay  = document.getElementById('ajaxDiv');


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


          if (ajaxRequest.responseText == 'nameVergeben')  { 

              ajaxDisplay.innerHTML = '<b>Der Username ist bereits vergeben!</b>';
              document.reg_form.r_nickname.style.color = 'red';
              document.reg_form.r_nickname.focus(); 
              ajaxDisplay.style.display='block';
              return false; 

          }


          else if (ajaxRequest.responseText == 'nameSonder')  { 

              ajaxDisplay.innerHTML = '<b>Der Username darf keine Sonderzeichen enthalten!</b>';
              document.reg_form.r_nickname.style.color = 'red';
              document.reg_form.r_nickname.focus();
              ajaxDisplay.style.display='block';
              return false;
          }


          else  { 
 
              document.reg_form.r_nickname.style.color = '';
              ajaxDisplay.innerHTML  = ''; 

              ajaxDisplay.style.display='none';

              document.reg_form.submit(); 
  
          }

      }


  }


  var name = document.getElementById('r_nickname').value;


  var queryString = "?name=" + name;

  ajaxRequest.open("GET", "./includes/update_ajax.php" + queryString, true);
  ajaxRequest.send(null);


}
