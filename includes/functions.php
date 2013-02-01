<?php 
  function convert_date_comments($date) {   

           global $getmonth;   
           global $lang_active;            

           $year = substr($date,0,4);
           $month = substr($date,5,2);
           $day = substr($date,8,2);
           $hours = substr($date,11,2);
           $minutes = substr($date,14,2);
           if ($month < 10) $month = substr($month,1,1);
           $month_name = $getmonth[$month];

           /*if ($lang_active == 'EN') {
           
               if      ($hours == '00') { $hours = 12; $p_time = 'AM'; }
               else if ($hours == '12')   $p_time = 'PM';
               else if ($hours > 12)    { $hours = $hours - 12;  $p_time = 'PM'; }

            }*/

            $date = $day.'. '.$month_name.' '.$year.' '.$hours.':'.$minutes;
            
            //if ($lang_active == 'EN') $date .= ' '.$p_time;  
                
            //GMT fix 
            $gmt_time = date("P",time());
            $gmt_time = substr($gmt_time,2,1);
            $date .= ' (GMT+'.$gmt_time.')';
         
            return $date;

  }