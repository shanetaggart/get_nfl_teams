<?php

/**
* Plugin Name: Get NFL Teams
* Description: Retrieves NFL teams data from a JSON file and displays it on the page.
* Version: 1.00
* Author: Shane Taggart
*/

//Include all of the required files
include plugin_dir_path(__FILE__) . 'Assets/Includes/get_nfl_teams_styles.php';
include plugin_dir_path(__FILE__) . 'Assets/Includes/get_nfl_teams_get_data.php';
include plugin_dir_path(__FILE__) . 'Assets/Includes/get_nfl_teams_sort_data.php';
include plugin_dir_path(__FILE__) . 'Assets/Includes/get_nfl_teams_show_data.php';

//Use shortcode [teams] to use this plugin.
add_shortcode('teams', 'get_nfl_teams');

//Function called with shortcode
function get_nfl_teams(){

	$html_body = get_nfl_teams_show_data();
	echo $html_body;

}

?>
