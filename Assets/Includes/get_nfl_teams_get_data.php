<?php

//Fetch and return data from the API
function get_nfl_teams_get_data() {

	$url = 'http://delivery.chalk247.com/team_list/NFL.JSON?api_key=74db8efa2a6db279393b433d97c2bc843f8e32b0';
	$response = wp_remote_get($url);
	$data = json_decode($response['body']);
	$teams = $data->results->data->team;
	return $teams;

}

?>