<?php

use Illuminate\Database\Seeder;

class PressureTestLicensesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pressure_test_licenses')->delete();
        
        \DB::table('pressure_test_licenses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => 'DPRAPPLICATION00029',
                'company_id' => 'DPRCOMP00004',
                'staff_id' => 'DPRST00007',
                'license_url' => 'Chef-Petrus.jpg',
                'created_at' => '2019-03-05 21:41:59',
                'updated_at' => '2019-03-05 21:41:59',
            ),
        ));
        
        
    }
}