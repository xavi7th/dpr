<?php

use Illuminate\Database\Seeder;

class HeadgasOutboxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('headgas_outboxes')->delete();
        
        \DB::table('headgas_outboxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => '2',
                'to' => 'DPRST00006',
                'role' => 'Team Lead',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2018-12-12 11:14:56',
                'updated_at' => '2018-12-12 11:14:56',
            ),
            1 => 
            array (
                'id' => 2,
                'application_id' => '3',
                'to' => 'DPRST00006',
                'role' => 'Team Lead',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-13 20:41:15',
                'updated_at' => '2018-12-13 20:41:15',
            ),
            2 => 
            array (
                'id' => 3,
                'application_id' => '3',
                'to' => 'DPRST00006',
                'role' => 'Team Lead',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-20 17:06:01',
                'updated_at' => '2018-12-20 17:06:01',
            ),
            3 => 
            array (
                'id' => 4,
                'application_id' => '3',
                'to' => 'DPRST00006',
                'role' => 'Team Lead',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-20 17:07:25',
                'updated_at' => '2018-12-20 17:07:25',
            ),
            4 => 
            array (
                'id' => 5,
                'application_id' => '3',
                'to' => 'DPRST00004',
                'role' => 'ADO',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-21 08:10:13',
                'updated_at' => '2018-12-21 08:10:13',
            ),
            5 => 
            array (
                'id' => 6,
                'application_id' => '3',
                'to' => 'DPRST00004',
                'role' => 'ADO',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-21 10:28:58',
                'updated_at' => '2018-12-21 10:28:58',
            ),
            6 => 
            array (
                'id' => 7,
                'application_id' => '4',
                'to' => 'DPRST00006',
                'role' => 'Team Lead',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2018-12-23 13:59:13',
                'updated_at' => '2018-12-23 13:59:13',
            ),
            7 => 
            array (
                'id' => 8,
                'application_id' => '6',
                'to' => 'DPRST00006',
                'role' => 'Team Lead',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2019-01-19 22:33:00',
                'updated_at' => '2019-01-19 22:33:00',
            ),
            8 => 
            array (
                'id' => 9,
                'application_id' => '7',
                'to' => 'DPRST00006',
                'role' => 'Team Lead',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2019-01-20 01:26:36',
                'updated_at' => '2019-01-20 01:26:36',
            ),
        ));
        
        
    }
}