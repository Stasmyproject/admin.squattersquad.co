<?php
// Перенаправление до любого вывода на экран
//if ( is_user_logged_in() ) {
//    wp_redirect( home_url('/dashboard') );
//} else {
//    wp_redirect( home_url('/login') );
//}
//exit;
//

add_action('template_redirect', function () {
    if (is_front_page() && !is_admin()) {
        wp_redirect(site_url('/home-landing/'));
        exit;
    }
});
?>