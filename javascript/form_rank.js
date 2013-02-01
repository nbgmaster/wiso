function checkForm() {


   if( document.rankform.rankname.value == "" )

      {
       alert( "Fehler: Feld Rangname leer!" );
       document.rankform.rankname.focus();
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