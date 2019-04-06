<?php

use Illuminate\Database\Seeder;

class IssuedAtcLicensesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('issued_atc_licenses')->delete();
        
        \DB::table('issued_atc_licenses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => 'DPRAPPLICATION00003',
                'company_id' => 'DPRCOMP00001',
                'staff_id' => 'DPRST00007',
                'implementation_schedule' => NULL,
                'license_url' => NULL,
                'date_issued' => '2018-12-21 15:00:28',
                'expiry_date' => '2019-01-21 15:00:28',
                'created_at' => '2018-12-21 15:00:28',
                'updated_at' => '2018-12-21 15:00:28',
            ),
            1 => 
            array (
                'id' => 2,
                'application_id' => 'DPRAPPLICATION00012',
                'company_id' => 'DPRCOMP00004',
                'staff_id' => 'DPRST00007',
                'implementation_schedule' => NULL,
                'license_url' => NULL,
                'date_issued' => '2019-02-03 17:15:39',
                'expiry_date' => '2019-08-03 02:03:03',
                'created_at' => '2019-02-03 17:15:39',
                'updated_at' => '2019-02-03 17:15:39',
            ),
            2 => 
            array (
                'id' => 3,
                'application_id' => 'DPRAPPLICATION00015',
                'company_id' => 'DPRCOMP00003',
                'staff_id' => 'DPRST00007',
                'implementation_schedule' => NULL,
                'license_url' => NULL,
                'date_issued' => '2019-02-04 21:01:08',
                'expiry_date' => '2019-08-04 21:01:08',
                'created_at' => '2019-02-04 21:01:08',
                'updated_at' => '2019-02-04 21:01:08',
            ),
            3 => 
            array (
                'id' => 4,
                'application_id' => 'DPRAPPLICATION00017',
                'company_id' => 'DPRCOMP00003',
                'staff_id' => 'DPRST00007',
                'implementation_schedule' => NULL,
                'license_url' => NULL,
                'date_issued' => '2019-02-04 23:49:26',
                'expiry_date' => '2019-08-04 23:49:26',
                'created_at' => '2019-02-04 23:49:26',
                'updated_at' => '2019-02-04 23:49:26',
            ),
            4 => 
            array (
                'id' => 5,
                'application_id' => 'DPRAPPLICATION00021',
                'company_id' => 'DPRCOMP00003',
                'staff_id' => 'DPRST00007',
                'implementation_schedule' => NULL,
                'license_url' => NULL,
                'date_issued' => '2019-02-06 23:54:58',
                'expiry_date' => '2019-08-06 23:54:58',
                'created_at' => '2019-02-06 23:54:58',
                'updated_at' => '2019-02-06 23:54:58',
            ),
            5 => 
            array (
                'id' => 6,
                'application_id' => 'DPRAPPLICATION00027',
                'company_id' => 'DPRCOMP00004',
                'staff_id' => 'DPRST00007',
                'implementation_schedule' => NULL,
                'license_url' => NULL,
                'date_issued' => '2019-03-02 20:08:11',
                'expiry_date' => '2019-09-02 20:08:11',
                'created_at' => '2019-03-02 20:08:11',
                'updated_at' => '2019-03-02 20:08:11',
            ),
            6 => 
            array (
                'id' => 7,
                'application_id' => 'DPRAPPLICATION00031',
                'company_id' => 'DPRCOMP00003',
                'staff_id' => 'DPRST00007',
                'implementation_schedule' => 'detailsprint.pdf',
                'license_url' => NULL,
                'date_issued' => '2019-03-09 13:13:24',
                'expiry_date' => '2020-09-10 11:20:24',
                'created_at' => '2019-03-09 13:13:24',
                'updated_at' => '2019-03-10 11:20:24',
            ),
            7 => 
            array (
                'id' => 8,
                'application_id' => 'DPRAPPLICATION00032',
                'company_id' => 'DPRCOMP00003',
                'staff_id' => 'DPRST00007',
                'implementation_schedule' => 'scarves-hp-gq-6feb18_getty_b.jpg',
                'license_url' => NULL,
                'date_issued' => '2019-03-17 11:43:30',
                'expiry_date' => '2020-09-17 11:45:53',
                'created_at' => '2019-03-17 11:43:30',
                'updated_at' => '2019-03-17 11:45:53',
            ),
        ));
        
        
    }
}