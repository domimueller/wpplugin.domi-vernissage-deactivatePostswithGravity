<?php

    /* Configuration*/


function set_gform_Configuration_deactivationPlugin($entry){
  
    $configuration_data = array();

    /* GLOBAL VARIABLES */
    $configuration_data['INSERAT_DEAKTIVIEREN_FORM_ID'] = 7;
    $configuration_data['INSERATE_AFTER_DEAKTIVIEREN_STATUS'] = 'PENDING';

    //Map gfrom entry IDs to Variable Names
    $configuration_data['insertion_sold'] = $entry[3];
    $configuration_data['insertion_updateDateTime'] = $entry['date_updated'];

return $configuration_data;
}
?>  

