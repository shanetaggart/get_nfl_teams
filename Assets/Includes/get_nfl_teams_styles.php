<?php

//Create a hook to enqueue the styles once on load
add_action('wp_enqueue_scripts', 'get_nfl_teams_styles');

//Enqueueing custom CSS
function get_nfl_teams_styles(){

	wp_enqueue_style('nfl-styles', plugin_dir_url(__FILE__) . '../Styles/teams.css');

}

?>