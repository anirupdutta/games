<?php


	function games_init() 
	{
		global $CONFIG;
		add_menu('Games', $CONFIG->wwwroot ."games/onlinegames");	
		register_page_handler('games','games_page_handler');	
	}


	function games_page_handler($page) 
	{

		global $CONFIG;
		if (!isset($page[0])) {
		      forward();
		}

		$base_dir = elgg_get_plugins_path() . 'games/pages/games';

		switch ($page[0]) {

			case 'onlinegames':
				include "$base_dir/onlinegames.php";
				break;
			default:
				include "$base_dir/onlinegames.php";
				break;
		}

		
	}
	register_elgg_event_handler('init','system','games_init');
?>