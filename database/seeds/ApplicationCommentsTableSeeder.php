<?php

use Illuminate\Database\Seeder;

class ApplicationCommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('application_comments')->delete();
        
        \DB::table('application_comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => 'DPRAPPLICATION00002',
                'staff_id' => 'DPRST00003',
                'comment' => 'Ado treat this application please',
                'created_at' => '2018-12-09 23:25:57',
                'updated_at' => '2018-12-09 23:25:57',
            ),
            1 => 
            array (
                'id' => 2,
                'application_id' => 'DPRAPPLICATION00002',
                'staff_id' => 'DPRST00004',
                'comment' => 'coming from Ado',
                'created_at' => '2018-12-12 11:14:32',
                'updated_at' => '2018-12-12 11:14:32',
            ),
            2 => 
            array (
                'id' => 3,
                'application_id' => 'DPRAPPLICATION00002',
                'staff_id' => 'DPRST00005',
                'comment' => 'ok',
                'created_at' => '2018-12-12 11:14:54',
                'updated_at' => '2018-12-12 11:14:54',
            ),
            3 => 
            array (
                'id' => 4,
                'application_id' => 'DPRAPPLICATION00002',
                'staff_id' => 'DPRST00006',
                'comment' => 'alright',
                'created_at' => '2018-12-12 11:15:36',
                'updated_at' => '2018-12-12 11:15:36',
            ),
            4 => 
            array (
                'id' => 5,
                'application_id' => 'DPRAPPLICATION00003',
                'staff_id' => 'DPRST00006',
                'comment' => 'Mosay what is the update on this call...reply asap',
                'created_at' => '2018-12-13 20:43:03',
                'updated_at' => '2018-12-13 20:43:03',
            ),
            5 => 
            array (
                'id' => 6,
                'application_id' => 'DPRAPPLICATION00003',
                'staff_id' => 'DPRST00007',
                'comment' => 'sir i\'m on it right away',
                'created_at' => '2018-12-13 20:43:29',
                'updated_at' => '2018-12-13 20:43:29',
            ),
            6 => 
            array (
                'id' => 7,
                'application_id' => 'DPRAPPLICATION00003',
                'staff_id' => 'DPRST00005',
                'comment' => 'Bob call your staff to order on this...we need this tender to immediately',
                'created_at' => '2018-12-13 20:44:36',
                'updated_at' => '2018-12-13 20:44:36',
            ),
            7 => 
            array (
                'id' => 8,
                'application_id' => 'DPRAPPLICATION00003',
                'staff_id' => 'DPRST00004',
                'comment' => 'hmm',
                'created_at' => '2018-12-21 09:27:58',
                'updated_at' => '2018-12-21 09:27:58',
            ),
            8 => 
            array (
                'id' => 9,
                'application_id' => 'DPRAPPLICATION00006',
                'staff_id' => 'DPRST00006',
                'comment' => 'mosay handle this asap',
                'created_at' => '2019-01-19 22:34:30',
                'updated_at' => '2019-01-19 22:34:30',
            ),
            9 => 
            array (
                'id' => 10,
                'application_id' => 'DPRAPPLICATION00010',
                'staff_id' => 'DPRST00007',
                'comment' => 'This message is from a staff',
                'created_at' => '2019-02-03 05:47:53',
                'updated_at' => '2019-02-03 05:47:53',
            ),
            10 => 
            array (
                'id' => 11,
                'application_id' => 'DPRAPPLICATION00010',
                'staff_id' => 'DPRST00005',
                'comment' => 'This message is from a manager gas',
                'created_at' => '2019-02-03 05:48:24',
                'updated_at' => '2019-02-03 05:48:24',
            ),
            11 => 
            array (
                'id' => 12,
                'application_id' => 'DPRAPPLICATION00017',
                'staff_id' => 'DPRST00006',
                'comment' => 'Head gas please treat this',
                'created_at' => '2019-02-04 23:48:58',
                'updated_at' => '2019-02-04 23:48:58',
            ),
            12 => 
            array (
                'id' => 13,
                'application_id' => 'DPRAPPLICATION00023',
                'staff_id' => 'DPRST00014',
                'comment' => 'fire report certificate invalid',
                'created_at' => '2019-02-11 12:25:48',
                'updated_at' => '2019-02-11 12:25:48',
            ),
            13 => 
            array (
                'id' => 14,
                'application_id' => 'DPRAPPLICATION00023',
                'staff_id' => 'DPRST00014',
                'comment' => 'Current Pressure Test Report / Certificate invalid',
                'created_at' => '2019-02-11 12:26:04',
                'updated_at' => '2019-02-11 12:26:04',
            ),
            14 => 
            array (
                'id' => 15,
                'application_id' => 'DPRAPPLICATION00023',
                'staff_id' => 'DPRST00014',
                'comment' => 'Current Three Years Income Tax Clearance Invalid',
                'created_at' => '2019-02-11 12:26:18',
                'updated_at' => '2019-02-11 12:26:18',
            ),
            15 => 
            array (
                'id' => 16,
                'application_id' => 'DPRAPPLICATION00026',
                'staff_id' => 'DPRST00008',
                'comment' => 'first to comment',
                'created_at' => '2019-02-13 19:01:52',
                'updated_at' => '2019-02-13 19:01:52',
            ),
            16 => 
            array (
                'id' => 17,
                'application_id' => 'DPRAPPLICATION00027',
                'staff_id' => 'DPRST00009',
                'comment' => 'ado treat',
                'created_at' => '2019-03-02 19:01:08',
                'updated_at' => '2019-03-02 19:01:08',
            ),
            17 => 
            array (
                'id' => 18,
                'application_id' => 'DPRAPPLICATION00034',
                'staff_id' => 'DPRST00006',
                'comment' => 'correct thse',
                'created_at' => '2019-03-18 14:28:45',
                'updated_at' => '2019-03-18 14:28:45',
            ),
        ));
        
        
    }
}