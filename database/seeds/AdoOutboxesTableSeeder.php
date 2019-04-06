<?php

use Illuminate\Database\Seeder;

class AdoOutboxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ado_outboxes')->delete();
        
        \DB::table('ado_outboxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => '2',
                'to' => 'DPRST00005',
                'role' => 'Head Gas M&G Lagos',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2018-12-12 11:14:36',
                'updated_at' => '2018-12-12 11:14:36',
            ),
            1 => 
            array (
                'id' => 2,
                'application_id' => '3',
                'to' => 'DPRST00005',
                'role' => 'Head Gas M&G Lagos',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-13 20:41:05',
                'updated_at' => '2018-12-13 20:41:05',
            ),
            2 => 
            array (
                'id' => 3,
                'application_id' => '3',
                'to' => 'DPRST00005',
                'role' => 'Head Gas M&G Lagos',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-21 10:28:42',
                'updated_at' => '2018-12-21 10:28:42',
            ),
            3 => 
            array (
                'id' => 4,
                'application_id' => '3',
                'to' => 'DPRST00003',
                'role' => 'ZOPSCON',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-21 10:29:42',
                'updated_at' => '2018-12-21 10:29:42',
            ),
            4 => 
            array (
                'id' => 5,
                'application_id' => '3',
                'to' => 'DPRST00003',
                'role' => 'ZOPSCON',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-21 10:30:32',
                'updated_at' => '2018-12-21 10:30:32',
            ),
            5 => 
            array (
                'id' => 6,
                'application_id' => '3',
                'to' => 'DPRST00003',
                'role' => 'ZOPSCON',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'created_at' => '2018-12-21 14:48:22',
                'updated_at' => '2018-12-21 14:48:22',
            ),
            6 => 
            array (
                'id' => 7,
                'application_id' => '4',
                'to' => 'DPRST00005',
                'role' => 'Head Gas M&G Lagos',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2018-12-23 13:58:51',
                'updated_at' => '2018-12-23 13:58:51',
            ),
            7 => 
            array (
                'id' => 8,
                'application_id' => '6',
                'to' => 'DPRST00005',
                'role' => 'Head Gas M&G Lagos',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2019-01-19 22:32:24',
                'updated_at' => '2019-01-19 22:32:24',
            ),
            8 => 
            array (
                'id' => 9,
                'application_id' => '7',
                'to' => 'DPRST00005',
                'role' => 'Head Gas M&G Lagos',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2019-01-20 01:26:23',
                'updated_at' => '2019-01-20 01:26:23',
            ),
            9 => 
            array (
                'id' => 10,
                'application_id' => '9',
                'to' => 'DPRST00005',
                'role' => 'Head Gas M&G Lagos',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'created_at' => '2019-01-31 09:33:03',
                'updated_at' => '2019-01-31 09:33:03',
            ),
        ));
        
        
    }
}