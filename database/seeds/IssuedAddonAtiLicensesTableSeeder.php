<?php

use Illuminate\Database\Seeder;

class IssuedAddonAtiLicensesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('issued_addon_ati_licenses')->delete();
        
        \DB::table('issued_addon_ati_licenses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => 'DPRAPPLICATION00024',
                'company_id' => 'DPRCOMP00004',
                'staff_id' => 'DPRST00007',
                'construction_report' => NULL,
                'date_issued' => '2019-02-12 19:24:17',
                'expiry_date' => '2019-08-12 19:24:17',
                'created_at' => '2019-02-12 19:24:17',
                'updated_at' => '2019-02-12 19:24:17',
            ),
        ));
        
        
    }
}