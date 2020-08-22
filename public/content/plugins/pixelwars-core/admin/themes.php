<?php

	$pixelwars_core_template = get_option('template');
	
	switch ($pixelwars_core_template)
	{
		case 'life':
		
			include_once($pixelwars_core_ABSPATH . 'admin/themes/life.php');
		
		break;
		
		case 'unrovr':
		
			include_once($pixelwars_core_ABSPATH . 'admin/themes/unrovr.php');
		
		break;
	}

?>