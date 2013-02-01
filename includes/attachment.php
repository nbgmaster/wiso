<?php  

  function byte_umrechner2($bytes) {
 
      $size  = number_format(($bytes / pow(2,20)), 2);
      $size .= " MB";
      return $size;

  }

      if ($do == "database")  {

      $directory   = "database";

      }

      else  {

      $directory   = "attachments";

      } 

      $tempname    = $_FILES["file"]["tmp_name"]; 
      $filename    = $_FILES["file"]["name"]; 
      $filetype    = $_FILES["file"]["type"];

      $fileheader = substr($filename, strlen($_GET['fileID'])-3);

      $size        = filesize($_FILES["file"]["tmp_name"]);

  
      $file_max_size2 = byte_umrechner2($file_max_size); 

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

      if ($filetype == "text/plain")  {

          $filename2 = "$directory/"."$md5name.txt";
          $filename3 = "$md5name.txt";
          $upload_access = "yes";

      } 
 
      if ($filetype == "application/x-pdf")  { 

          $filename2 = "$directory/"."$md5name.pdf";
          $filename3 = "$md5name.pdf";
          $upload_access = "yes";

      } 

      if ($filetype == "application/pdf" or $fileheader == "pdf")  { 

          $filename2 = "$directory/"."$md5name.pdf";
          $filename3 = "$md5name.pdf";
          $upload_access = "yes";

      } 

      if ($filetype == "application/zip" or $filetype == "application/x-zip-compressed" or $filetype == "application/compressed" or $fileheader == "zip")  {

          $filename2 = "$directory/"."$md5name.zip";
          $filename3 = "$md5name.zip";
          $upload_access = "yes";

      } 

      if ($filetype == "application/x-rar-compressed" or $filetype == "application/x-rar" or $filetype == "application/rar" or $filetype == "application/x-compressed" or $fileheader == "rar")  {

          $filename2 = "$directory/"."$md5name.rar";
          $filename3 = "$md5name.rar";
          $upload_access = "yes";

      } 

      if ($filetype == "application/msword" or $filetype == "text/richtext")  {

          $filename2 = "$directory/"."$md5name.doc";
          $filename3 = "$md5name.doc";
          $upload_access = "yes";

      } 

      if ($filetype == "application/vnd.ms-excel")  {

          $filename2 = "$directory/"."$md5name.xls";
          $filename3 = "$md5name.xls";
          $upload_access = "yes";

      }

      if ($filetype == "application/vnd.ms-powerpoint")  {

          $filename2 = "$directory/"."$md5name.ppt";
          $filename3 = "$md5name.ppt";
          $upload_access = "yes";

      } 

      if ($filetype == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")  {

          $filename2 = "$directory/"."$md5name.docx";
          $filename3 = "$md5name.docx";
          $upload_access = "yes";

      } 

      if ($filetype == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")  {

          $filename2 = "$directory/"."$md5name.xlsx";
          $filename3 = "$md5name.xlsx";
          $upload_access = "yes";

      } 

      if ($filetype == "application/vnd.openxmlformats-officedocument.presentationml.presentation")  {

          $filename2 = "$directory/"."$md5name.pptx";
          $filename3 = "$md5name.pptx";
          $upload_access = "yes";

      } 


          if ($upload_access == "no")  { 

              $text04        = "Das Dateiformat ist ung¸ltig!";  

          }

          else if ($size > $file_max_size)   {  

              $text04        = "Datei darf max. $file_max_size2 groﬂ sein!";  
              $upload_access = "no";

          }

          if ($upload_access == "yes")  { 

              copy("$tempname", "$filename2");  $attachment = $filename3;

          }


