<?php

use Illuminate\Database\Seeder;

class CatdLtoApplicationExtentionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catd_lto_application_extentions')->delete();
        
        \DB::table('catd_lto_application_extentions')->insert(array (
            0 => 
            array (
                'id' => 2,
                'application_id' => 'DPRAPPLICATION00026',
                'company_id' => 'DPRCOMP00004',
                'sponsoring_company' => 'Nitro Max',
                'no_of_bottles' => '62',
                'created_at' => '2019-02-13 05:53:11',
                'updated_at' => '2019-02-13 05:53:11',
            ),
        ));
        
        
    }
}