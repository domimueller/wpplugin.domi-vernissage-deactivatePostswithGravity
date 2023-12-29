<?php



add_action( 'gform_after_submission_7', 'custom_deactivate_post_content', 10, 2 );
function custom_deactivate_post_content( $entry, $form ) {
 
    global $post;


    // get data from gravity forms    
    $configuration_data = set_gform_Configuration_deactivationPlugin($entry);
    $new_post = get_post($post->id);


    
    /* #### Post Title ### */    
    $new_post->post_title = 'verkauft: ' . $new_post->post_title;
    $new_post->post_name = $configuration_data['insertion_title'];


    /* #### Post Status ### */    
    $new_post->post_status = $configuration_data['INSERATE_AFTER_DEAKTIVIEREN_STATUS'];

    /* #### Post Time modified ### */        
    $new_post->post_modified = $configuration_data['insertion_updateDateTime'];
    $new_post->post_modified_gmt = get_gmt_from_date( $configuration_data['insertion_updateDateTime']);   
    

    var_dump(get_post_meta($new_post->ID));exit();
    update_post_meta( $new_post->ID, 'insertion_sold', 'verkauft' );
        update_post_meta( $new_post->ID, 'insertion_height', '91' );

    
    wp_update_post( $new_post, true );

 
}
?>  
