<?php

use Illuminate\Database\Seeder;

class HeadgasInboxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('headgas_inboxes')->delete();
        
        \DB::table('headgas_inboxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => '2',
                'from' => 'DPRST00004',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-12 11:14:36',
                'updated_at' => '2018-12-13 19:33:01',
            ),
            1 => 
            array (
                'id' => 2,
                'application_id' => '3',
                'from' => 'DPRST00004',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-13 20:41:05',
                'updated_at' => '2018-12-25 21:37:42',
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
                'created_at' => '2018-12-19 16:02:14',
                'updated_at' => '2018-12-25 21:37:42',
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
                'created_at' => '2018-12-20 17:06:27',
                'updated_at' => '2018-12-25 21:37:42',
            ),
            4 => 
            array (
                'id' => 5,
                'application_id' => '3',
                'from' => 'DPRST00006',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-21 08:03:55',
                'updated_at' => '2018-12-25 21:37:42',
            ),
            5 => 
            array (
                'id' => 6,
                'application_id' => '3',
                'from' => 'DPRST00004',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-21 10:28:42',
                'updated_at' => '2018-12-25 21:37:42',
            ),
            6 => 
            array (
                'id' => 7,
                'application_id' => '4',
                'from' => 'DPRST00004',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-23 13:58:51',
                'updated_at' => '2018-12-23 14:24:09',
            ),
            7 => 
            array (
                'id' => 8,
                'application_id' => '6',
                'from' => 'DPRST00004',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2019-01-19 22:32:24',
                'updated_at' => '2019-01-25 22:36:38',
            ),
            8 => 
            array (
                'id' => 9,
                'application_id' => '7',
                'from' => 'DPRST00004',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2019-01-20 01:26:23',
                'updated_at' => '2019-01-20 01:26:36',
            ),
            9 => 
            array (
                'id' => 10,
                'application_id' => '9',
                'from' => 'DPRST00004',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'false',
                'created_at' => '2019-01-31 09:33:03',
                'updated_at' => '2019-02-01 13:25:00',
            ),
        ));
        
        
    }
}