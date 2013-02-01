function checkForm() {


   if( document.groupform.groupname.value == "" )

      {
       alert( "Fehler: Feld Gruppenname leer!" );
       document.groupform.groupname.focus();
       return false;
      }


formErrors = false;



if (formErrors) {
alert(formErrors);
return false;
} else {

return true;
}

}