<?php 
function page_content() {
	global $post;
	switch (get_the_title()) {
		case CONTACT:
			break;
		case DONORS:

			break;
		case DONORS_PROFILE:

			break;
		case FAQs:

			break;
		case GAMER_PROFILE:

			break;
		case GAMERS:
			if (is_user_logged_in()) {
				wp_redirect ( home_url("/gamer-profile/") );
				exit;
			}
			break;
		case HOME:
			
			break;
		case TEAM:
			
			break;
		case THE_PROJECT:
			
			break;
	}
}
?>