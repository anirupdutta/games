<?php
    // Load Elgg engine
    include_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
 
    // set the title
    $title = "Games on Heybuddy";
 
    // start building the main column of the page
    $area2 = elgg_view_title($title);

    $area2 .= elgg_view("games/onlinegames");
    $params=array(
     'content' => $area2,
     );
    $body = elgg_view_layout('one_column',$params);
    echo elgg_view_page($title, $body); 
