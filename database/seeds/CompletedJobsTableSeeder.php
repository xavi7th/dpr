<?php

use Illuminate\Database\Seeder;

class CompletedJobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('completed_jobs')->delete();
        
        \DB::table('completed_jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => '6',
                'teamlead_id' => 'DPRST00006',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00003',
                'marketer_id' => 'DPRMKT00008',
                'created_at' => '2019-01-25 19:28:10',
                'updated_at' => '2019-01-25 19:28:10',
            ),
            1 => 
            array (
                'id' => 2,
                'application_id' => '10',
                'teamlead_id' => 'DPRST00006',
                'staff_id' => 'DPRST00005',
                'company_id' => 'DPRCOMP00004',
                'marketer_id' => 'DPRMKT00008',
                'created_at' => '2019-02-03 09:11:09',
                'updated_at' => '2019-02-03 09:11:09',
            ),
            2 => 
            array (
                'id' => 3,
                'application_id' => '14',
                'teamlead_id' => 'DPRST00006',
                'staff_id' => 'DPRST00005',
                'company_id' => 'DPRCOMP00004',
                'marketer_id' => 'DPRST00007',
                'created_at' => '2019-02-03 17:15:39',
                'updated_at' => '2019-02-03 17:15:39',
            ),
            3 => 
            array (
                'id' => 4,
                'application_id' => '18',
                'teamlead_id' => 'DPRST00006',
                'staff_id' => 'DPRST00005',
                'company_id' => 'DPRCOMP00003',
                'marketer_id' => 'DPRMKT00008',
                'created_at' => '2019-02-04 21:01:08',
                'updated_at' => '2019-02-04 21:01:08',
            ),
            4 => 
            array (
                'id' => 5,
                'application_id' => '22',
                'teamlead_id' => 'DPRST00006',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00003',
                'marketer_id' => 'DPRMKT00008',
                'created_at' => '2019-02-04 23:49:26',
                'updated_at' => '2019-02-04 23:49:26',
            ),
            5 => 
            array (
                'id' => 6,
                'application_id' => '11',
                'teamlead_id' => 'DPRST00006',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00003',
                'marketer_id' => 'DPRMKT00008',
                'created_at' => '2019-02-06 20:14:25',
                'updated_at' => '2019-02-06 20:14:25',
            ),
            6 => 
            array (
                'id' => 7,
                'application_id' => '26',
                'teamlead_id' => 'DPRST00006',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00003',
                'marketer_id' => 'DPRMKT00008',
                'created_at' => '2019-02-06 23:54:58',
                'updated_at' => '2019-02-06 23:54:58',
            ),
            7 => 
            array (
                'id' => 9,
                'application_id' => '29',
                'teamlead_id' => 'DPRST00006',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00004',
                'marketer_id' => 'DPRMKT00008',
                'created_at' => '2019-02-12 19:24:17',
                'updated_at' => '2019-02-12 19:24:17',
            ),
            8 => 
            array (
                'id' => 10,
                'application_id' => '28',
                'teamlead_id' => 'DPRST00006',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00003',
                'marketer_id' => 'DPRMKT00008',
                'created_at' => '2019-02-26 20:23:20',
                'updated_at' => '2019-02-26 20:23:20',
            ),
            9 => 
            array (
                'id' => 11,
                'application_id' => '37',
                'teamlead_id' => 'DPRST00006',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00004',
                'marketer_id' => 'DPRMKT00008',
                'created_at' => '2019-03-02 20:08:11',
                'updated_at' => '2019-03-02 20:08:11',
            ),
            10 => 
            array (
                'id' => 12,
                'application_id' => '25',
                'teamlead_id' => 'DPRST00006',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00001',
                'marketer_id' => 'DPRMKT00008',
                'created_at' => '2019-03-03 07:05:58',
                'updated_at' => '2019-03-03 07:05:58',
            ),
            11 => 
            array (
                'id' => 13,
                'application_id' => '5',
                'teamlead_id' => 'DPRST00006',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00003',
                'marketer_id' => 'DPRMKT00008',
                'created_at' => '2019-03-09 12:33:15',
                'updated_at' => '2019-03-09 12:33:15',
            ),
            12 => 
            array (
                'id' => 14,
                'application_id' => '55',
                'teamlead_id' => 'DPRST00006',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00003',
                'marketer_id' => 'DPRMKT00008',
                'created_at' => '2019-03-09 13:13:24',
                'updated_at' => '2019-03-09 13:13:24',
            ),
            13 => 
            array (
                'id' => 15,
                'application_id' => '56',
                'teamlead_id' => 'DPRST00006',
                'staff_id' => 'DPRST00007',
                'company_id' => 'DPRCOMP00003',
                'marketer_id' => 'DPRMKT00008',
                'created_at' => '2019-03-17 11:43:30',
                'updated_at' => '2019-03-17 11:43:30',
            ),
        ));
        
        
    }
}