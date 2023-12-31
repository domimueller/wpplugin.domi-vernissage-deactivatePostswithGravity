<?php

    /* Configuration*/


function custom_set_gform_Configuration_deactivationPlugin(){
  
    $configuration_data = array();

    // Load the Testdata or Produktivdata, depending on Setting in Options-Page
    $isTest = get_field('isTest', 'option');
    
    if ($isTest == true) {
        $configuration_data = custom_deactivate_gform_Mapping_Testumgebung();
    }
    else{
        $configuration_data = custom_deactivate_gform_Mapping_Produktivumgebung();
    }

    /* GLOBAL VARIABLES */;
    $configuration_data['INSERATE_AFTER_DEAKTIVIEREN_STATUS'] = 'PENDING';
    $configuration_data['INSERATE_AFTER_BEARBEITEN_STATUS'] = 'DRAFT';


return $configuration_data;
}
?>  

