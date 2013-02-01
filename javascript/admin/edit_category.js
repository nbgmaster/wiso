function check_admin() 

  {

   if( document.admin_form.category.value == "" )

      {
       alert( "Fehler: Kategoriefeld leer!" );
       document.admin_form.category.focus();
       return false;
      }

  }