<?php

$configuration_data = custom_set_gform_Configuration_deactivationPlugin ();

add_action( 'gform_after_submission_' . $configuration_data['INSERAT_DEAKTIVIEREN_FORM_ID'], 'custom_sold_post_content', 10, 2 );
function custom_sold_post_content( $entry, $form ) {
 
    global $post;


    // get data from gravity forms    
    $new_post = get_post($post->id);
    $configuration_data = custom_set_gform_Configuration_deactivationPlugin();
   
    if (isset($configuration_data['insertion_sold_status']) && !empty($configuration_data['insertion_sold_status'])):
        $deactivationReason = $entry[$configuration_data['insertion_sold_status']];
    endif; 



    /* #### Post Status ### */    
    $new_post->post_status = $configuration_data['INSERATE_AFTER_DEAKTIVIEREN_STATUS'];

    /* #### Post Time modified ### */        
    $new_post->post_modified = $entry[$configuration_data['insertion_updateDateTime']];
    $new_post->post_modified_gmt = get_gmt_from_date( $entry[$configuration_data['insertion_updateDateTime']]);   
    

    update_post_meta( $new_post->ID, 'insertion_sold_status', $deactivationReason);

    
    wp_update_post( $new_post, true );

 
}
?>  
