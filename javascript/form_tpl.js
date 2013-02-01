function checkForm() {


   if( document.tplform.edit_tpl_name.value == "" )

      {
       alert( "Fehler: Feld Template Name leer!" );
       document.tplform.edit_tpl_name.focus();
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