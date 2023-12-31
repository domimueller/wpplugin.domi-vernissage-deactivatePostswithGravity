<?php

$configuration_data = custom_set_gform_Configuration_deactivationPlugin();

add_action( 'gform_after_submission_' . $configuration_data['INSERAT_VERKAUFTMELDEN_FORM_ID'], 'custom_sold_post_content', 10, 2 );

function custom_deactivate_post_content( $entry, $form ) {
 
    global $post;


    // get data from gravity forms    
    $new_post = get_post($post->id);
    $configuration_data = custom_set_gform_Configuration_deactivationPlugin();

    // deactivation Reason is always verkauft, if this form is beeing submitted
    $deactivationReason = 'verkauft';
    
    /* #### Post Status ### */    
    $new_post->post_status = $configuration_data['INSERATE_AFTER_DEAKTIVIEREN_STATUS'];

    /* #### Post Time modified ### */        
    $new_post->post_modified = $configuration_data['insertion_updateDateTime'];
    $new_post->post_modified_gmt = get_gmt_from_date( $configuration_data['insertion_updateDateTime']);   
    

    update_post_meta( $new_post->ID, 'insertion_sold_status', $deactivationReason);


    
    wp_update_post( $new_post, true );

 
}
?>  
