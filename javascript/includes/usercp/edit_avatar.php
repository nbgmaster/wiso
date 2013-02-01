<?php 

  if ($module == "")  { 

      $avatar_max_size2 = $avatar_max_size / 1000;
      $avatar_max_size2 = round($avatar_max_size2,2);

      include("./templates/usercp/edit_avatar.php"); 

  }

  else  {

      if ($_POST[url_file] != "")  {

          $dirname    = "avatars/";

          $avatarname = substr($url_file,strrpos($url_file, "/")+1);

          $size2       = getimagesize("$url_file");

          $dataend    = strtolower( substr( strrchr( $avatarname , "." ), 1 ) ); 
 
          $avatartype = "image/$dataend";

      }

      else  {

          $tempname    = $_FILES["file"]["tmp_name"]; 
          $avatarname  = $_FILES["file"]["name"]; 
          $avatartype  = $_FILES["file"]["type"];
          $size        = filesize($_FILES["file"]["tmp_name"]);

          $size2       = getimagesize($tempname);

      }

      $md5name = md5 (uniqid (rand()));

      $upload_access = "true";

      if ($avatartype == "image/jpeg" or $avatartype == "image/jpg" or $avatartype == "image/pjpeg")  {

      $avatarname2 = "avatars/"."$md5name.jpg";
      $avatarname3 = "$md5name.jpg";

      }

      if ($avatartype == "image/gif")  {

      $avatarname2 = "avatars/"."$md5name.gif";
      $avatarname3 = "$md5name.gif";

      }

      if ($avatartype == "image/bmp")  {

      $avatarname2 = "avatars/"."$md5name.bmp";
      $avatarname3 = "$md5name.bmp";

      }

      if ($avatartype == "image/png")  {

      $avatarname2 = "avatars/"."$md5name.png";
      $avatarname3 = "$md5name.png";

      } 

      if (isset($send_data))  {

          $handle = opendir ("avatars/"); 
          $path   = "avatars/"; 

          while (false !== ($checkfiles = readdir ($handle)))  { 
 
                 if ($checkfiles == "$avatarname3" && $avatarname3 != "$userdata_avatar")  { 

                     $upload_access = "false";

                     $text01 = "Der Dateiname ist bereits vorhanden!<br>Bitte benennen Sie die Datei um.";
 
                 }

          }

          if ($size2[0] > $avatar_max_width)  {

              $text02        = "<br>Das hochgeladene Bild ist zu breit!<br><br>";    
              $upload_access = "false";

          }

          if ($size2[1] > $avatar_max_height)  {

              $text03        = "<br>Das hochgeladene Bild ist zu hoch!<br><br>";   
              $upload_access = "false"; 
 
          }

          if ($size > $avatar_max_size)   {

              $text04        = "<br>Datei darf max. $avatar_max_size Bytes groß sein!<br><br>";  
              $upload_access = "false";

          }

          if ($avatartype != "image/jpeg" && $avatartype != "image/jpg" && $avatartype != "image/pjpeg" && $avatartype != "image/gif" && $avatartype != "image/bmp" && $avatartype != "image/png" && $avatartype != "")  {

              $text05 = "Keine gültige Bilddatei!<br><br>"; $upload_access = "false";

          }

      }
 

      if ($upload_access == "true" && $url_file != "")  {

          copy($url_file,$avatarname2);

          $size = filesize($avatarname2);

          if ($size > $avatar_max_size)   {

              $text04        = "<br>Datei darf max. $avatar_max_size Bytes groß sein!<br><br>";  

              $upload_access = "false";

              unlink("$avatarname2"); 

          }

          else  {

          $already_copied = "1";

          }

      }


      if ($upload_access == "false") { 

          $link = "index.php?do=usercp&sec=edit_avatar";

      }

      else  { 

          $link   = "index.php?do=usercp";        

          $text01 = "Avatar wurde geändert!"; 
 
      }


      if (isset($send_data))  {

          if ($del_avatar == "1")  {

              $update_avatar  = "UPDATE $user_tblname Set avatar = '' WHERE UserID = '$userdata_id'";  
              $sql_avatar     = mysql_query($update_avatar);

              unlink("avatars/$userdata_avatar"); 

          }

      }


      if (isset($send_data))  { 

          if ($upload_access == "true" && $userdata_avatar != "" && $avatarname != "" && $del_avatar == "")  { 

              unlink("avatars/$userdata_avatar"); 

          }

          if ($upload_access == "true" && $avatarname != "")  {

              $update_avatar  = "UPDATE $user_tblname Set avatar = '$avatarname3' WHERE UserID = '$userdata_id'";  
              $sql_avatar     = mysql_query($update_avatar);

              if ($_POST[url_file] != "" && $already_copied == "")  {

                  copy($url_file,$avatarname2);

              }

              else  {

                  copy("$tempname", "$avatarname2");  

              }

          }

      }

  include("./templates/refresh.php");

  }
