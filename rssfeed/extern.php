<?php

  define("MAGPIE_CACHE_DIR", "cache");
  define("MAGPIE_CACHE_AGE", 1);

  include("rss_fetch.inc");
  require_once("./includes/functions.php");

  if ( $rss_url )  {

       $rss   = fetch_rss( $rss_url );
print_r($rss);  
       $rss_limit = 0;

       foreach ( $rss->items as $item )  {

              //   $item["title"] = substr($item["title"], 0, 32);
                                                   
                 $t_date  = explode("T",$item["pubdate"]);
                 $t_time = explode("+",$t_date[1]);
                 
                 $ti = $t_date[0].' '.$t_time[0];
                 
                 $ti = convert_date_comments($t);
           
                 $ti = substr($t, 0, strlen($t)-8);  
                        
                 $ay_rss[] = array('title'  => $item["title"],
                                   'href'   => $item["link"],
                                   'date'   => $ti
                                   );

                 $rss_limit++;

                 if ( $rss_limit > $max_number ) break;

       }


       $tpl->assign('title_rss', $rss->channel["title"]);

       $tpl->assign('ay_rss', $ay_rss);
       $tpl->assign('template', $template);
       
       unset($ay_rss);

       // $tpl->display("rssfeed.tpl");

  }
