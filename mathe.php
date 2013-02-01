<?php

  $counter = 1;

 $r = 0;

  for ( $i = 1;$i <= 1500; $i++ )    {

           for ( $b=1;$b<=$i;$b++ )   {

                    $counter++;

                   $r = $r + $i;

                    if ( $counter == 1000000 ) {  
 
                          $t = $i;
echo"<b>$i</b>";
                           break;  

                   }

  echo"$i "; 

          }

          if ( $counter == 1000000)  {  

               break; 

         }

       echo"<br>";

  }

  //echo"<br><br>";

echo"  = > Break: $counter<br><br>";

  echo"<b>L&ouml;sung: $t</b>";

