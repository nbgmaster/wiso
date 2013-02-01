function check_admin() 

  {

   if( document.admin_form.forum.value == "" )

      {
       alert( "Fehler: Forumfeld leer!" );
       document.admin_form.forum.focus();
       return false;
      }

  }