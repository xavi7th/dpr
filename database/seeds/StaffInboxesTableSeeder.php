<?php

use Illuminate\Database\Seeder;

class StaffInboxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staff_inboxes')->delete();
        
        \DB::table('staff_inboxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => '2',
                'from' => 'DPRST00006',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-12 11:15:10',
                'updated_at' => '2019-01-31 05:17:52',
            ),
            1 => 
            array (
                'id' => 2,
                'application_id' => '3',
                'from' => 'DPRST00006',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-13 20:41:48',
                'updated_at' => '2019-01-31 05:24:00',
            ),
            2 => 
            array (
                'id' => 3,
                'application_id' => '3',
                'from' => 'DPRST00006',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-19 14:25:55',
                'updated_at' => '2019-01-31 05:24:00',
            ),
            3 => 
            array (
                'id' => 4,
                'application_id' => '3',
                'from' => 'DPRST00006',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-19 15:23:21',
                'updated_at' => '2019-01-31 05:24:00',
            ),
            4 => 
            array (
                'id' => 5,
                'application_id' => '4',
                'from' => 'DPRST00006',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-23 14:00:45',
                'updated_at' => '2019-01-25 20:30:58',
            ),
            5 => 
            array (
                'id' => 6,
                'application_id' => '6',
                'from' => 'DPRST00006',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2019-01-19 22:35:04',
                'updated_at' => '2019-01-26 16:31:37',
            ),
            6 => 
            array (
                'id' => 7,
                'application_id' => '7',
                'from' => 'DPRST00006',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'false',
                'created_at' => '2019-01-20 01:27:26',
                'updated_at' => '2019-01-31 06:24:55',
            ),
        ));
        
        
    }
}