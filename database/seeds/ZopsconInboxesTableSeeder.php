<?php

use Illuminate\Database\Seeder;

class ZopsconInboxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('zopscon_inboxes')->delete();
        
        \DB::table('zopscon_inboxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => '2',
                'from' => 'DPRMKT00008',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-09 23:24:16',
                'updated_at' => '2018-12-13 19:33:14',
            ),
            1 => 
            array (
                'id' => 2,
                'application_id' => '3',
                'from' => 'DPRMKT00008',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-13 20:25:53',
                'updated_at' => '2019-01-25 18:24:48',
            ),
            2 => 
            array (
                'id' => 3,
                'application_id' => '3',
                'from' => 'DPRST00004',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-21 10:30:32',
                'updated_at' => '2019-01-25 18:24:48',
            ),
            3 => 
            array (
                'id' => 4,
                'application_id' => '3',
                'from' => 'DPRST00004',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'ATC',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-21 14:48:22',
                'updated_at' => '2019-01-25 18:24:48',
            ),
            4 => 
            array (
                'id' => 5,
                'application_id' => '4',
                'from' => 'DPRMKT00008',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2018-12-23 13:58:10',
                'updated_at' => '2018-12-23 14:24:20',
            ),
            5 => 
            array (
                'id' => 6,
                'application_id' => '6',
                'from' => 'DPRMKT00008',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2019-01-19 13:37:26',
                'updated_at' => '2019-01-25 23:22:24',
            ),
            6 => 
            array (
                'id' => 7,
                'application_id' => '7',
                'from' => 'DPRMKT00008',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2019-01-20 01:25:26',
                'updated_at' => '2019-01-30 06:10:34',
            ),
            7 => 
            array (
                'id' => 8,
                'application_id' => '9',
                'from' => 'DPRMKT00008',
                'application_type' => 'LPG Retailer Outlets',
                'sub_category' => 'Site Suitability Inspection',
                'read' => 'true',
                'to_outbox' => 'true',
                'created_at' => '2019-01-31 09:16:07',
                'updated_at' => '2019-01-31 09:32:00',
            ),
        ));
        
        
    }
}