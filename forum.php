<?php 

  if ($t == "")  { 

      // Load:: Categorys & Forums

      if ($c == "")  {

          // Load:: Categorys

          if ($f == "")  { 

              if ($userdata_id == "")  {

                  include("home.php"); 
 
                  if (!$do) include("templates/footer_main.php");

              }

              else  {

                  include("categorys.php"); 

              }

          }

          // Load:: Threads

          if ($f != "")  { 

              if ($p_readaccess == "1" && $userdata_id != "")  {

              include("show_threads.php");

              }

              else  {

              include("templates/no_permission.php");

              }

          }

      } 
 
      else  { 

          // Load:: Category

          if ($userdata_id != "")  {

              include("categorys.php"); 
 
          }

          else  {

              include("templates/no_permission.php");

          }

      }

      $t = "";

  }

  else if ($userdata_id != "")  { 

         // Load:: Posts
                  
              if ($p_readaccess == "1")  {

                  if ($_POST[adminoptions] == "movetopic" or $_POST[adminoptions] == "edittopic" or $_POST[adminoptions] == "deletetopic")  {

                      include("admin/adminoptions.php");   

                  }

                  else  {


                       include("show_posts.php");

                  }
 
              }

              else  {

              include("templates/no_permission.php");

              }

  }   

  else  {  

      include("templates/no_permission.php");

  }
                         
