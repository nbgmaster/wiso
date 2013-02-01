<?php

  define("MAGPIE_CACHE_DIR", "cache");
  define("MAGPIE_CACHE_AGE", "600");

  require_once("rss_fetch.inc");

       $rss_url = "https://www.campus.uni-erlangen.de/feed/atom.xml";

       $rss   = fetch_rss( $rss_url );

       $rss_limit = 0;

       foreach ( $rss->items as $item )  {

                 $ay_rss[] = array('title'  => $item["title"],
                                   'href'   => $item["link"]
                                   );

                 $rss_limit++;

                 if ( $rss_limit > 4 ) break;

       }
