<?php

use Illuminate\Database\Seeder;

class LtoLicenseRenewalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lto_license_renewals')->delete();
        
        \DB::table('lto_license_renewals')->insert(array (
            0 => 
            array (
                'id' => 2,
                'application_id' => 'DPRAPPLICATION00028',
                'comp_license_id' => 'DPRAPPLICATION00023',
                'marketer_id' => 'DPRMKT00008',
                'company_id' => 'DPRCOMP00003',
                'copy_of_last_expired_license' => 'yes',
                'copy_of_last_expired_license_location_url' => 'desperados-iii-1920x1080-gamescom-2018-poster-4k-20045.jpg',
                'previous_date_issued' => '2019-02-26 20:23:20',
                'previous_expiry_date' => '2019-03-26 20:23:20',
                'current_date_issued' => NULL,
                'current_expiry_date' => NULL,
                'created_at' => '2019-03-02 23:24:03',
                'updated_at' => '2019-03-02 23:24:03',
            ),
        ));
        
        
    }
}