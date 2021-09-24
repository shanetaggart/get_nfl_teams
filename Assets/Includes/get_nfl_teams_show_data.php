<?php

//Create the HTML for displaying the data from get_nfl_teams_get_data()
function get_nfl_teams_show_data(){
	
	$teams = get_nfl_teams_sort_data($get_nfl_teams_sort_type);
	$html_body = '';
	$html_body = $html_body . '<section class="nfl_teams">
									<label>Sort By:</label>
									<a href="http://localhost/wordpress?sort_type=city"><button class="nfl_sort_button">City</button></a>
									<a href="http://localhost/wordpress?sort_type=conference"><button class="nfl_sort_button">Conference</button></a>
									<a href="http://localhost/wordpress?sort_type=division"><button class="nfl_sort_button">Division</button></a>
								</section>';
	
	$html_body = $html_body . '<section class="nfl_teams">';
	
	//Create a card for each team in the object
	foreach($teams as $team){
		
		$name = $team->name;
		$nickname = $team->nickname;
		$display_name = $team->display_name;
		$conference = $team->conference;
		$division = $team->division;
		$image = plugin_dir_url(__FILE__) . '../../Images/' . $nickname . '.png';
	
		$html_body = $html_body .   '<div class="nfl_card">
                                        <div class="nfl_card_front">';
		$html_body = $html_body .           '<img src="' . $image . '" />';
		$html_body = $html_body .           '<h3>' . $nickname . '</h3>
                                        </div>
                                        <div class="nfl_card_back">';
		$html_body = $html_body .           '<p><strong>City: </strong>' . $display_name . '</p>';
		$html_body = $html_body .           '<p><strong>Conference: </strong>' . $conference . '</p>';
		$html_body = $html_body .           '<p><strong>Division: </strong>' . $division . '</p>';
		$html_body = $html_body .       '</div>
                                    </div>';
		
	}
		
	$html_body = $html_body . '</section>';
	return $html_body;

}

?>