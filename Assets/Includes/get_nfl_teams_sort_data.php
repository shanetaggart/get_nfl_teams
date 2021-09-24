<?php

//Sort the data based on user input
function get_nfl_teams_sort_data($sort_type){
	
	$sort_type = $_GET['sort_type'];
	$teams = get_nfl_teams_get_data();
	
	switch ($sort_type) {
		case 'division':
			$teams = wp_list_sort($teams, 'division');
			return $teams;
			break;
		case 'conference':
			$teams = wp_list_sort($teams, 'conference');
			return $teams;
			break;
		default:
			$teams = wp_list_sort($teams, 'display_name');
			return $teams;
			break;
	}
	
}

?>