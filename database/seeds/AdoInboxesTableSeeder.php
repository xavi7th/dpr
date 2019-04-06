<?php

use Illuminate\Database\Seeder;

class AdoInboxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ado_inboxes')->delete();
        
        \DB::table('ado_inboxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => '2',
                'from' => 'DPRST00003',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-09 23:26:13',
                'updated_at' => '2018-12-13 19:33:08',
            ),
            1 => 
            array (
                'id' => 2,
                'application_id' => '3',
                'from' => 'DPRST00003',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-13 20:29:07',
                'updated_at' => '2019-01-19 13:43:42',
            ),
            2 => 
            array (
                'id' => 3,
                'application_id' => '3',
                'from' => 'DPRST00005',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-21 08:10:13',
                'updated_at' => '2019-01-19 13:43:42',
            ),
            3 => 
            array (
                'id' => 4,
                'application_id' => '3',
                'from' => 'DPRST00005',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-21 10:28:58',
                'updated_at' => '2019-01-19 13:43:42',
            ),
            4 => 
            array (
                'id' => 5,
                'application_id' => '3',
                'from' => 'DPRST00003',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-21 14:48:02',
                'updated_at' => '2019-01-19 13:43:42',
            ),
            5 => 
            array (
                'id' => 6,
                'application_id' => '4',
                'from' => 'DPRST00003',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-23 13:58:44',
                'updated_at' => '2019-01-19 13:43:33',
            ),
            6 => 
            array (
                'id' => 7,
                'application_id' => '6',
                'from' => 'DPRST00003',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2019-01-19 22:28:23',
                'updated_at' => '2019-02-02 16:46:54',
            ),
            7 => 
            array (
                'id' => 8,
                'application_id' => '7',
                'from' => 'DPRST00003',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2019-01-20 01:26:09',
                'updated_at' => '2019-01-20 01:29:14',
            ),
            8 => 
            array (
                'id' => 9,
                'application_id' => '9',
                'from' => 'DPRST00009',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2019-01-31 09:32:00',
                'updated_at' => '2019-01-31 09:33:03',
            ),
        ));
        
        
    }
}