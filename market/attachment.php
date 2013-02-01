<?php  

  function byte_umrechner2($bytes) {
 
      $size  = number_format(($bytes / pow(2,20)), 2);
      $size .= " MB";
      return $size;

  }


      $directory   = "boerse";


      $tempname    = $_FILES["file"]["tmp_name"]; 
      $filename    = $_FILES["file"]["name"]; 
      $filetype    = $_FILES["file"]["type"];
      $size        = filesize($_FILES["file"]["tmp_name"]);

  
      $file_max_size2 = byte_umrechner2($file_max_size); 


      // $md5name = md5 (uniqid (rand()));

      $md5name = $timestamp;

      $md5name .= uniqid (rand());


      $upload_access = "no";

      if ($filetype == "image/jpeg" or $filetype == "image/jpg" or $filetype == "image/pjpeg")  {

          $size2       = getimagesize($tempname);
   
          $filename2 = "$directory/"."$md5name.jpg";
          $filename3 = "$md5name.jpg";
          $upload_access = "yes";

      }

      if ($filetype == "image/gif")  {

          $size2       = getimagesize($tempname);

          $filename2 = "$directory/"."$md5name.gif";
          $filename3 = "$md5name.gif";
          $upload_access = "yes";

      }

      /*

      if ($filetype == "image/bmp")  {

          $size2       = getimagesize($tempname);

          $filename2 = "$directory/"."$md5name.bmp";
          $filename3 = "$md5name.bmp";
          $upload_access = "yes";

      }

      */

      if ($filetype == "image/png" or $filetype == "image/x-png")  {

          $size2       = getimagesize($tempname);

          $filename2 = "$directory/"."$md5name.png";
          $filename3 = "$md5name.png";
          $upload_access = "yes";

      } 


          if ($upload_access == "no")  { 

              $text04        = "Das Dateiformat ist ung¸ltig!";  

          }

          else if ($size > 500000)   {  

              $text04        = "Datei darf max. 500 KB groﬂ sein!";  
              $upload_access = "no";

          }

          if ($upload_access == "yes")  { 

              copy("$tempname", "$filename2");  $attachment = $filename3;

          }


