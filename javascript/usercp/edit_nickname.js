function check_usercp() 

  {

   if( document.usercp_form.password.value == "" )

      {
       alert( "Fehler: Passwort fehlt!" );
       document.usercp_form.password.focus();
       return false;
      }


   if( document.usercp_form.nickname.value == "" )

      {
       alert( "Fehler: Nickname fehlt!" );
       document.usercp_form.nickname.focus();
       return false;
      }


   if( document.usercp_form.nickname2.value == "" )

      {
       alert( "Fehler: Nickname zweimal eingeben!" );
       document.usercp_form.nickname2.focus();
       return false;
      }


   if( document.usercp_form.nickname.value != document.usercp_form.nickname2.value )

      {
       alert( "Die Nicknames stimmen nicht überein!" );
       document.usercp_form.nickname.focus();
       return false;
      }



  }