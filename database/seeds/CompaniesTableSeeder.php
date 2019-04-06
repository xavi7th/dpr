<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('companies')->delete();
        
        \DB::table('companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'marketer_id' => NULL,
                'company_id' => 'DPRCOMP00001',
                'company_name' => 'Homer coy.',
                'company_alias' => 'homer',
                'contract_type' => 'PLC',
                'state' => 'Abia State',
                'lga' => 'Arochukwu',
                'town' => 'arochukwu',
                'address' => 'aba',
                'mobile_number' => '123458934',
                'email_address' => 'homer@gmail.com',
                'remember_token' => NULL,
                'created_at' => '2018-12-12 11:23:15',
                'updated_at' => '2018-12-12 11:23:15',
            ),
            1 => 
            array (
                'id' => 2,
                'marketer_id' => NULL,
                'company_id' => 'DPRCOMP00002',
                'company_name' => 'joohg',
                'company_alias' => 'sd',
                'contract_type' => 'JV',
                'state' => 'Abia State',
                'lga' => 'Aba South',
                'town' => 'sfsf',
                'address' => 'sfsf',
                'mobile_number' => '1313',
                'email_address' => 's@yahoo.com',
                'remember_token' => NULL,
                'created_at' => '2018-12-23 14:06:17',
                'updated_at' => '2018-12-23 14:06:17',
            ),
            2 => 
            array (
                'id' => 3,
                'marketer_id' => 'DPRMKT00008',
                'company_id' => 'DPRCOMP00003',
                'company_name' => 'jerrycan industries',
                'company_alias' => 'jey',
                'contract_type' => 'Marginal',
                'state' => 'Abia State',
                'lga' => 'Aba South',
                'town' => 'abuad',
                'address' => '12 aba road',
                'mobile_number' => '35434756865865',
                'email_address' => 'jey@gmail.com',
                'remember_token' => NULL,
                'created_at' => '2019-01-19 00:04:38',
                'updated_at' => '2019-01-19 00:04:38',
            ),
            3 => 
            array (
                'id' => 4,
                'marketer_id' => 'DPRMKT00008',
                'company_id' => 'DPRCOMP00004',
                'company_name' => 'cowin industries',
                'company_alias' => 'cowin',
                'contract_type' => 'PLC',
                'state' => 'Delta State',
                'lga' => 'Warri South',
                'town' => 'warri',
                'address' => '12 airport road',
                'mobile_number' => '09078456213',
                'email_address' => 'info@cowin.org.ng',
                'remember_token' => NULL,
                'created_at' => '2019-02-01 13:38:19',
                'updated_at' => '2019-02-01 13:38:19',
            ),
        ));
        
        
    }
}