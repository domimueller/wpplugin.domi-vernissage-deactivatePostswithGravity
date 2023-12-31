<?php

    /* Configuration*/


function custom_deactivate_gform_Mapping_Produktivumgebung(){

    $configuration_data = array();

    // From ID of Inserat bearbeiten
    $configuration_data['INSERAT_BEARBEITEN_FORM_ID'] = 8;
    $configuration_data['INSERATE_ERFASSEN_FORM_ID'] = 1;
    $configuration_data['insertion_sold_status'] = 3;
    $configuration_data['INSERAT_DEAKTIVIEREN_FORM_ID'] = 6;
    $configuration_data['INSERAT_VERKAUFTMELDEN_FORM_ID'] = 7;



    //Gform Field Mapping
    $configuration_data['insertion_sold_status'] = 3;
    $configuration_data['insertion_updateDateTime'] = 'date_updated';


return $configuration_data;
}
?>  

