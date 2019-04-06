<?php

use Illuminate\Database\Seeder;

class IssuedLtoLicensesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('issued_lto_licenses')->delete();
        
        \DB::table('issued_lto_licenses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => 'DPRAPPLICATION00023',
                'company_id' => 'DPRCOMP00003',
                'staff_id' => 'DPRST00007',
                'license_url' => 'desperados-iii-1920x1080-gamescom-2018-poster-4k-20045.jpg',
                'date_issued' => '2019-02-26 20:23:20',
                'expiry_date' => '2019-03-26 20:23:20',
                'created_at' => '2019-02-26 20:23:20',
                'updated_at' => '2019-03-03 02:21:59',
            ),
            1 => 
            array (
                'id' => 2,
                'application_id' => 'DPRAPPLICATION00020',
                'company_id' => 'DPRCOMP00001',
                'staff_id' => 'DPRST00007',
                'license_url' => 'food-menu-design.jpg',
                'date_issued' => '2019-03-03 07:05:58',
                'expiry_date' => '2021-03-03 07:05:58',
                'created_at' => '2019-03-03 07:05:58',
                'updated_at' => '2019-03-03 07:11:09',
            ),
        ));
        
        
    }
}