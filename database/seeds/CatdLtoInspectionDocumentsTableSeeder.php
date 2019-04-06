<?php

use Illuminate\Database\Seeder;

class CatdLtoInspectionDocumentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catd_lto_inspection_documents')->delete();
        
        \DB::table('catd_lto_inspection_documents')->insert(array (
            0 => 
            array (
                'id' => 2,
                'application_id' => 'DPRAPPLICATION00026',
                'marketer_id' => 'DPRMKT00008',
                'company_id' => NULL,
                'letter_form_sponsoring_company' => 'yes',
                'verification_inspection' => 'yes',
                'bankdraft_of_statutory_fees' => 'yes',
                'application_letter' => 'yes',
                'certificate_of_incorporation' => 'yes',
                'letter_form_sponsoring_company_location_url' => 'f8bfe4e908bb8b28.jpg',
                'verification_inspection_location_url' => 'inspiration.jpg',
                'bankdraft_of_statutory_fees_location_url' => '8G53dVXyoPjkMfx2AkBJ8M.jpg',
                'application_letter_location_url' => 'viska-creative-one-page-theme.jpg',
                'certificate_of_incorporation_location_url' => 'untitled-1-copy-3fghf.png',
                'letter_form_sponsoring_company_reason' => NULL,
                'verification_inspection_reason' => NULL,
                'bankdraft_of_statutory_fees_reason' => NULL,
                'application_letter_reason' => NULL,
                'certificate_of_incorporation_reason' => NULL,
                'letter_form_sponsoring_company_location_check' => 'true',
                'verification_inspection_location_check' => 'true',
                'bankdraft_of_statutory_fees_location_check' => 'true',
                'application_letter_location_check' => 'true',
                'certificate_of_incorporation_location_check' => 'true',
                'created_at' => '2019-02-13 05:53:46',
                'updated_at' => '2019-02-13 15:47:17',
            ),
        ));
        
        
    }
}