<?php

use Illuminate\Database\Seeder;

class TeamleadOutboxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teamlead_outboxes')->delete();
        
        \DB::table('teamlead_outboxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => '2',
                'to' => 'DPRST00007',
                'role' => 'Staff',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2018-12-12 11:15:10',
                'updated_at' => '2018-12-12 11:15:10',
            ),
            1 => 
            array (
                'id' => 2,
                'application_id' => '3',
                'to' => 'DPRST00007',
                'role' => 'Staff',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-13 20:41:48',
                'updated_at' => '2018-12-13 20:41:48',
            ),
            2 => 
            array (
                'id' => 3,
                'application_id' => '3',
                'to' => 'DPRST00007',
                'role' => 'Staff',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-19 14:25:55',
                'updated_at' => '2018-12-19 14:25:55',
            ),
            3 => 
            array (
                'id' => 4,
                'application_id' => '3',
                'to' => 'DPRST00007',
                'role' => 'Staff',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-19 15:23:21',
                'updated_at' => '2018-12-19 15:23:21',
            ),
            4 => 
            array (
                'id' => 6,
                'application_id' => '3',
                'to' => 'DPRST00007',
                'role' => 'Staff',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-19 16:02:13',
                'updated_at' => '2018-12-19 16:02:13',
            ),
            5 => 
            array (
                'id' => 7,
                'application_id' => '3',
                'to' => 'DPRST00005',
                'role' => 'Head Gas M&G Lagos',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-20 17:06:27',
                'updated_at' => '2018-12-20 17:06:27',
            ),
            6 => 
            array (
                'id' => 8,
                'application_id' => '3',
                'to' => 'DPRST00005',
                'role' => 'Head Gas M&G Lagos',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-21 08:03:55',
                'updated_at' => '2018-12-21 08:03:55',
            ),
            7 => 
            array (
                'id' => 9,
                'application_id' => '4',
                'to' => 'DPRST00007',
                'role' => 'Staff',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2018-12-23 14:00:45',
                'updated_at' => '2018-12-23 14:00:45',
            ),
            8 => 
            array (
                'id' => 10,
                'application_id' => '6',
                'to' => 'DPRST00007',
                'role' => 'Staff',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2019-01-19 22:35:04',
                'updated_at' => '2019-01-19 22:35:04',
            ),
            9 => 
            array (
                'id' => 11,
                'application_id' => '7',
                'to' => 'DPRST00007',
                'role' => 'Staff',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2019-01-20 01:27:26',
                'updated_at' => '2019-01-20 01:27:26',
            ),
        ));
        
        
    }
}