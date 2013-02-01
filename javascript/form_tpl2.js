function checkForm() {


   if( document.tplform.new_name.value == "" )

      {
       alert( "Fehler: Feld Template Name leer!" );
       document.tplform.new_name.focus();
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