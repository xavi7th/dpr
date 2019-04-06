<?php

use Illuminate\Database\Seeder;

class PressureTestRecordsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pressure_test_records')->delete();
        
        \DB::table('pressure_test_records')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_id' => 'DPRAPPLICATION00019',
                'atc_application_id' => 'DPRAPPLICATION00017',
                'marketer_id' => 'DPRMKT00008',
                'company_name' => 'DPRCOMP00003',
                'equipment_name' => 'ages gas tank 3',
                'facility_name' => 'ages gas',
                'test_type' => 'Hydro Testing',
                'tag_number' => '234',
                'manufacture_year' => '1985',
                'commission_year' => '1987',
                'design_pressure' => '28',
                'test_pressure' => '32',
                'date_last_tested' => '2014-07-24 00:00:00',
                'due_date' => '2017-01-24',
                'application_letter_location_url' => NULL,
                'license_url' => 'mastaace.jpg',
                'created_at' => '2019-02-05 01:36:26',
                'updated_at' => '2019-02-05 01:36:26',
            ),
            1 => 
            array (
                'id' => 5,
                'application_id' => 'DPRAPPLICATION00029',
                'atc_application_id' => 'DPRAPPLICATION00027',
                'marketer_id' => 'DPRMKT00008',
                'company_name' => 'DPRCOMP00004',
                'equipment_name' => 'vans hynet',
                'facility_name' => 'vans',
                'test_type' => 'Hydro Testing',
                'tag_number' => '341',
                'manufacture_year' => '1999',
                'commission_year' => '2000',
                'design_pressure' => '67',
                'test_pressure' => NULL,
                'date_last_tested' => '2019-03-01 00:00:00',
                'due_date' => '2021-09-01',
                'application_letter_location_url' => '71368f00818fb2bc25c19eab1b2ea63c.png',
                'license_url' => 'Chef-Petrus.jpg',
                'created_at' => '2019-03-03 20:48:38',
                'updated_at' => '2019-03-06 00:54:04',
            ),
            2 => 
            array (
                'id' => 6,
                'application_id' => 'DPRAPPLICATION00033',
                'atc_application_id' => 'DPRAPPLICATION00032',
                'marketer_id' => 'DPRMKT00008',
                'company_name' => 'DPRCOMP00003',
                'equipment_name' => 'aleosoothe',
                'facility_name' => 'aloesoothe',
                'test_type' => 'Hydro Testing',
                'tag_number' => '543',
                'manufacture_year' => '2001',
                'commission_year' => '2003',
                'design_pressure' => '56',
                'test_pressure' => NULL,
                'date_last_tested' => '2019-03-17 00:00:00',
                'due_date' => '2024-03-17',
                'application_letter_location_url' => 'bananaville_by_kerbyrosanes-d8kuj6v.jpg',
                'license_url' => 'codeaddict.jpg',
                'created_at' => '2019-03-17 11:57:20',
                'updated_at' => '2019-03-17 12:01:55',
            ),
        ));
        
        
    }
}