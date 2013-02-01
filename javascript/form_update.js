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
  


  ExNick = document.getElementById("r_nickname");

  if (ExNick)  {
  var nick_array = document.reg_form.r_nickname.value.split(" "); 
  var neuer_nick = nick_array.join("");
  var NickLength = neuer_nick.length;
  }

  var vor_array = document.reg_form.firstname.value.split(" "); 
  var neuer_vor = vor_array.join("");
  var VorLength = neuer_vor.length;

  var nach_array = document.reg_form.lastname.value.split(" "); 
  var neuer_nach = nach_array.join("");
  var NachLength = neuer_nach.length;



   if( NickLength < 3 )

      {

       alert( "Fehler: Nickname ungültig!" );
       document.reg_form.r_nickname.focus();
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


  }
