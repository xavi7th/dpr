<?php

use Illuminate\Database\Seeder;

class ZopsconOutboxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('zopscon_outboxes')->delete();
        
        \DB::table('zopscon_outboxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => '2',
                'to' => 'DPRST00004',
                'role' => 'ADO',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2018-12-09 23:26:13',
                'updated_at' => '2018-12-09 23:26:13',
            ),
            1 => 
            array (
                'id' => 2,
                'application_id' => '3',
                'to' => 'DPRST00004',
                'role' => 'ADO',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-13 20:29:07',
                'updated_at' => '2018-12-13 20:29:07',
            ),
            2 => 
            array (
                'id' => 3,
                'application_id' => '3',
                'to' => 'DPRST00004',
                'role' => 'ADO',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-21 14:48:02',
                'updated_at' => '2018-12-21 14:48:02',
            ),
            3 => 
            array (
                'id' => 4,
                'application_id' => '4',
                'to' => 'DPRST00004',
                'role' => 'ADO',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2018-12-23 13:58:44',
                'updated_at' => '2018-12-23 13:58:44',
            ),
            4 => 
            array (
                'id' => 5,
                'application_id' => '6',
                'to' => 'DPRST00004',
                'role' => 'ADO',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2019-01-19 22:28:23',
                'updated_at' => '2019-01-19 22:28:23',
            ),
            5 => 
            array (
                'id' => 6,
                'application_id' => '7',
                'to' => 'DPRST00004',
                'role' => 'ADO',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2019-01-20 01:26:09',
                'updated_at' => '2019-01-20 01:26:09',
            ),
            6 => 
            array (
                'id' => 7,
                'application_id' => '9',
                'to' => 'DPRST00004',
                'role' => 'ADO',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2019-01-31 09:32:00',
                'updated_at' => '2019-01-31 09:32:00',
            ),
        ));
        
        
    }
}