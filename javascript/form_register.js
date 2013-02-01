
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



function check_user() 

  {

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


   if( document.reg_form.r_password.value != document.reg_form.password2.value )

      {
       alert( "Die Passwörter stimmen nicht überein!" );
       document.reg_form.r_password.focus();
       return false;
      }


   if( NickLength < 3 )

      {

       alert( "Fehler: Nickname ungültig!" );
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

   if( document.reg_form.firstname.value == "" )

      {

       alert( "Fehler: Vorname fehlt!" );
       document.reg_form.firstname.focus();
       return false;
      }

   if( VorLength < 3 )

      {

       alert( "Fehler: Vorname  ungültig!" );
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
       alert ("Die E-Mail-Adresse ist ungültig!");
       document.reg_form.email.focus();
       return false;
      }


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


  }

