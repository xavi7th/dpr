<?php

use Illuminate\Database\Seeder;

class StaffOutboxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staff_outboxes')->delete();
        
        \DB::table('staff_outboxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => '2',
                'to' => 'DPRST00007',
                'role' => 'Staff',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2018-12-13 19:16:03',
                'updated_at' => '2018-12-13 19:16:03',
            ),
            1 => 
            array (
                'id' => 2,
                'application_id' => '3',
                'to' => 'DPRST00007',
                'role' => 'Staff',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-13 20:50:28',
                'updated_at' => '2018-12-13 20:50:28',
            ),
            2 => 
            array (
                'id' => 3,
                'application_id' => '3',
                'to' => 'DPRST00006',
                'role' => 'Team Lead',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-13 21:04:08',
                'updated_at' => '2018-12-13 21:04:08',
            ),
            3 => 
            array (
                'id' => 4,
                'application_id' => '3',
                'to' => 'DPRST00006',
                'role' => 'Team Lead',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-19 14:37:15',
                'updated_at' => '2018-12-19 14:37:15',
            ),
            4 => 
            array (
                'id' => 5,
                'application_id' => '3',
                'to' => 'DPRST00006',
                'role' => 'Team Lead',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-19 15:24:07',
                'updated_at' => '2018-12-19 15:24:07',
            ),
            5 => 
            array (
                'id' => 6,
                'application_id' => '4',
                'to' => 'DPRST00006',
                'role' => 'Team Lead',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2018-12-23 14:23:41',
                'updated_at' => '2018-12-23 14:23:41',
            ),
            6 => 
            array (
                'id' => 8,
                'application_id' => '4',
                'to' => 'DPRST00006',
                'role' => 'Team Lead',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2018-12-24 21:57:48',
                'updated_at' => '2018-12-24 21:57:48',
            ),
            7 => 
            array (
                'id' => 9,
                'application_id' => '6',
                'to' => 'DPRST00006',
                'role' => 'Team Lead',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2019-01-25 19:03:55',
                'updated_at' => '2019-01-25 19:03:55',
            ),
        ));
        
        
    }
}