<?php

use Illuminate\Database\Seeder;

class SiteSuitabilityReportsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('site_suitability_reports')->delete();
        
        \DB::table('site_suitability_reports')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => 'DPRAPPLICATION00002',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00001',
                'marketer_id' => 'DPRMKT00008',
                'report_location' => 'artistic-1920x1080-colors-4k-5k-18393.jpg',
                'created_at' => '2018-12-13 19:32:37',
                'updated_at' => '2018-12-13 19:32:37',
            ),
            1 => 
            array (
                'id' => 3,
                'application_id' => 'DPRAPPLICATION00004',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00002',
                'marketer_id' => 'DPRMKT00008',
                'report_location' => 'dying-light-bad-blood-1920x1080-gamescom-2018-screenshot-4k-20059.jpg',
                'created_at' => '2018-12-24 21:57:59',
                'updated_at' => '2018-12-24 21:57:59',
            ),
            2 => 
            array (
                'id' => 4,
                'application_id' => 'DPRAPPLICATION00006',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00003',
                'marketer_id' => 'DPRMKT00008',
                'report_location' => 'Free-Gym-Fitness-Flyer-Design-Template.jpg',
                'created_at' => '2019-01-25 19:05:45',
                'updated_at' => '2019-01-25 19:05:45',
            ),
            3 => 
            array (
                'id' => 5,
                'application_id' => 'DPRAPPLICATION00006',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00003',
                'marketer_id' => 'DPRMKT00008',
                'report_location' => 'Free-Gym-Fitness-Flyer-Design-Template.jpg',
                'created_at' => '2019-01-25 19:28:10',
                'updated_at' => '2019-01-25 19:28:10',
            ),
            4 => 
            array (
                'id' => 6,
                'application_id' => 'DPRAPPLICATION00010',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00004',
                'marketer_id' => 'DPRMKT00008',
                'report_location' => 'AFROX.docx',
                'created_at' => '2019-02-03 09:11:09',
                'updated_at' => '2019-02-03 09:11:09',
            ),
            5 => 
            array (
                'id' => 7,
                'application_id' => 'DPRAPPLICATION00011',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00003',
                'marketer_id' => 'DPRMKT00008',
                'report_location' => 'GOT645218642.jpg',
                'created_at' => '2019-02-06 20:14:25',
                'updated_at' => '2019-02-06 20:14:25',
            ),
            6 => 
            array (
                'id' => 8,
                'application_id' => 'DPRAPPLICATION00005',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00003',
                'marketer_id' => 'DPRMKT00008',
                'report_location' => 'children-542104_960_720.jpg',
                'created_at' => '2019-03-09 12:33:15',
                'updated_at' => '2019-03-09 12:33:15',
            ),
        ));
        
        
    }
}