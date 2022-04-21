<?php


// Hook for changing the text on the admin-page. 
add_filter('admin_footer_text', 'change_footer_admin');


function change_footer_admin () {
    
    // Changing the text in the admin panel.
    echo 'Utvecklad med <span style="font-size:18px;">&#129505;</span> av <a href="mailto:hugo@capellium.se">Hugo Bengtsson</a> för Medieinstitutet.';

}

?>