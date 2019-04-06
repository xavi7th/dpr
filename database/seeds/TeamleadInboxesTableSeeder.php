<?php

use Illuminate\Database\Seeder;

class TeamleadInboxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teamlead_inboxes')->delete();
        
        \DB::table('teamlead_inboxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => '2',
                'from' => 'DPRST00005',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-12 11:14:56',
                'updated_at' => '2018-12-13 20:41:32',
            ),
            1 => 
            array (
                'id' => 3,
                'application_id' => '3',
                'from' => 'DPRST00005',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-13 20:41:15',
                'updated_at' => '2018-12-25 21:26:35',
            ),
            2 => 
            array (
                'id' => 5,
                'application_id' => '3',
                'from' => 'DPRST00007',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-13 21:04:08',
                'updated_at' => '2018-12-25 21:26:35',
            ),
            3 => 
            array (
                'id' => 6,
                'application_id' => '3',
                'from' => 'DPRST00007',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-19 14:37:15',
                'updated_at' => '2018-12-25 21:26:35',
            ),
            4 => 
            array (
                'id' => 7,
                'application_id' => '3',
                'from' => 'DPRST00007',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-19 15:24:07',
                'updated_at' => '2018-12-25 21:26:35',
            ),
            5 => 
            array (
                'id' => 8,
                'application_id' => '3',
                'from' => 'DPRST00005',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-20 17:06:01',
                'updated_at' => '2018-12-25 21:26:35',
            ),
            6 => 
            array (
                'id' => 9,
                'application_id' => '3',
                'from' => 'DPRST00005',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-20 17:07:25',
                'updated_at' => '2018-12-25 21:26:35',
            ),
            7 => 
            array (
                'id' => 10,
                'application_id' => '4',
                'from' => 'DPRST00005',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-23 13:59:13',
                'updated_at' => '2018-12-25 21:32:05',
            ),
            8 => 
            array (
                'id' => 11,
                'application_id' => '4',
                'from' => 'DPRST00007',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-23 14:23:41',
                'updated_at' => '2018-12-25 21:32:05',
            ),
            9 => 
            array (
                'id' => 13,
                'application_id' => '4',
                'from' => 'DPRST00007',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-24 21:57:48',
                'updated_at' => '2018-12-25 21:32:05',
            ),
            10 => 
            array (
                'id' => 14,
                'application_id' => '6',
                'from' => 'DPRST00005',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2019-01-19 22:33:00',
                'updated_at' => '2019-02-02 20:11:18',
            ),
            11 => 
            array (
                'id' => 15,
                'application_id' => '7',
                'from' => 'DPRST00005',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2019-01-20 01:26:36',
                'updated_at' => '2019-01-21 21:39:28',
            ),
            12 => 
            array (
                'id' => 16,
                'application_id' => '6',
                'from' => 'DPRST00007',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'false',
                'created_at' => '2019-01-25 19:03:55',
                'updated_at' => '2019-02-02 20:11:18',
            ),
        ));
        
        
    }
}