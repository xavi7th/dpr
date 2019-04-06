<?php

use Illuminate\Database\Seeder;

class AddonAtiInspectionDocumentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('addon_ati_inspection_documents')->delete();
        
        \DB::table('addon_ati_inspection_documents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => 'DPRAPPLICATION00024',
                'marketer_id' => 'DPRMKT00008',
                'company_id' => NULL,
                'suitability_inspection_of_proposed_site' => 'yes',
                'copy_of_current_storage_and_sales_license' => 'yes',
                'retail_outlet_as_built_layout_drawing' => 'yes',
                'proposed_layout_drawing_for_the_lpg_addon' => 'no',
                'fire_services_report_indicating_the_lpg_addon' => 'yes',
                'environmental_evaluation_report' => 'null',
                'relevant_town_planning_approval' => 'null',
                'application_letter_addressed_to_the_controller' => 'yes',
                'suitability_inspection_of_proposed_site_location_url' => 'NnzxG4S.jpg',
                'copy_of_current_storage_and_sales_license_location_url' => 'mastaace.jpg',
                'retail_outlet_as_built_layout_drawing_location_url' => 'oberhofer-4f904aa5577a0.jpg',
                'proposed_layout_drawing_for_the_lpg_addon_location_url' => 'null',
                'fire_services_report_indicating_the_lpg_addon_location_url' => 'park_autumn_trees_117202_1920x1080.jpg',
                'environmental_evaluation_report_location_url' => 'null',
                'relevant_town_planning_approval_location_url' => 'null',
                'application_letter_addressed_to_the_controller_location_url' => 'godfather_marlon_brando_don_vito_corleone_black_rose_740_1920x1080.jpg',
                'suitability_inspection_of_proposed_site_reason' => NULL,
                'copy_of_current_storage_and_sales_license_reason' => NULL,
                'retail_outlet_as_built_layout_drawing_reason' => NULL,
                'proposed_layout_drawing_for_the_lpg_addon_reason' => NULL,
                'fire_services_report_indicating_the_lpg_addon_reason' => NULL,
                'environmental_evaluation_report_reason' => NULL,
                'relevant_town_planning_approval_reason' => NULL,
                'application_letter_addressed_to_the_controller_reason' => NULL,
                'suitability_inspection_of_proposed_site_location_check' => 'true',
                'copy_of_current_storage_and_sales_license_location_check' => 'true',
                'retail_outlet_as_built_layout_drawing_location_check' => 'true',
                'proposed_layout_drawing_for_the_lpg_addon_location_check' => 'true',
                'fire_services_report_indicating_the_lpg_addon_location_check' => 'true',
                'environmental_evaluation_report_location_check' => 'true',
                'relevant_town_planning_approval_location_check' => 'true',
                'application_letter_addressed_to_the_controller_location_check' => 'true',
                'created_at' => '2019-02-11 21:31:10',
                'updated_at' => '2019-02-12 18:05:39',
            ),
        ));
        
        
    }
}