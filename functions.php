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

// Hook for adding text to product archive page.
add_action('woocommerce_before_shop_loop', 'add_text_product_archive');

function add_text_product_archive() {
    echo '<h1>Här ser du produkterna:</h1>';
}


add_action('wp', 'remove_storefront_credits');

function remove_storefront_credits() {
    // Hook for removing the built in footer-text from Storefront.
    remove_action('storefront_footer', 'storefront_credit', 20);
}


// Hook for the footer, low priority.
add_action('storefront_footer', 'add_footer_text', 70);

function add_footer_text() {
    echo '<p style="margin-top:20px; text-align:center;">&copy 2022 Blixten</p>';
}


// Hook for changing the text on the admin-page. 
add_filter('admin_footer_text', 'change_footer_admin');

function change_footer_admin () {
    // Changing the text in the admin panel.
    echo 'Utvecklad med <span style="font-size:18px;">&#129505;</span> av <a href="mailto:hugo@capellium.se">Hugo Bengtsson</a> för Medieinstitutet.';
}

?>