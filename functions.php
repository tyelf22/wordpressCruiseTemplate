<?php 

register_nav_menu('siteNavigation', 'Primary Navigation');


function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow">Read More...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

?>