function check_user() 

  {

  var vor_array = document.usercp_form.firstname.value.split(" "); 
  var neuer_vor = vor_array.join("");
  var VorLength = neuer_vor.length;

  var nach_array = document.usercp_form.lastname.value.split(" "); 
  var neuer_nach = nach_array.join("");
  var NachLength = neuer_nach.length;


   if( document.usercp_form.firstname.value == "" )

      {
       alert( "Fehler: Vorname fehlt!" );
       document.usercp_form.firstname.focus();
       return false;
      }

   if( VorLength < 3 )

      {

       alert( "Fehler: Vorname ung&uuml;ltig!" );
       document.usercp_form.firstname.focus();
       return false;
      }


   if( document.usercp_form.lastname.value == "" )

      {
       alert( "Fehler: Nachname fehlt!" );
       document.usercp_form.lastname.focus();
       return false;
      }

   if( NachLength < 3 )

      {
       alert( "Fehler: Nachname ung&uuml;ltig!" );
       document.usercp_form.lastname.focus();
       return false;
      }

}

/*

function count()

  {

   var laenge=document.usercp_form.misc.value.length;
 
   if (laenge > 200)

      {
       document.usercp_form.misc.value=document.usercp_form.misc.value.substring(0,200);
      }

  }

*/