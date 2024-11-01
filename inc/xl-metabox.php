<?php

function xl_client_info(){
    add_meta_box(
        'client_info',
        'Client Info',
        'xl_client_info_box',
        'testimonial',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'xl_client_info' );

function xl_client_info_box($post){

    // Add a nonce field so we can check for it later.
    wp_nonce_field( 'xl_save_meta_box_data', 'xl_meta_box_nonce' );

    /*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
    $value = get_post_meta( $post->ID, '_xl_country', true );

    ?>

    <label for="my_meta_box_text">Country: </label>
    <input type="text" name="xl_country" id="xl_country" value="<?php echo esc_attr( $value ); ?>" />

    <?php
}

function xl_save_meta_box_data( $post_id ) {

    // Check if our nonce is set.
    if ( ! isset( $_POST['xl_meta_box_nonce'] ) ) {
        return;
    }

    // Verify that the nonce is valid.
    if ( ! wp_verify_nonce( $_POST['xl_meta_box_nonce'], 'xl_save_meta_box_data' ) ) {
        return;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check the user's permissions.
    if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

        if ( ! current_user_can( 'edit_page', $post_id ) ) {
            return;
        }

    } else {

        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }

    /* OK, it's safe for us to save the data now. */

    // Make sure that it is set.
    if ( ! isset( $_POST['xl_country'] ) ) {
        return;
    }

    // Sanitize user input.
    $my_data = sanitize_text_field( $_POST['xl_country'] );

    // Update the meta field in the database.
    update_post_meta( $post_id, '_xl_country', $my_data );

}
add_action('save_post', 'xl_save_meta_box_data');