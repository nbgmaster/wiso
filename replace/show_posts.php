<?php 

   $topictitle = str_replace("<", "&lt;", $topictitle);
   $topictitle = str_replace(">", "&gt;", $topictitle);

   $str = trim($str);

  // $str = htmlentities($str);         

   $str = html_entity_decode($str);
  
 //  $str = htmlspecialchars($str);


   $str = str_replace("<", "&lt;", $str);
  $str = str_replace(">", "&gt;", $str);
//          $str = str_replace("'", "&acute;", $str);


           // Line Breaks
           $str = nl2br($str);


  if ($bbcode_disable == "0")  {


      // Replace PHP Code
    //  $match   = array('#\[PHP\](.*?)\[\/PHP\]#se');

    //  $replace = array("'<div>'.highlight_php('$1').'</div>'");

   //   $str     =  preg_replace($match, $replace, $str);

      $max_w   = $width - 220;

      $max_w   = "".$max_w."px";


if ($do != "profile")  {


       for ($count_quote=0;$count_quote<=20;$count_quote++)  {

            $str = preg_replace('#\[QUOTE=(.*)\](.*)\[/QUOTE\]#Uis',
            ' <center><table cellpadding="4" style="width:98%;max-width: $max_w"> <tr><td align="left"><b>\1</b> hat folgendes geschrieben:</td></tr> <tr><td bgcolor="#actual_bgcolor333" align="left" style="line-height:18px;border:actual_bordergage333px solid #actual_bordercolor333;"> \2</td></tr> </table></center>',
            $str);

       }


            $str = preg_replace('#\[QUOTE](.*)\[/QUOTE\]#Uis',
            ' <center><table cellpadding="4" style="width:98%;"><tr><td bgcolor="#actual_bgcolor333" align="left" style="line-height:18px;border:actual_bordergage333px solid #actual_bordercolor333;"> \1</td></tr> </table></center>',
            $str);

}

else  {



       for ($count_quote=0;$count_quote<=20;$count_quote++)  {

            $str = preg_replace('#\[QUOTE=(.*)\](.*)\[/QUOTE\]#Uis',
            ' <center><table cellpadding="4" style="width:98%;max-width: $max_w"> <tr><td align="left"><b>\1</b> hat folgendes geschrieben:</td></tr> <tr><td class="tablea" align="left" style="line-height:18px;border:actual_bordergage333px solid #actual_bordercolor333;"> \2</td></tr> </table></center>',
            $str);

       }


            $str = preg_replace('#\[QUOTE](.*)\[/QUOTE\]#Uis',
            ' <center><table cellpadding="4" style="width:98%;"><tr><td class="tablea" align="left" style="line-height:18px;border:actual_bordergage333px solid #actual_bordercolor333;"> \1</td></tr> </table></center>',
            $str);




}


     // Replace IMG Code
      preg_match_all("=\[IMG\](.*)\[/IMG\]=Uis", $str, $strikes, PREG_SET_ORDER);


      foreach ($strikes as $content)  {

          $img_var = str_replace("<br />", "", $content[1]);

          $img_var = trim($img_var);  

          $content[1] = str_replace("<", "&lt;", $content[1]);
          $content[1] = str_replace(">", "&gt;", $content[1]);

          $content[1] = str_replace("'", "&acute;", $content[1]);
          $content[1] = str_replace("\"", "&quot;", $content[1]);

          $content[1] = str_replace("(", "&#40;", $content[1]);   

          if ($browser == "Opera")  {

             $str = str_replace("[IMG]$content[1][/IMG]", "</u><img src=\"$img_var\" style=\"width:50px\" alt=\"[Bild nicht mehr vorhanden]\" title=\"\" border=\"0\"><a href=\"$img_var\" target=\"_blank\"> <img title=\"Volle Bildgr&ouml;&szlig;e anzeigen\" src=\"images/templates/$template/zoom.gif\" border=\"0\"> </a>", $str);

          }  else  {

             $str = str_replace("[IMG]$content[1][/IMG]", "</u><img src=\"$img_var\" style=\"max-width: $max_w;width: expression(this.width > 560 ? 560: true);\" alt=\"[Bild nicht mehr vorhanden]\" title=\"\" border=\"0\"><a href=\"$img_var\" target=\"_blank\"> <img title=\"Volle Bildgr&ouml;&szlig;e anzeigen\" src=\"images/templates/$template/zoom.gif\" border=\"0\"> </a>", $str);

          }

       }


       $str = preg_replace('#\[COLOR=(.*)\](.*)\[/COLOR\]#Uis',
                            '<FONT COLOR="\1">\2</FONT>',
                            $str);

       $str = preg_replace('#\[SIZE=(.*)\](.*)\[/SIZE\]#Uis',
                            '<FONT SIZE="\1">\2</FONT>',
                            $str);

       $str = preg_replace('=\[CENTER\](.*)\[/CENTER\]=Uis',
                            '<CENTER>\1</CENTER>',
                            $str);


       $str = preg_replace('=\[B\](.*)\[/B\]=Uis',
                            '<B>\1</B>',
                            $str);
    
       $str = preg_replace('=\[I\](.*)\[/I\]=Uis',
                            '<I>\1</I>',
                            $str);


       $str = preg_replace('=\[U\](.*)\[/U\]=Uis',
                            '<U>\1</U>',
                            $str);


       $str = str_replace("https://","http://",$str); 

       $str = str_replace("www.","http://www.",$str); 
       $str = str_replace("http://http://","http://",$str);


       $str = str_replace("]http://","]uzulink",$str); 


       $pattern = '#([^=])(http://)([^<>]+)#sm';

       $pattern = '#(^|[^\"=]{1})(http://)([^\s<>]+)#sm';

       $str = preg_replace($pattern,"[URL]http://\\3[/URL]",$str);

       $str = str_replace("[URL[URL]","[URL]",$str);
       $str = str_replace("[/URL][/URL]","[/URL]",$str);


       preg_match_all("#\[URL=(.*)\](.*)\[/URL\]#Uis", $str, $strikes2, PREG_SET_ORDER);

       foreach ($strikes2 as $content2)  { 

         $content2[2] = str_replace("[URL]","",$content2[2]); 

         $donobr2 = str_replace("<br />", "", $content2[2]);   

         $link2 = wordwrap($donobr2, 65, " ", 1); ;

         $donobr = str_replace("<br />", "", $content2[1]);   

         $str = str_replace($content2[0],' <a href="'.$donobr.'" target="_blank" class="userlink"> <u> '.$link2.'</u></a> ',$str);

       }


       preg_match_all("=\[URL\](.*)\[/URL\]=Uis", $str, $strikes3, PREG_SET_ORDER);

       foreach ($strikes3 as $content3)  { 

         $content3[1] = str_replace("[URL]","",$content3[1]); 

         $donobr2 = str_replace("<br />", "", $content3[1]);   

         $link3 = wordwrap($donobr2, 65, " ", 1); 

         $donobr = str_replace("<br />", "", $content3[1]);   

         $str = str_replace($content3[0],' <a href="'.$donobr.'" target="_blank" class="userlink"> <u> '.$link3.'</u></a> ',$str);

       }


       // $str = wordwrap($str, 20, " ", 1); 


       $str = str_replace("actual_bordercolor333", "$bordercolor", $str);
       $str = str_replace("actual_bordergage333", "$bordergage", $str);
       $str = str_replace("actual_bgcolor333", "$cell_bg02", $str);

       $str = str_replace("uzulink","http://",$str); 
       $str = str_replace("[/URL]","",$str); 

  }
