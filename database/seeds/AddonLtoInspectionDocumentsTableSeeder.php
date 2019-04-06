<?php

use Illuminate\Database\Seeder;

class AddonLtoInspectionDocumentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('addon_lto_inspection_documents')->delete();
        
        \DB::table('addon_lto_inspection_documents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => 'DPRAPPLICATION00025',
                'marketer_id' => 'DPRMKT00008',
                'company_id' => NULL,
                'completed_application_form' => 'yes',
                'bankdraft_of_statutory_fees' => 'no',
                'fire_services_report_indicating_the_lpg_addon' => 'no',
                'photocopy_of_approval_to_install_lpg' => 'no',
                'current_weight_measures_cert_of_verification' => 'null',
                'application_letter_addressed_to_the_controller' => 'null',
                'current_pressure_test_report_certificate' => 'null',
                'current_three_years_income_tax_clearance' => 'no',
                'appropriate_plant_photography' => 'yes',
                'completed_application_form_location_url' => 'e6f6.162713.jpg',
                'bankdraft_of_statutory_fees_location_url' => 'null',
                'fire_services_report_indicating_the_lpg_addon_location_url' => 'null',
                'photocopy_of_approval_to_install_lpg_location_url' => 'null',
                'current_weight_measures_cert_of_verification_location_url' => 'null',
                'application_letter_addressed_to_the_controller_location_url' => 'null',
                'current_pressure_test_report_certificate_location_url' => 'null',
                'current_three_years_income_tax_clearance_location_url' => 'null',
                'appropriate_plant_photography_location_url' => '1920x1080_Abstract_025120152.jpg',
                'completed_application_form_reason' => NULL,
                'bankdraft_of_statutory_fees_reason' => NULL,
                'fire_services_report_indicating_the_lpg_addon_reason' => NULL,
                'photocopy_of_approval_to_install_lpg_reason' => NULL,
                'current_weight_measures_cert_of_verification_reason' => NULL,
                'application_letter_addressed_to_the_controller_reason' => NULL,
                'current_pressure_test_report_certificate_reason' => NULL,
                'current_three_years_income_tax_clearance_reason' => NULL,
                'appropriate_plant_photography_reason' => NULL,
                'completed_application_form_location_check' => 'true',
                'bankdraft_of_statutory_fees_location_check' => NULL,
                'fire_services_report_indicating_the_lpg_addon_location_check' => NULL,
                'photocopy_of_approval_to_install_lpg_location_check' => NULL,
                'current_weight_measures_cert_of_verification_location_check' => NULL,
                'application_letter_addressed_to_the_controller_location_check' => NULL,
                'current_pressure_test_report_certificate_location_check' => NULL,
                'current_three_years_income_tax_clearance_location_check' => NULL,
                'appropriate_plant_photography_location_check' => 'true',
                'created_at' => '2019-02-12 06:38:56',
                'updated_at' => '2019-02-12 18:31:34',
            ),
        ));
        
        
    }
}