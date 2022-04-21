<?php


add_action('wp', 'remove_cart_fields');

function remove_cart_fields() {

    // Checking if the user is on the checkout page.
    if(is_checkout()) {

        // Hook for the checkout fields.
        add_filter('woocommerce_checkout_fields', 'hb_override_checkout_fields');

        function hb_override_checkout_fields($fields) {

            // Removing the fields below.
            unset(
                $fields['billing']['billing_address_2'],
                $fields['billing']['billing_company'],
                $fields['shipping']['shipping_company'],
                $fields['shipping']['shipping_address_2']

            );

            // Returning the fields.
            return $fields;
        }
    }

}


add_action( 'wp', 'remove_storefront_credits' );

function remove_storefront_credits() {
    // Hook for removing the built in footer-text from Storefront.
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
}


// Hook for changing the text on the admin-page. 
add_filter('admin_footer_text', 'change_footer_admin');

function change_footer_admin () {
    // Changing the text in the admin panel.
    echo 'Utvecklad med <span style="font-size:18px;">&#129505;</span> av <a href="mailto:hugo@capellium.se">Hugo Bengtsson</a> för Medieinstitutet.';
}

?>