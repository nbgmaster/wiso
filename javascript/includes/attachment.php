<?php 

      $tempname    = $_FILES["file"]["tmp_name"]; 
      $filename    = $_FILES["file"]["name"]; 
      $filetype    = $_FILES["file"]["type"];
      $size        = filesize($_FILES["file"]["tmp_name"]);

      $md5name = md5 (uniqid (rand()));

      $upload_access = "true"; 

      if ($filetype == "image/jpeg" or $filetype == "image/jpg" or $filetype == "image/pjpeg")  {

      $size2       = getimagesize($tempname);

      $filename2 = "attachments/"."$md5name.jpg";
      $filename3 = "$md5name.jpg";

      }

      if ($filetype == "image/gif")  {

      $size2       = getimagesize($tempname);

      $filename2 = "attachments/"."$md5name.gif";
      $filename3 = "$md5name.gif";

      }

      if ($filetype == "image/bmp")  {

      $size2       = getimagesize($tempname);

      $filename2 = "attachments/"."$md5name.bmp";
      $filename3 = "$md5name.bmp";

      }

      if ($filetype == "image/png")  {

      $size2       = getimagesize($tempname);

      $filename2 = "attachments/"."$md5name.png";
      $filename3 = "$md5name.png";

      } 

      if ($filetype == "text/plain")  {

      $filename2 = "attachments/"."$md5name.txt";
      $filename3 = "$md5name.txt";

      } 
 
      if ($filetype == "application/x-pdf")  { 

      $filename2 = "attachments/"."$md5name.pdf";
      $filename3 = "$md5name.pdf";

      } 

      if ($filetype == "application/pdf")  { 

      $filename2 = "attachments/"."$md5name.pdf";
      $filename3 = "$md5name.pdf";

      } 

      if ($filetype == "application/msword")  {

      $filename2 = "attachments/"."$md5name.doc";
      $filename3 = "$md5name.doc";

      } 

      if ($filetype == "application/vnd.ms-excel")  {

      $filename2 = "attachments/"."$md5name.xls";
      $filename3 = "$md5name.xls";

      }

      if ($filetype == "application/zip")  {

      $filename2 = "attachments/"."$md5name.zip";
      $filename3 = "$md5name.zip";

      }

      $noSize = "0";

      if (isset($send_postdata))  { 

          if ($size > 500000)   { 

              $text04        = "<br><br>Datei darf max. 0.5 MB groﬂ sein!<br>";  
              $upload_access = "false"; $noSize = "1";

          }


          if ($upload_access == "true" && $filename != "")  { 

              copy("$tempname", "$filename2");  $attachment = $filename3;

          }

          if ($attachment == "" && $noSize != "1")  {

              $text04        = "<br><br>Dateiformat nicht erlaubt!<br>";  

          }

      }


