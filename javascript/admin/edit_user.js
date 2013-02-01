function check_admin() 

  {

   if( document.admin_form.nickname.value == "" )

      {
       alert( "Fehler: Nickname fehlt!" );
       document.admin_form.nickname.focus();
       return false;
      }



   if( document.admin_form.password.value == "" )

      {
       alert( "Fehler: Passwort fehlt!" );
       document.admin_form.password.focus();
       return false;
      }


 var pass = document.admin_form.password.value;

   if (pass.length < 5)

      {
       alert ("Passwort muss mindestens 5 Zeichen lang sein!");
       document.admin_form.password.focus();
       return false;
      }


   if( document.admin_form.email.value == "" )

      {
       alert( "Fehler: Emailadresse fehlt!" );
       document.admin_form.email.focus();
       return false;
      }


   var mail   = document.admin_form.email.value;

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
       document.admin_form.email.focus();
       return false;
      }

  }