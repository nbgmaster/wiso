<?php  

if ($userdata_admin == "1")  {

  // Start:: Loading Navigation


  // Navigation:: Templates

  if ($sec == "templates")  { 

      $admin_navi = "<a href=\"index.php?do=admin&sec=templates\">Templates</a>";

      if ($module == "new")  {  

          $admin_navi2 = "Neues Template erstellen"; 

      } 

      if ($module == "edit")  { 

         $admin_navi2 = "Template ändern";

      } 
 
  }

  // Navigation:: Groups

  if ($sec == "groups")  { 

      $admin_navi = "<a href=\"index.php?do=admin&sec=groups\">Gruppen</a>";

      if ($module == "new")  {  

          $admin_navi2 = "Neue Gruppe erstellen"; 

      } 

      if ($module == "edit")  { 

         $admin_navi2 = "Gruppe bearbeiten";

      } 
 
  }


  // Navigation:: Ranks

  if ($sec == "ranks")  { 

      $admin_navi = "<a href=\"index.php?do=admin&sec=ranks\">Benutzerränge</a>";

      if ($module == "new")  {  

          $admin_navi2 = "Neuen Benutzerrang erstellen"; 

      } 

      if ($module == "edit")  { 

         $admin_navi2 = "Benutzerrang bearbeiten";

      } 
 
  }

  
  // Navigation:: User Data

  if ($sec == "edit_user")  {

      $admin_navi = "<a href=\"index.php?do=admin&sec=edit_user\">Userdaten ändern</a>";

  }


  // Navigation:: Categorys

  if ($sec == "edit_cat")  {
  
      $admin_navi = "<a href=\"index.php?do=admin&sec=edit_cat\">Kategorien & Foren ändern</a>";

  }

  if ($sec == "new_cat")  { 

      $admin_navi = "<a href=\"index.php?do=admin&sec=new_cat\">Neue Kategorie erstellen</a>";

  }

  if ($sec == "new_forum")  { 

      $admin_navi = "<a href=\"index.php?do=admin&sec=new_forum\">Neues Forum erstellen</a>";

  }

  if ($sec == "config")  { 

      $admin_navi = "<a href=\"index.php?do=admin&sec=config\">Konfiguration</a>";

  }

  if ($sec == "backup")  { 

      $admin_navi = "<a href=\"index.php?do=admin&sec=backup\">Datensicherung</a>";

  }

  if ($sec == "massemail")  { 

      $admin_navi = "<a href=\"index.php?do=admin&sec=massemail\">Email an alle Mitglieder schicken</a>";

  }

  if ($sec == "smilies")  { 

      $admin_navi = "<a href=\"index.php?do=admin&sec=smilies\">Smilies</a>";

  }

  // Load:: Navigation

  include("templates/admin/admin_top.php");


  // Start:: Loading Content


  // Main Overview

  if ($sec == "")  { 

      include("templates/admin/admin_main.php");

  }


  // Content:: Templates

  if ($sec == "templates")  {  


      if ($module == "")  {  

          include("templates/admin/templates_main.php");

      }
     
      if ($module == "new")  { 

          include("admin/new_template.php");

      } 
     
      if ($module == "edit")  {

          include("admin/edit_template.php");

      } 

      if ($module == "modify")  {

          include("admin/edit_template.php");

      }

  }


  // Content:: Groups

  if ($sec == "groups")  { 

      if ($module == "")  {

          include("admin/groups.php");

      }


      if ($module == "new" or $module == "create")  {

          include("admin/new_group.php");

      }

      if ($module == "edit" or $module == "modify")  {

          include("admin/edit_group.php");

      }

      if ($module == "delete")  {

          include("admin/edit_group.php");

      }

      if ($module == "rights")  {

          include("admin/group_rights.php");

      }

  }


  // Content:: Ranks

  if ($sec == "ranks")  { 

      if ($module == "")  {

      include("admin/ranks.php");

      }


      if ($module == "new" or $module == "create")  {

          include("admin/new_rank.php");

      }

      if ($module == "edit" or $module == "modify")  {

          include("admin/edit_rank.php");

      }

      if ($module == "delete")  {

          include("admin/edit_rank.php");

      }

  }


  // Content:: User Data

  if ($sec == "edit_user")  { 

      include("admin/edit_user.php");

  }

  // Content:: Categorys

  if ($sec == "edit_cat")  { 

      include("admin/edit_cat.php"); 

  }

  // Content:: Create new category

  if ($sec == "new_cat")  { 

      include("admin/new_cat.php");

  }

  if ($sec == "new_forum")  { 

      include("admin/new_forum.php");

  }

  if ($sec == "config")  { 

      include("admin/config.php");

  }

  if ($sec == "backup")  { 

      include("admin/backup.php");

  }

  if ($sec == "massemail")  { 

      include("admin/massemail.php");

  }

  if ($sec == "smilies")  { 

      include("admin/smilies.php");

  }

}

else  {

      include("templates/no_permission.php");

?>


  </td>

 </tr>

</table>

<?php 

}
