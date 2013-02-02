

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




  var nick_array = document.reg_form.r_nickname.value.split(" "); 
  var neuer_nick = nick_array.join("");
  var NickLength = neuer_nick.length;

  var vor_array = document.reg_form.firstname.value.split(" "); 
  var neuer_vor = vor_array.join("");
  var VorLength = neuer_vor.length;

  var nach_array = document.reg_form.lastname.value.split(" "); 
  var neuer_nach = nach_array.join("");
  var NachLength = neuer_nach.length;

  var pw_array = document.reg_form.r_password.value.split(" "); 
  var neuer_pw = pw_array.join("");
  var pwLength = neuer_pw.length;



   if( NickLength < 3 )



      {


       alert( "Fehler: Nickname ung&uuml;ltig!" );

       document.reg_form.r_nickname.focus();

       return false;

      }



   if( document.reg_form.r_nickname.value == "")



      {

       alert( "Fehler: Nickname fehlt!" );

       document.reg_form.r_nickname.focus();

       return false;

      }





   if( document.reg_form.email.value == "" )



      {


       alert( "Fehler: Email fehlt!" );

       document.reg_form.email.focus();

       return false;

      }



 



   var mail   = document.reg_form.email.value;



   var mailOK = true;



   if (!mail)

   mailOK = false;



   if (mail.indexOf ("@") == -1)

   mailOK = false;



   if (mail.indexOf ("@") == 0 || 

   mail.lastIndexOf ("@") == mail.length - 1)

   mailOK = false;



   if (mail.indexOf ("@") != mail.lastIndexOf ("@"))

   mailOK = false;



   if (!mailOK) 



      {

       alert ("Die E-Mail-Adresse ist ung&uuml;ltig!");

       document.reg_form.email.focus();

       return false;

      }
  /*
   blaaa = 0;
   results = document.reg_form.email.value.indexOf('uni-erlangen.de');

   if (results == -1)  {
   
       alert("Keine g&uuml;ltige Uni-Emailadresse!");
       blaaa = 1;
       return false;

   }
   
   if (blaaa == 0)  {
          results = document.reg_form.email.value.indexOf('fau.de');
    
       if (results == -1)  {
       
           alert("Keine g&uuml;ltige Uni-Emailadresse!");
           return false;
    
       }

   }
        */



   if( document.reg_form.r_password.value == "" )



      {

       alert( "Fehler: Passwort fehlt!" );

       document.reg_form.r_password.focus();

       return false;

      }





   if( document.reg_form.password2.value == "" )



      {

       alert( "Fehler: Passwort zweimal eingeben!" );

       document.reg_form.password2.focus();

       return false;

      }





   var pass = document.reg_form.r_password.value;



   if (pwLength < 5)



      {

       alert ("Passwort muss mindestens 5 Zeichen lang sein!");

       document.reg_form.r_password.focus();

       return false;

      }





   var pass2 = document.reg_form.password2.value;



   if (pass2.length < 5) 



      {

       alert ("Passwort muss mindestens 5 Zeichen lang sein!");

       document.reg_form.password2.focus();

       return false; 

      }


   if( document.reg_form.r_password.value != document.reg_form.password2.value )



      {

       alert( "Die Passw&ouml;rter stimmen nicht &uuml;berein!" );

       document.reg_form.r_password.focus();

       return false;

      }

  if( document.reg_form.firstname.value == "" )



      {


       alert( "Fehler: Vorname fehlt!" );

       document.reg_form.firstname.focus();

       return false;

      }







   if( VorLength < 3 )



      {


       alert( "Fehler: Vorname  ung&uuml;ltig!" );

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

       alert( "Fehler: Nachname ung&uuml;ltig!" );

       document.reg_form.lastname.focus();

       return false;

      }

    



  var ajaxDisplay  = document.getElementById('ajaxDiv');

  var ajaxDisplay2 = document.getElementById('ajaxDiv2');


  ExMail = document.getElementById('email');

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


          else if (ajaxRequest.responseText == 'mailVergeben')  { 

              ajaxDisplay2.innerHTML = '<b>Die Emailadresse  ist bereits vergeben!</b>';
              document.reg_form.email.style.color = 'red';
              document.reg_form.email.focus();
              ajaxDisplay2.style.display='block';
              return false;

          }

          else  { 
 
              document.reg_form.r_nickname.style.color = '';
              ajaxDisplay.innerHTML  = ''; 

              document.reg_form.email.style.color = '';
              ajaxDisplay2.innerHTML  = ''; 

              ajaxDisplay.style.display='none';
              ajaxDisplay2.style.display='none';

              document.reg_form.submit(); 
  
          }

      }


  }


  var name = document.getElementById('r_nickname').value;

  if (ExMail)  {

  var mail = document.getElementById('email').value;

  }

  var queryString = "?name=" + name + "&mail=" + mail;

  ajaxRequest.open("GET", "./includes/ajax.php" + queryString, true);
  ajaxRequest.send(null);


}
