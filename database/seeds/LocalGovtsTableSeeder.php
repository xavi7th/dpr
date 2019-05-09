<?php

use Illuminate\Database\Seeder;

class LocalGovtsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('local_govts')->delete();

        \DB::table('local_govts')->insert(array (
            0 =>
            array (
                'id' => 1,
                'state_id' => 1,
                'name' => 'Aba North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            1 =>
            array (
                'id' => 2,
                'state_id' => 1,
                'name' => 'Aba South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            2 =>
            array (
                'id' => 3,
                'state_id' => 1,
                'name' => 'Arochukwu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            3 =>
            array (
                'id' => 4,
                'state_id' => 1,
                'name' => 'Bende',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            4 =>
            array (
                'id' => 5,
                'state_id' => 1,
                'name' => 'Ikwuano',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            5 =>
            array (
                'id' => 6,
                'state_id' => 1,
                'name' => 'Isiala Ngwa North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            6 =>
            array (
                'id' => 7,
                'state_id' => 1,
                'name' => 'Isiala Ngwa South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            7 =>
            array (
                'id' => 8,
                'state_id' => 1,
                'name' => 'Isuikwuato',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            8 =>
            array (
                'id' => 9,
                'state_id' => 1,
                'name' => 'Obi Ngwa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            9 =>
            array (
                'id' => 10,
                'state_id' => 1,
                'name' => 'Ohafia',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            10 =>
            array (
                'id' => 11,
                'state_id' => 1,
                'name' => 'Osisioma',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            11 =>
            array (
                'id' => 12,
                'state_id' => 1,
                'name' => 'Ugwunagbo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            12 =>
            array (
                'id' => 13,
                'state_id' => 1,
                'name' => 'Ukwa East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            13 =>
            array (
                'id' => 14,
                'state_id' => 1,
                'name' => 'Ukwa West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            14 =>
            array (
                'id' => 15,
                'state_id' => 1,
                'name' => 'Umuahia North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            15 =>
            array (
                'id' => 16,
                'state_id' => 1,
                'name' => 'Umuahia South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            16 =>
            array (
                'id' => 17,
                'state_id' => 1,
                'name' => 'Umu Nneochi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            17 =>
            array (
                'id' => 18,
                'state_id' => 2,
                'name' => 'Demsa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            18 =>
            array (
                'id' => 19,
                'state_id' => 2,
                'name' => 'Fufure',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            19 =>
            array (
                'id' => 20,
                'state_id' => 2,
                'name' => 'Ganye',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            20 =>
            array (
                'id' => 21,
                'state_id' => 2,
                'name' => 'Gayuk',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            21 =>
            array (
                'id' => 22,
                'state_id' => 2,
                'name' => 'Gombi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            22 =>
            array (
                'id' => 23,
                'state_id' => 2,
                'name' => 'Grie',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            23 =>
            array (
                'id' => 24,
                'state_id' => 2,
                'name' => 'Hong',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            24 =>
            array (
                'id' => 25,
                'state_id' => 2,
                'name' => 'Jada',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            25 =>
            array (
                'id' => 26,
                'state_id' => 2,
                'name' => 'Larmurde',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            26 =>
            array (
                'id' => 27,
                'state_id' => 2,
                'name' => 'Madagali',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            27 =>
            array (
                'id' => 28,
                'state_id' => 2,
                'name' => 'Maiha',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            28 =>
            array (
                'id' => 29,
                'state_id' => 2,
                'name' => 'Mayo Belwa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            29 =>
            array (
                'id' => 30,
                'state_id' => 2,
                'name' => 'Michika',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            30 =>
            array (
                'id' => 31,
                'state_id' => 2,
                'name' => 'Mubi North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            31 =>
            array (
                'id' => 32,
                'state_id' => 2,
                'name' => 'Mubi South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            32 =>
            array (
                'id' => 33,
                'state_id' => 2,
                'name' => 'Numan',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            33 =>
            array (
                'id' => 34,
                'state_id' => 2,
                'name' => 'Shelleng',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            34 =>
            array (
                'id' => 35,
                'state_id' => 2,
                'name' => 'Song',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            35 =>
            array (
                'id' => 36,
                'state_id' => 2,
                'name' => 'Toungo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            36 =>
            array (
                'id' => 37,
                'state_id' => 2,
                'name' => 'Yola North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            37 =>
            array (
                'id' => 38,
                'state_id' => 2,
                'name' => 'Yola South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            38 =>
            array (
                'id' => 39,
                'state_id' => 3,
                'name' => 'Abak',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            39 =>
            array (
                'id' => 40,
                'state_id' => 3,
                'name' => 'Eastern Obolo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            40 =>
            array (
                'id' => 41,
                'state_id' => 3,
                'name' => 'Eket',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            41 =>
            array (
                'id' => 42,
                'state_id' => 3,
                'name' => 'Esit Eket',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            42 =>
            array (
                'id' => 43,
                'state_id' => 3,
                'name' => 'Essien Udim',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            43 =>
            array (
                'id' => 44,
                'state_id' => 3,
                'name' => 'Etim Ekpo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            44 =>
            array (
                'id' => 45,
                'state_id' => 3,
                'name' => 'Etinan',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            45 =>
            array (
                'id' => 46,
                'state_id' => 3,
                'name' => 'Ibeno',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            46 =>
            array (
                'id' => 47,
                'state_id' => 3,
                'name' => 'Ibesikpo Asutan',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            47 =>
            array (
                'id' => 48,
                'state_id' => 3,
                'name' => 'Ibiono-Ibom',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            48 =>
            array (
                'id' => 49,
                'state_id' => 3,
                'name' => 'Ika',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            49 =>
            array (
                'id' => 50,
                'state_id' => 3,
                'name' => 'Ikono',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            50 =>
            array (
                'id' => 51,
                'state_id' => 3,
                'name' => 'Ikot Abasi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            51 =>
            array (
                'id' => 52,
                'state_id' => 3,
                'name' => 'Ikot Ekpene',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            52 =>
            array (
                'id' => 53,
                'state_id' => 3,
                'name' => 'Ini',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            53 =>
            array (
                'id' => 54,
                'state_id' => 3,
                'name' => 'Itu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            54 =>
            array (
                'id' => 55,
                'state_id' => 3,
                'name' => 'Mbo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            55 =>
            array (
                'id' => 56,
                'state_id' => 3,
                'name' => 'Mkpat-Enin',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            56 =>
            array (
                'id' => 57,
                'state_id' => 3,
                'name' => 'Nsit-Atai',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            57 =>
            array (
                'id' => 58,
                'state_id' => 3,
                'name' => 'Nsit-Ibom',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            58 =>
            array (
                'id' => 59,
                'state_id' => 3,
                'name' => 'Nsit-Ubium',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            59 =>
            array (
                'id' => 60,
                'state_id' => 3,
                'name' => 'Obot Akara',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            60 =>
            array (
                'id' => 61,
                'state_id' => 3,
                'name' => 'Okobo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            61 =>
            array (
                'id' => 62,
                'state_id' => 3,
                'name' => 'Onna',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            62 =>
            array (
                'id' => 63,
                'state_id' => 3,
                'name' => 'Oron',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            63 =>
            array (
                'id' => 64,
                'state_id' => 3,
                'name' => 'Oruk Anam',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            64 =>
            array (
                'id' => 65,
                'state_id' => 3,
                'name' => 'Udung-Uko',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            65 =>
            array (
                'id' => 66,
                'state_id' => 3,
                'name' => 'Ukanafun',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            66 =>
            array (
                'id' => 67,
                'state_id' => 3,
                'name' => 'Uruan',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            67 =>
            array (
                'id' => 68,
                'state_id' => 3,
                'name' => 'Urue-Offong/Oruko',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            68 =>
            array (
                'id' => 69,
                'state_id' => 3,
                'name' => 'Uyo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            69 =>
            array (
                'id' => 70,
                'state_id' => 4,
                'name' => 'Aguata',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            70 =>
            array (
                'id' => 71,
                'state_id' => 4,
                'name' => 'Anambra East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            71 =>
            array (
                'id' => 72,
                'state_id' => 4,
                'name' => 'Anambra West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            72 =>
            array (
                'id' => 73,
                'state_id' => 4,
                'name' => 'Anaocha',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            73 =>
            array (
                'id' => 74,
                'state_id' => 4,
                'name' => 'Awka North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            74 =>
            array (
                'id' => 75,
                'state_id' => 4,
                'name' => 'Awka South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            75 =>
            array (
                'id' => 76,
                'state_id' => 4,
                'name' => 'Ayamelum',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            76 =>
            array (
                'id' => 77,
                'state_id' => 4,
                'name' => 'Dunukofia',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            77 =>
            array (
                'id' => 78,
                'state_id' => 4,
                'name' => 'Ekwusigo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            78 =>
            array (
                'id' => 79,
                'state_id' => 4,
                'name' => 'Idemili North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            79 =>
            array (
                'id' => 80,
                'state_id' => 4,
                'name' => 'Idemili South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            80 =>
            array (
                'id' => 81,
                'state_id' => 4,
                'name' => 'Ihiala',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            81 =>
            array (
                'id' => 82,
                'state_id' => 4,
                'name' => 'Njikoka',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            82 =>
            array (
                'id' => 83,
                'state_id' => 4,
                'name' => 'Nnewi North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            83 =>
            array (
                'id' => 84,
                'state_id' => 4,
                'name' => 'Nnewi South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            84 =>
            array (
                'id' => 85,
                'state_id' => 4,
                'name' => 'Ogbaru',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            85 =>
            array (
                'id' => 86,
                'state_id' => 4,
                'name' => 'Onitsha North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            86 =>
            array (
                'id' => 87,
                'state_id' => 4,
                'name' => 'Onitsha South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            87 =>
            array (
                'id' => 88,
                'state_id' => 4,
                'name' => 'Orumba North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            88 =>
            array (
                'id' => 89,
                'state_id' => 4,
                'name' => 'Orumba South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            89 =>
            array (
                'id' => 90,
                'state_id' => 4,
                'name' => 'Oyi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            90 =>
            array (
                'id' => 91,
                'state_id' => 5,
                'name' => 'Alkaleri',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            91 =>
            array (
                'id' => 92,
                'state_id' => 5,
                'name' => 'Bauchi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            92 =>
            array (
                'id' => 93,
                'state_id' => 5,
                'name' => 'Bogoro',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            93 =>
            array (
                'id' => 94,
                'state_id' => 5,
                'name' => 'Damban',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            94 =>
            array (
                'id' => 95,
                'state_id' => 5,
                'name' => 'Darazo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            95 =>
            array (
                'id' => 96,
                'state_id' => 5,
                'name' => 'Dass',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            96 =>
            array (
                'id' => 97,
                'state_id' => 5,
                'name' => 'Gamawa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            97 =>
            array (
                'id' => 98,
                'state_id' => 5,
                'name' => 'Ganjuwa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            98 =>
            array (
                'id' => 99,
                'state_id' => 5,
                'name' => 'Giade',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            99 =>
            array (
                'id' => 100,
                'state_id' => 5,
                'name' => 'Itas/Gadau',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            100 =>
            array (
                'id' => 101,
                'state_id' => 5,
                'name' => 'Jama\'are',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            101 =>
            array (
                'id' => 102,
                'state_id' => 5,
                'name' => 'Katagum',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            102 =>
            array (
                'id' => 103,
                'state_id' => 5,
                'name' => 'Kirfi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            103 =>
            array (
                'id' => 104,
                'state_id' => 5,
                'name' => 'Misau',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            104 =>
            array (
                'id' => 105,
                'state_id' => 5,
                'name' => 'Ningi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            105 =>
            array (
                'id' => 106,
                'state_id' => 5,
                'name' => 'Shira',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            106 =>
            array (
                'id' => 107,
                'state_id' => 5,
                'name' => 'Tafawa Balewa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            107 =>
            array (
                'id' => 108,
                'state_id' => 5,
                'name' => 'Toro',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            108 =>
            array (
                'id' => 109,
                'state_id' => 5,
                'name' => 'Warji',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            109 =>
            array (
                'id' => 110,
                'state_id' => 5,
                'name' => 'Zaki',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            110 =>
            array (
                'id' => 111,
                'state_id' => 6,
                'name' => 'Brass',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            111 =>
            array (
                'id' => 112,
                'state_id' => 6,
                'name' => 'Ekeremor',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            112 =>
            array (
                'id' => 113,
                'state_id' => 6,
                'name' => 'Kolokuma/Opokuma',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            113 =>
            array (
                'id' => 114,
                'state_id' => 6,
                'name' => 'Nembe',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            114 =>
            array (
                'id' => 115,
                'state_id' => 6,
                'name' => 'Ogbia',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            115 =>
            array (
                'id' => 116,
                'state_id' => 6,
                'name' => 'Sagbama',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            116 =>
            array (
                'id' => 117,
                'state_id' => 6,
                'name' => 'Southern Ijaw',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            117 =>
            array (
                'id' => 118,
                'state_id' => 6,
                'name' => 'Yenagoa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            118 =>
            array (
                'id' => 119,
                'state_id' => 7,
                'name' => 'Agatu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            119 =>
            array (
                'id' => 120,
                'state_id' => 7,
                'name' => 'Apa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            120 =>
            array (
                'id' => 121,
                'state_id' => 7,
                'name' => 'Ado',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            121 =>
            array (
                'id' => 122,
                'state_id' => 7,
                'name' => 'Buruku',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            122 =>
            array (
                'id' => 123,
                'state_id' => 7,
                'name' => 'Gboko',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            123 =>
            array (
                'id' => 124,
                'state_id' => 7,
                'name' => 'Guma',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            124 =>
            array (
                'id' => 125,
                'state_id' => 7,
                'name' => 'Gwer East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            125 =>
            array (
                'id' => 126,
                'state_id' => 7,
                'name' => 'Gwer West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            126 =>
            array (
                'id' => 127,
                'state_id' => 7,
                'name' => 'Katsina-Ala',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            127 =>
            array (
                'id' => 128,
                'state_id' => 7,
                'name' => 'Konshisha',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            128 =>
            array (
                'id' => 129,
                'state_id' => 7,
                'name' => 'Kwande',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            129 =>
            array (
                'id' => 130,
                'state_id' => 7,
                'name' => 'Logo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            130 =>
            array (
                'id' => 131,
                'state_id' => 7,
                'name' => 'Makurdi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            131 =>
            array (
                'id' => 132,
                'state_id' => 7,
                'name' => 'Obi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            132 =>
            array (
                'id' => 133,
                'state_id' => 7,
                'name' => 'Ogbadibo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            133 =>
            array (
                'id' => 134,
                'state_id' => 7,
                'name' => 'Ohimini',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            134 =>
            array (
                'id' => 135,
                'state_id' => 7,
                'name' => 'Oju',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            135 =>
            array (
                'id' => 136,
                'state_id' => 7,
                'name' => 'Okpokwu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            136 =>
            array (
                'id' => 137,
                'state_id' => 7,
                'name' => 'Oturkpo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            137 =>
            array (
                'id' => 138,
                'state_id' => 7,
                'name' => 'Tarka',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            138 =>
            array (
                'id' => 139,
                'state_id' => 7,
                'name' => 'Ukum',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            139 =>
            array (
                'id' => 140,
                'state_id' => 7,
                'name' => 'Ushongo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            140 =>
            array (
                'id' => 141,
                'state_id' => 7,
                'name' => 'Vandeikya',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            141 =>
            array (
                'id' => 142,
                'state_id' => 8,
                'name' => 'Abadam',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            142 =>
            array (
                'id' => 143,
                'state_id' => 8,
                'name' => 'Askira/Uba',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            143 =>
            array (
                'id' => 144,
                'state_id' => 8,
                'name' => 'Bama',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            144 =>
            array (
                'id' => 145,
                'state_id' => 8,
                'name' => 'Bayo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            145 =>
            array (
                'id' => 146,
                'state_id' => 8,
                'name' => 'Biu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            146 =>
            array (
                'id' => 147,
                'state_id' => 8,
                'name' => 'Chibok',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            147 =>
            array (
                'id' => 148,
                'state_id' => 8,
                'name' => 'Damboa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            148 =>
            array (
                'id' => 149,
                'state_id' => 8,
                'name' => 'Dikwa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            149 =>
            array (
                'id' => 150,
                'state_id' => 8,
                'name' => 'Gubio',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            150 =>
            array (
                'id' => 151,
                'state_id' => 8,
                'name' => 'Guzamala',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            151 =>
            array (
                'id' => 152,
                'state_id' => 8,
                'name' => 'Gwoza',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            152 =>
            array (
                'id' => 153,
                'state_id' => 8,
                'name' => 'Hawul',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            153 =>
            array (
                'id' => 154,
                'state_id' => 8,
                'name' => 'Jere',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            154 =>
            array (
                'id' => 155,
                'state_id' => 8,
                'name' => 'Kaga',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            155 =>
            array (
                'id' => 156,
                'state_id' => 8,
                'name' => 'Kala/Balge',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            156 =>
            array (
                'id' => 157,
                'state_id' => 8,
                'name' => 'Konduga',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            157 =>
            array (
                'id' => 158,
                'state_id' => 8,
                'name' => 'Kukawa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            158 =>
            array (
                'id' => 159,
                'state_id' => 8,
                'name' => 'Kwaya Kusar',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            159 =>
            array (
                'id' => 160,
                'state_id' => 8,
                'name' => 'Mafa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            160 =>
            array (
                'id' => 161,
                'state_id' => 8,
                'name' => 'Magumeri',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            161 =>
            array (
                'id' => 162,
                'state_id' => 8,
                'name' => 'Maiduguri',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            162 =>
            array (
                'id' => 163,
                'state_id' => 8,
                'name' => 'Marte',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            163 =>
            array (
                'id' => 164,
                'state_id' => 8,
                'name' => 'Mobbar',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            164 =>
            array (
                'id' => 165,
                'state_id' => 8,
                'name' => 'Monguno',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            165 =>
            array (
                'id' => 166,
                'state_id' => 8,
                'name' => 'Ngala',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            166 =>
            array (
                'id' => 167,
                'state_id' => 8,
                'name' => 'Nganzai',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            167 =>
            array (
                'id' => 168,
                'state_id' => 8,
                'name' => 'Shani',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            168 =>
            array (
                'id' => 169,
                'state_id' => 9,
                'name' => 'Abi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            169 =>
            array (
                'id' => 170,
                'state_id' => 9,
                'name' => 'Akamkpa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            170 =>
            array (
                'id' => 171,
                'state_id' => 9,
                'name' => 'Akpabuyo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            171 =>
            array (
                'id' => 172,
                'state_id' => 9,
                'name' => 'Bakassi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            172 =>
            array (
                'id' => 173,
                'state_id' => 9,
                'name' => 'Bekwarra',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            173 =>
            array (
                'id' => 174,
                'state_id' => 9,
                'name' => 'Biase',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            174 =>
            array (
                'id' => 175,
                'state_id' => 9,
                'name' => 'Boki',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            175 =>
            array (
                'id' => 176,
                'state_id' => 9,
                'name' => 'Calabar Municipal',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            176 =>
            array (
                'id' => 177,
                'state_id' => 9,
                'name' => 'Calabar South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            177 =>
            array (
                'id' => 178,
                'state_id' => 9,
                'name' => 'Etung',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            178 =>
            array (
                'id' => 179,
                'state_id' => 9,
                'name' => 'Ikom',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            179 =>
            array (
                'id' => 180,
                'state_id' => 9,
                'name' => 'Obanliku',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            180 =>
            array (
                'id' => 181,
                'state_id' => 9,
                'name' => 'Obubra',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            181 =>
            array (
                'id' => 182,
                'state_id' => 9,
                'name' => 'Obudu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            182 =>
            array (
                'id' => 183,
                'state_id' => 9,
                'name' => 'Odukpani',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            183 =>
            array (
                'id' => 184,
                'state_id' => 9,
                'name' => 'Ogoja',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            184 =>
            array (
                'id' => 185,
                'state_id' => 9,
                'name' => 'Yakuur',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            185 =>
            array (
                'id' => 186,
                'state_id' => 9,
                'name' => 'Yala',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            186 =>
            array (
                'id' => 187,
                'state_id' => 10,
                'name' => 'Aniocha North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            187 =>
            array (
                'id' => 188,
                'state_id' => 10,
                'name' => 'Aniocha South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            188 =>
            array (
                'id' => 189,
                'state_id' => 10,
                'name' => 'Bomadi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            189 =>
            array (
                'id' => 190,
                'state_id' => 10,
                'name' => 'Burutu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            190 =>
            array (
                'id' => 191,
                'state_id' => 10,
                'name' => 'Ethiope East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            191 =>
            array (
                'id' => 192,
                'state_id' => 10,
                'name' => 'Ethiope West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            192 =>
            array (
                'id' => 193,
                'state_id' => 10,
                'name' => 'Ika North East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            193 =>
            array (
                'id' => 194,
                'state_id' => 10,
                'name' => 'Ika South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            194 =>
            array (
                'id' => 195,
                'state_id' => 10,
                'name' => 'Isoko North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            195 =>
            array (
                'id' => 196,
                'state_id' => 10,
                'name' => 'Isoko South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            196 =>
            array (
                'id' => 197,
                'state_id' => 10,
                'name' => 'Ndokwa East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            197 =>
            array (
                'id' => 198,
                'state_id' => 10,
                'name' => 'Ndokwa West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            198 =>
            array (
                'id' => 199,
                'state_id' => 10,
                'name' => 'Okpe',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            199 =>
            array (
                'id' => 200,
                'state_id' => 10,
                'name' => 'Oshimili North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            200 =>
            array (
                'id' => 201,
                'state_id' => 10,
                'name' => 'Oshimili South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            201 =>
            array (
                'id' => 202,
                'state_id' => 10,
                'name' => 'Patani',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            202 =>
            array (
                'id' => 203,
                'state_id' => 10,
                'name' => 'Sapele, Delta',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            203 =>
            array (
                'id' => 204,
                'state_id' => 10,
                'name' => 'Udu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            204 =>
            array (
                'id' => 205,
                'state_id' => 10,
                'name' => 'Ughelli North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            205 =>
            array (
                'id' => 206,
                'state_id' => 10,
                'name' => 'Ughelli South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            206 =>
            array (
                'id' => 207,
                'state_id' => 10,
                'name' => 'Ukwuani',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            207 =>
            array (
                'id' => 208,
                'state_id' => 10,
                'name' => 'Uvwie',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            208 =>
            array (
                'id' => 209,
                'state_id' => 10,
                'name' => 'Warri North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            209 =>
            array (
                'id' => 210,
                'state_id' => 10,
                'name' => 'Warri South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            210 =>
            array (
                'id' => 211,
                'state_id' => 10,
                'name' => 'Warri South West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            211 =>
            array (
                'id' => 212,
                'state_id' => 11,
                'name' => 'Abakaliki',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            212 =>
            array (
                'id' => 213,
                'state_id' => 11,
                'name' => 'Afikpo North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            213 =>
            array (
                'id' => 214,
                'state_id' => 11,
                'name' => 'Afikpo South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            214 =>
            array (
                'id' => 215,
                'state_id' => 11,
                'name' => 'Ebonyi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            215 =>
            array (
                'id' => 216,
                'state_id' => 11,
                'name' => 'Ezza North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            216 =>
            array (
                'id' => 217,
                'state_id' => 11,
                'name' => 'Ezza South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            217 =>
            array (
                'id' => 218,
                'state_id' => 11,
                'name' => 'Ikwo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            218 =>
            array (
                'id' => 219,
                'state_id' => 11,
                'name' => 'Ishielu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            219 =>
            array (
                'id' => 220,
                'state_id' => 11,
                'name' => 'Ivo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            220 =>
            array (
                'id' => 221,
                'state_id' => 11,
                'name' => 'Izzi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            221 =>
            array (
                'id' => 222,
                'state_id' => 11,
                'name' => 'Ohaozara',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            222 =>
            array (
                'id' => 223,
                'state_id' => 11,
                'name' => 'Ohaukwu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            223 =>
            array (
                'id' => 224,
                'state_id' => 11,
                'name' => 'Onicha',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            224 =>
            array (
                'id' => 225,
                'state_id' => 12,
                'name' => 'Akoko-Edo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            225 =>
            array (
                'id' => 226,
                'state_id' => 12,
                'name' => 'Egor',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            226 =>
            array (
                'id' => 227,
                'state_id' => 12,
                'name' => 'Esan Central',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            227 =>
            array (
                'id' => 228,
                'state_id' => 12,
                'name' => 'Esan North-East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            228 =>
            array (
                'id' => 229,
                'state_id' => 12,
                'name' => 'Esan South-East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            229 =>
            array (
                'id' => 230,
                'state_id' => 12,
                'name' => 'Esan West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            230 =>
            array (
                'id' => 231,
                'state_id' => 12,
                'name' => 'Etsako Central',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            231 =>
            array (
                'id' => 232,
                'state_id' => 12,
                'name' => 'Etsako East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            232 =>
            array (
                'id' => 233,
                'state_id' => 12,
                'name' => 'Etsako West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            233 =>
            array (
                'id' => 234,
                'state_id' => 12,
                'name' => 'Igueben',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            234 =>
            array (
                'id' => 235,
                'state_id' => 12,
                'name' => 'Ikpoba Okha',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            235 =>
            array (
                'id' => 236,
                'state_id' => 12,
                'name' => 'Orhionmwon',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            236 =>
            array (
                'id' => 237,
                'state_id' => 12,
                'name' => 'Oredo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            237 =>
            array (
                'id' => 238,
                'state_id' => 12,
                'name' => 'Ovia North-East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            238 =>
            array (
                'id' => 239,
                'state_id' => 12,
                'name' => 'Ovia South-West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            239 =>
            array (
                'id' => 240,
                'state_id' => 12,
                'name' => 'Owan East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            240 =>
            array (
                'id' => 241,
                'state_id' => 12,
                'name' => 'Owan West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            241 =>
            array (
                'id' => 242,
                'state_id' => 12,
                'name' => 'Uhunmwonde',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            242 =>
            array (
                'id' => 243,
                'state_id' => 13,
                'name' => 'Ado Ekiti',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            243 =>
            array (
                'id' => 244,
                'state_id' => 13,
                'name' => 'Efon',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            244 =>
            array (
                'id' => 245,
                'state_id' => 13,
                'name' => 'Ekiti East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            245 =>
            array (
                'id' => 246,
                'state_id' => 13,
                'name' => 'Ekiti South-West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            246 =>
            array (
                'id' => 247,
                'state_id' => 13,
                'name' => 'Ekiti West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            247 =>
            array (
                'id' => 248,
                'state_id' => 13,
                'name' => 'Emure',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            248 =>
            array (
                'id' => 249,
                'state_id' => 13,
                'name' => 'Gbonyin',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            249 =>
            array (
                'id' => 250,
                'state_id' => 13,
                'name' => 'Ido Osi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            250 =>
            array (
                'id' => 251,
                'state_id' => 13,
                'name' => 'Ijero',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            251 =>
            array (
                'id' => 252,
                'state_id' => 13,
                'name' => 'Ikere',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            252 =>
            array (
                'id' => 253,
                'state_id' => 13,
                'name' => 'Ikole',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            253 =>
            array (
                'id' => 254,
                'state_id' => 13,
                'name' => 'Ilejemeje',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            254 =>
            array (
                'id' => 255,
                'state_id' => 13,
                'name' => 'Irepodun/Ifelodun',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            255 =>
            array (
                'id' => 256,
                'state_id' => 13,
                'name' => 'Ise/Orun',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            256 =>
            array (
                'id' => 257,
                'state_id' => 13,
                'name' => 'Moba',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            257 =>
            array (
                'id' => 258,
                'state_id' => 13,
                'name' => 'Oye',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            258 =>
            array (
                'id' => 259,
                'state_id' => 14,
                'name' => 'Aninri',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            259 =>
            array (
                'id' => 260,
                'state_id' => 14,
                'name' => 'Awgu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            260 =>
            array (
                'id' => 261,
                'state_id' => 14,
                'name' => 'Enugu East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            261 =>
            array (
                'id' => 262,
                'state_id' => 14,
                'name' => 'Enugu North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            262 =>
            array (
                'id' => 263,
                'state_id' => 14,
                'name' => 'Enugu South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            263 =>
            array (
                'id' => 264,
                'state_id' => 14,
                'name' => 'Ezeagu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            264 =>
            array (
                'id' => 265,
                'state_id' => 14,
                'name' => 'Igbo Etiti',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            265 =>
            array (
                'id' => 266,
                'state_id' => 14,
                'name' => 'Igbo Eze North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            266 =>
            array (
                'id' => 267,
                'state_id' => 14,
                'name' => 'Igbo Eze South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            267 =>
            array (
                'id' => 268,
                'state_id' => 14,
                'name' => 'Isi Uzo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            268 =>
            array (
                'id' => 269,
                'state_id' => 14,
                'name' => 'Nkanu East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            269 =>
            array (
                'id' => 270,
                'state_id' => 14,
                'name' => 'Nkanu West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            270 =>
            array (
                'id' => 271,
                'state_id' => 14,
                'name' => 'Nsukka',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            271 =>
            array (
                'id' => 272,
                'state_id' => 14,
                'name' => 'Oji River',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            272 =>
            array (
                'id' => 273,
                'state_id' => 14,
                'name' => 'Udenu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            273 =>
            array (
                'id' => 274,
                'state_id' => 14,
                'name' => 'Udi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            274 =>
            array (
                'id' => 275,
                'state_id' => 14,
                'name' => 'Uzo Uwani',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            275 =>
            array (
                'id' => 276,
                'state_id' => 15,
                'name' => 'Abaji',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            276 =>
            array (
                'id' => 277,
                'state_id' => 15,
                'name' => 'Bwari',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            277 =>
            array (
                'id' => 278,
                'state_id' => 15,
                'name' => 'Gwagwalada',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            278 =>
            array (
                'id' => 279,
                'state_id' => 15,
                'name' => 'Kuje',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            279 =>
            array (
                'id' => 280,
                'state_id' => 15,
                'name' => 'Kwali',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            280 =>
            array (
                'id' => 281,
                'state_id' => 15,
                'name' => 'Municipal Area Council',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            281 =>
            array (
                'id' => 282,
                'state_id' => 16,
                'name' => 'Akko',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            282 =>
            array (
                'id' => 283,
                'state_id' => 16,
                'name' => 'Balanga',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            283 =>
            array (
                'id' => 284,
                'state_id' => 16,
                'name' => 'Billiri',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            284 =>
            array (
                'id' => 285,
                'state_id' => 16,
                'name' => 'Dukku',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            285 =>
            array (
                'id' => 286,
                'state_id' => 16,
                'name' => 'Funakaye',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            286 =>
            array (
                'id' => 287,
                'state_id' => 16,
                'name' => 'Gombe',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            287 =>
            array (
                'id' => 288,
                'state_id' => 16,
                'name' => 'Kaltungo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            288 =>
            array (
                'id' => 289,
                'state_id' => 16,
                'name' => 'Kwami',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            289 =>
            array (
                'id' => 290,
                'state_id' => 16,
                'name' => 'Nafada',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            290 =>
            array (
                'id' => 291,
                'state_id' => 16,
                'name' => 'Shongom',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            291 =>
            array (
                'id' => 292,
                'state_id' => 16,
                'name' => 'Yamaltu/Deba',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            292 =>
            array (
                'id' => 293,
                'state_id' => 17,
                'name' => 'Aboh Mbaise',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            293 =>
            array (
                'id' => 294,
                'state_id' => 17,
                'name' => 'Ahiazu Mbaise',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            294 =>
            array (
                'id' => 295,
                'state_id' => 17,
                'name' => 'Ehime Mbano',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            295 =>
            array (
                'id' => 296,
                'state_id' => 17,
                'name' => 'Ezinihitte',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            296 =>
            array (
                'id' => 297,
                'state_id' => 17,
                'name' => 'Ideato North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            297 =>
            array (
                'id' => 298,
                'state_id' => 17,
                'name' => 'Ideato South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            298 =>
            array (
                'id' => 299,
                'state_id' => 17,
                'name' => 'Ihitte/Uboma',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            299 =>
            array (
                'id' => 300,
                'state_id' => 17,
                'name' => 'Ikeduru',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            300 =>
            array (
                'id' => 301,
                'state_id' => 17,
                'name' => 'Isiala Mbano',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            301 =>
            array (
                'id' => 302,
                'state_id' => 17,
                'name' => 'Isu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            302 =>
            array (
                'id' => 303,
                'state_id' => 17,
                'name' => 'Mbaitoli',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            303 =>
            array (
                'id' => 304,
                'state_id' => 17,
                'name' => 'Ngor Okpala',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            304 =>
            array (
                'id' => 305,
                'state_id' => 17,
                'name' => 'Njaba',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            305 =>
            array (
                'id' => 306,
                'state_id' => 17,
                'name' => 'Nkwerre',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            306 =>
            array (
                'id' => 307,
                'state_id' => 17,
                'name' => 'Nwangele',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            307 =>
            array (
                'id' => 308,
                'state_id' => 17,
                'name' => 'Obowo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            308 =>
            array (
                'id' => 309,
                'state_id' => 17,
                'name' => 'Oguta',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            309 =>
            array (
                'id' => 310,
                'state_id' => 17,
                'name' => 'Ohaji/Egbema',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            310 =>
            array (
                'id' => 311,
                'state_id' => 17,
                'name' => 'Okigwe',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            311 =>
            array (
                'id' => 312,
                'state_id' => 17,
                'name' => 'Orlu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            312 =>
            array (
                'id' => 313,
                'state_id' => 17,
                'name' => 'Orsu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            313 =>
            array (
                'id' => 314,
                'state_id' => 17,
                'name' => 'Oru East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            314 =>
            array (
                'id' => 315,
                'state_id' => 17,
                'name' => 'Oru West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            315 =>
            array (
                'id' => 316,
                'state_id' => 17,
                'name' => 'Owerri Municipal',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            316 =>
            array (
                'id' => 317,
                'state_id' => 17,
                'name' => 'Owerri North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            317 =>
            array (
                'id' => 318,
                'state_id' => 17,
                'name' => 'Owerri West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            318 =>
            array (
                'id' => 319,
                'state_id' => 17,
                'name' => 'Unuimo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            319 =>
            array (
                'id' => 320,
                'state_id' => 18,
                'name' => 'Auyo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            320 =>
            array (
                'id' => 321,
                'state_id' => 18,
                'name' => 'Babura',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            321 =>
            array (
                'id' => 322,
                'state_id' => 18,
                'name' => 'Biriniwa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            322 =>
            array (
                'id' => 323,
                'state_id' => 18,
                'name' => 'Birnin Kudu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            323 =>
            array (
                'id' => 324,
                'state_id' => 18,
                'name' => 'Buji',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            324 =>
            array (
                'id' => 325,
                'state_id' => 18,
                'name' => 'Dutse',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            325 =>
            array (
                'id' => 326,
                'state_id' => 18,
                'name' => 'Gagarawa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            326 =>
            array (
                'id' => 327,
                'state_id' => 18,
                'name' => 'Garki',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            327 =>
            array (
                'id' => 328,
                'state_id' => 18,
                'name' => 'Gumel',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            328 =>
            array (
                'id' => 329,
                'state_id' => 18,
                'name' => 'Guri',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            329 =>
            array (
                'id' => 330,
                'state_id' => 18,
                'name' => 'Gwaram',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            330 =>
            array (
                'id' => 331,
                'state_id' => 18,
                'name' => 'Gwiwa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            331 =>
            array (
                'id' => 332,
                'state_id' => 18,
                'name' => 'Hadejia',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            332 =>
            array (
                'id' => 333,
                'state_id' => 18,
                'name' => 'Jahun',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            333 =>
            array (
                'id' => 334,
                'state_id' => 18,
                'name' => 'Kafin Hausa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            334 =>
            array (
                'id' => 335,
                'state_id' => 18,
                'name' => 'Kazaure',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            335 =>
            array (
                'id' => 336,
                'state_id' => 18,
                'name' => 'Kiri Kasama',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            336 =>
            array (
                'id' => 337,
                'state_id' => 18,
                'name' => 'Kiyawa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            337 =>
            array (
                'id' => 338,
                'state_id' => 18,
                'name' => 'Kaugama',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            338 =>
            array (
                'id' => 339,
                'state_id' => 18,
                'name' => 'Maigatari',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            339 =>
            array (
                'id' => 340,
                'state_id' => 18,
                'name' => 'Malam Madori',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            340 =>
            array (
                'id' => 341,
                'state_id' => 18,
                'name' => 'Miga',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            341 =>
            array (
                'id' => 342,
                'state_id' => 18,
                'name' => 'Ringim',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            342 =>
            array (
                'id' => 343,
                'state_id' => 18,
                'name' => 'Roni',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            343 =>
            array (
                'id' => 344,
                'state_id' => 18,
                'name' => 'Sule Tankarkar',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            344 =>
            array (
                'id' => 345,
                'state_id' => 18,
                'name' => 'Taura',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            345 =>
            array (
                'id' => 346,
                'state_id' => 18,
                'name' => 'Yankwashi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            346 =>
            array (
                'id' => 347,
                'state_id' => 19,
                'name' => 'Birnin Gwari',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            347 =>
            array (
                'id' => 348,
                'state_id' => 19,
                'name' => 'Chikun',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            348 =>
            array (
                'id' => 349,
                'state_id' => 19,
                'name' => 'Giwa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            349 =>
            array (
                'id' => 350,
                'state_id' => 19,
                'name' => 'Igabi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            350 =>
            array (
                'id' => 351,
                'state_id' => 19,
                'name' => 'Ikara',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            351 =>
            array (
                'id' => 352,
                'state_id' => 19,
                'name' => 'Jaba',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            352 =>
            array (
                'id' => 353,
                'state_id' => 19,
                'name' => 'Jema\'a',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            353 =>
            array (
                'id' => 354,
                'state_id' => 19,
                'name' => 'Kachia',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            354 =>
            array (
                'id' => 355,
                'state_id' => 19,
                'name' => 'Kaduna North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            355 =>
            array (
                'id' => 356,
                'state_id' => 19,
                'name' => 'Kaduna South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            356 =>
            array (
                'id' => 357,
                'state_id' => 19,
                'name' => 'Kagarko',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            357 =>
            array (
                'id' => 358,
                'state_id' => 19,
                'name' => 'Kajuru',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            358 =>
            array (
                'id' => 359,
                'state_id' => 19,
                'name' => 'Kaura',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            359 =>
            array (
                'id' => 360,
                'state_id' => 19,
                'name' => 'Kauru',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            360 =>
            array (
                'id' => 361,
                'state_id' => 19,
                'name' => 'Kubau',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            361 =>
            array (
                'id' => 362,
                'state_id' => 19,
                'name' => 'Kudan',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            362 =>
            array (
                'id' => 363,
                'state_id' => 19,
                'name' => 'Lere',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            363 =>
            array (
                'id' => 364,
                'state_id' => 19,
                'name' => 'Makarfi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            364 =>
            array (
                'id' => 365,
                'state_id' => 19,
                'name' => 'Sabon Gari',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            365 =>
            array (
                'id' => 366,
                'state_id' => 19,
                'name' => 'Sanga',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            366 =>
            array (
                'id' => 367,
                'state_id' => 19,
                'name' => 'Soba',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            367 =>
            array (
                'id' => 368,
                'state_id' => 19,
                'name' => 'Zangon Kataf',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            368 =>
            array (
                'id' => 369,
                'state_id' => 19,
                'name' => 'Zaria',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            369 =>
            array (
                'id' => 370,
                'state_id' => 20,
                'name' => 'Ajingi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            370 =>
            array (
                'id' => 371,
                'state_id' => 20,
                'name' => 'Albasu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            371 =>
            array (
                'id' => 372,
                'state_id' => 20,
                'name' => 'Bagwai',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            372 =>
            array (
                'id' => 373,
                'state_id' => 20,
                'name' => 'Bebeji',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            373 =>
            array (
                'id' => 374,
                'state_id' => 20,
                'name' => 'Bichi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            374 =>
            array (
                'id' => 375,
                'state_id' => 20,
                'name' => 'Bunkure',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            375 =>
            array (
                'id' => 376,
                'state_id' => 20,
                'name' => 'Dala',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            376 =>
            array (
                'id' => 377,
                'state_id' => 20,
                'name' => 'Dambatta',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            377 =>
            array (
                'id' => 378,
                'state_id' => 20,
                'name' => 'Dawakin Kudu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            378 =>
            array (
                'id' => 379,
                'state_id' => 20,
                'name' => 'Dawakin Tofa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            379 =>
            array (
                'id' => 380,
                'state_id' => 20,
                'name' => 'Doguwa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            380 =>
            array (
                'id' => 381,
                'state_id' => 20,
                'name' => 'Fagge',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            381 =>
            array (
                'id' => 382,
                'state_id' => 20,
                'name' => 'Gabasawa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            382 =>
            array (
                'id' => 383,
                'state_id' => 20,
                'name' => 'Garko',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            383 =>
            array (
                'id' => 384,
                'state_id' => 20,
                'name' => 'Garun Mallam',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            384 =>
            array (
                'id' => 385,
                'state_id' => 20,
                'name' => 'Gaya',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            385 =>
            array (
                'id' => 386,
                'state_id' => 20,
                'name' => 'Gezawa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            386 =>
            array (
                'id' => 387,
                'state_id' => 20,
                'name' => 'Gwale',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            387 =>
            array (
                'id' => 388,
                'state_id' => 20,
                'name' => 'Gwarzo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            388 =>
            array (
                'id' => 389,
                'state_id' => 20,
                'name' => 'Kabo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            389 =>
            array (
                'id' => 390,
                'state_id' => 20,
                'name' => 'Kano Municipal',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            390 =>
            array (
                'id' => 391,
                'state_id' => 20,
                'name' => 'Karaye',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            391 =>
            array (
                'id' => 392,
                'state_id' => 20,
                'name' => 'Kibiya',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            392 =>
            array (
                'id' => 393,
                'state_id' => 20,
                'name' => 'Kiru',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            393 =>
            array (
                'id' => 394,
                'state_id' => 20,
                'name' => 'Kumbotso',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            394 =>
            array (
                'id' => 395,
                'state_id' => 20,
                'name' => 'Kunchi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            395 =>
            array (
                'id' => 396,
                'state_id' => 20,
                'name' => 'Kura',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            396 =>
            array (
                'id' => 397,
                'state_id' => 20,
                'name' => 'Madobi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            397 =>
            array (
                'id' => 398,
                'state_id' => 20,
                'name' => 'Makoda',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            398 =>
            array (
                'id' => 399,
                'state_id' => 20,
                'name' => 'Minjibir',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            399 =>
            array (
                'id' => 400,
                'state_id' => 20,
                'name' => 'Nasarawa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            400 =>
            array (
                'id' => 401,
                'state_id' => 20,
                'name' => 'Rano',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            401 =>
            array (
                'id' => 402,
                'state_id' => 20,
                'name' => 'Rimin Gado',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            402 =>
            array (
                'id' => 403,
                'state_id' => 20,
                'name' => 'Rogo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            403 =>
            array (
                'id' => 404,
                'state_id' => 20,
                'name' => 'Shanono',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            404 =>
            array (
                'id' => 405,
                'state_id' => 20,
                'name' => 'Sumaila',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            405 =>
            array (
                'id' => 406,
                'state_id' => 20,
                'name' => 'Takai',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            406 =>
            array (
                'id' => 407,
                'state_id' => 20,
                'name' => 'Tarauni',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            407 =>
            array (
                'id' => 408,
                'state_id' => 20,
                'name' => 'Tofa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            408 =>
            array (
                'id' => 409,
                'state_id' => 20,
                'name' => 'Tsanyawa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            409 =>
            array (
                'id' => 410,
                'state_id' => 20,
                'name' => 'Tudun Wada',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            410 =>
            array (
                'id' => 411,
                'state_id' => 20,
                'name' => 'Ungogo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            411 =>
            array (
                'id' => 412,
                'state_id' => 20,
                'name' => 'Warawa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            412 =>
            array (
                'id' => 413,
                'state_id' => 20,
                'name' => 'Wudil',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            413 =>
            array (
                'id' => 414,
                'state_id' => 21,
                'name' => 'Bakori',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            414 =>
            array (
                'id' => 415,
                'state_id' => 21,
                'name' => 'Batagarawa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            415 =>
            array (
                'id' => 416,
                'state_id' => 21,
                'name' => 'Batsari',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            416 =>
            array (
                'id' => 417,
                'state_id' => 21,
                'name' => 'Baure',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            417 =>
            array (
                'id' => 418,
                'state_id' => 21,
                'name' => 'Bindawa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            418 =>
            array (
                'id' => 419,
                'state_id' => 21,
                'name' => 'Charanchi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            419 =>
            array (
                'id' => 420,
                'state_id' => 21,
                'name' => 'Dandume',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            420 =>
            array (
                'id' => 421,
                'state_id' => 21,
                'name' => 'Danja',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            421 =>
            array (
                'id' => 422,
                'state_id' => 21,
                'name' => 'Dan Musa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            422 =>
            array (
                'id' => 423,
                'state_id' => 21,
                'name' => 'Daura',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            423 =>
            array (
                'id' => 424,
                'state_id' => 21,
                'name' => 'Dutsi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            424 =>
            array (
                'id' => 425,
                'state_id' => 21,
                'name' => 'Dutsin Ma',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            425 =>
            array (
                'id' => 426,
                'state_id' => 21,
                'name' => 'Faskari',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            426 =>
            array (
                'id' => 427,
                'state_id' => 21,
                'name' => 'Funtua',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            427 =>
            array (
                'id' => 428,
                'state_id' => 21,
                'name' => 'Ingawa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            428 =>
            array (
                'id' => 429,
                'state_id' => 21,
                'name' => 'Jibia',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            429 =>
            array (
                'id' => 430,
                'state_id' => 21,
                'name' => 'Kafur',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            430 =>
            array (
                'id' => 431,
                'state_id' => 21,
                'name' => 'Kaita',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            431 =>
            array (
                'id' => 432,
                'state_id' => 21,
                'name' => 'Kankara',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            432 =>
            array (
                'id' => 433,
                'state_id' => 21,
                'name' => 'Kankia',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            433 =>
            array (
                'id' => 434,
                'state_id' => 21,
                'name' => 'Katsina',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            434 =>
            array (
                'id' => 435,
                'state_id' => 21,
                'name' => 'Kurfi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            435 =>
            array (
                'id' => 436,
                'state_id' => 21,
                'name' => 'Kusada',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            436 =>
            array (
                'id' => 437,
                'state_id' => 21,
                'name' => 'Mai\'Adua',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            437 =>
            array (
                'id' => 438,
                'state_id' => 21,
                'name' => 'Malumfashi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            438 =>
            array (
                'id' => 439,
                'state_id' => 21,
                'name' => 'Mani',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            439 =>
            array (
                'id' => 440,
                'state_id' => 21,
                'name' => 'Mashi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            440 =>
            array (
                'id' => 441,
                'state_id' => 21,
                'name' => 'Matazu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            441 =>
            array (
                'id' => 442,
                'state_id' => 21,
                'name' => 'Musawa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            442 =>
            array (
                'id' => 443,
                'state_id' => 21,
                'name' => 'Rimi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            443 =>
            array (
                'id' => 444,
                'state_id' => 21,
                'name' => 'Sabuwa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            444 =>
            array (
                'id' => 445,
                'state_id' => 21,
                'name' => 'Safana',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            445 =>
            array (
                'id' => 446,
                'state_id' => 21,
                'name' => 'Sandamu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            446 =>
            array (
                'id' => 447,
                'state_id' => 21,
                'name' => 'Zango',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            447 =>
            array (
                'id' => 448,
                'state_id' => 22,
                'name' => 'Aleiro',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            448 =>
            array (
                'id' => 449,
                'state_id' => 22,
                'name' => 'Arewa Dandi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            449 =>
            array (
                'id' => 450,
                'state_id' => 22,
                'name' => 'Argungu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            450 =>
            array (
                'id' => 451,
                'state_id' => 22,
                'name' => 'Augie',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            451 =>
            array (
                'id' => 452,
                'state_id' => 22,
                'name' => 'Bagudo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            452 =>
            array (
                'id' => 453,
                'state_id' => 22,
                'name' => 'Birnin Kebbi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            453 =>
            array (
                'id' => 454,
                'state_id' => 22,
                'name' => 'Bunza',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            454 =>
            array (
                'id' => 455,
                'state_id' => 22,
                'name' => 'Dandi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            455 =>
            array (
                'id' => 456,
                'state_id' => 22,
                'name' => 'Fakai',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            456 =>
            array (
                'id' => 457,
                'state_id' => 22,
                'name' => 'Gwandu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            457 =>
            array (
                'id' => 458,
                'state_id' => 22,
                'name' => 'Jega',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            458 =>
            array (
                'id' => 459,
                'state_id' => 22,
                'name' => 'Kalgo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            459 =>
            array (
                'id' => 460,
                'state_id' => 22,
                'name' => 'Koko/Besse',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            460 =>
            array (
                'id' => 461,
                'state_id' => 22,
                'name' => 'Maiyama',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            461 =>
            array (
                'id' => 462,
                'state_id' => 22,
                'name' => 'Ngaski',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            462 =>
            array (
                'id' => 463,
                'state_id' => 22,
                'name' => 'Sakaba',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            463 =>
            array (
                'id' => 464,
                'state_id' => 22,
                'name' => 'Shanga',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            464 =>
            array (
                'id' => 465,
                'state_id' => 22,
                'name' => 'Suru',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            465 =>
            array (
                'id' => 466,
                'state_id' => 22,
                'name' => 'Wasagu/Danko',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            466 =>
            array (
                'id' => 467,
                'state_id' => 22,
                'name' => 'Yauri',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            467 =>
            array (
                'id' => 468,
                'state_id' => 22,
                'name' => 'Zuru',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            468 =>
            array (
                'id' => 469,
                'state_id' => 23,
                'name' => 'Adavi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            469 =>
            array (
                'id' => 470,
                'state_id' => 23,
                'name' => 'Ajaokuta',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            470 =>
            array (
                'id' => 471,
                'state_id' => 23,
                'name' => 'Ankpa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            471 =>
            array (
                'id' => 472,
                'state_id' => 23,
                'name' => 'Bassa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            472 =>
            array (
                'id' => 473,
                'state_id' => 23,
                'name' => 'Dekina',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            473 =>
            array (
                'id' => 474,
                'state_id' => 23,
                'name' => 'Ibaji',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            474 =>
            array (
                'id' => 475,
                'state_id' => 23,
                'name' => 'Idah',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            475 =>
            array (
                'id' => 476,
                'state_id' => 23,
                'name' => 'Igalamela Odolu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            476 =>
            array (
                'id' => 477,
                'state_id' => 23,
                'name' => 'Ijumu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            477 =>
            array (
                'id' => 478,
                'state_id' => 23,
                'name' => 'Kabba/Bunu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            478 =>
            array (
                'id' => 479,
                'state_id' => 23,
                'name' => 'Kogi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            479 =>
            array (
                'id' => 480,
                'state_id' => 23,
                'name' => 'Lokoja',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            480 =>
            array (
                'id' => 481,
                'state_id' => 23,
                'name' => 'Mopa Muro',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            481 =>
            array (
                'id' => 482,
                'state_id' => 23,
                'name' => 'Ofu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            482 =>
            array (
                'id' => 483,
                'state_id' => 23,
                'name' => 'Ogori/Magongo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            483 =>
            array (
                'id' => 484,
                'state_id' => 23,
                'name' => 'Okehi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            484 =>
            array (
                'id' => 485,
                'state_id' => 23,
                'name' => 'Okene',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            485 =>
            array (
                'id' => 486,
                'state_id' => 23,
                'name' => 'Olamaboro',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            486 =>
            array (
                'id' => 487,
                'state_id' => 23,
                'name' => 'Omala',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            487 =>
            array (
                'id' => 488,
                'state_id' => 23,
                'name' => 'Yagba East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            488 =>
            array (
                'id' => 489,
                'state_id' => 23,
                'name' => 'Yagba West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            489 =>
            array (
                'id' => 490,
                'state_id' => 24,
                'name' => 'Asa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            490 =>
            array (
                'id' => 491,
                'state_id' => 24,
                'name' => 'Baruten',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            491 =>
            array (
                'id' => 492,
                'state_id' => 24,
                'name' => 'Edu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            492 =>
            array (
                'id' => 493,
                'state_id' => 24,
                'name' => 'Ekiti, Kwara State',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            493 =>
            array (
                'id' => 494,
                'state_id' => 24,
                'name' => 'Ifelodun',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            494 =>
            array (
                'id' => 495,
                'state_id' => 24,
                'name' => 'Ilorin East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            495 =>
            array (
                'id' => 496,
                'state_id' => 24,
                'name' => 'Ilorin South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            496 =>
            array (
                'id' => 497,
                'state_id' => 24,
                'name' => 'Ilorin West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            497 =>
            array (
                'id' => 498,
                'state_id' => 24,
                'name' => 'Irepodun',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            498 =>
            array (
                'id' => 499,
                'state_id' => 24,
                'name' => 'Isin',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            499 =>
            array (
                'id' => 500,
                'state_id' => 24,
                'name' => 'Kaiama',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
        ));
        \DB::table('local_govts')->insert(array (
            0 =>
            array (
                'id' => 501,
                'state_id' => 24,
                'name' => 'Moro',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            1 =>
            array (
                'id' => 502,
                'state_id' => 24,
                'name' => 'Offa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            2 =>
            array (
                'id' => 503,
                'state_id' => 24,
                'name' => 'Oke Ero',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            3 =>
            array (
                'id' => 504,
                'state_id' => 24,
                'name' => 'Oyun',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            4 =>
            array (
                'id' => 505,
                'state_id' => 24,
                'name' => 'Pategi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            5 =>
            array (
                'id' => 506,
                'state_id' => 25,
                'name' => 'Agege',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            6 =>
            array (
                'id' => 507,
                'state_id' => 25,
                'name' => 'Ajeromi-Ifelodun',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            7 =>
            array (
                'id' => 508,
                'state_id' => 25,
                'name' => 'Alimosho',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            8 =>
            array (
                'id' => 509,
                'state_id' => 25,
                'name' => 'Amuwo-Odofin',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            9 =>
            array (
                'id' => 510,
                'state_id' => 25,
                'name' => 'Apapa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            10 =>
            array (
                'id' => 511,
                'state_id' => 25,
                'name' => 'Badagry',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            11 =>
            array (
                'id' => 512,
                'state_id' => 25,
                'name' => 'Epe',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            12 =>
            array (
                'id' => 513,
                'state_id' => 25,
                'name' => 'Eti Osa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            13 =>
            array (
                'id' => 514,
                'state_id' => 25,
                'name' => 'Ibeju-Lekki',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            14 =>
            array (
                'id' => 515,
                'state_id' => 25,
                'name' => 'Ifako-Ijaiye',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            15 =>
            array (
                'id' => 516,
                'state_id' => 25,
                'name' => 'Ikeja',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            16 =>
            array (
                'id' => 517,
                'state_id' => 25,
                'name' => 'Ikorodu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            17 =>
            array (
                'id' => 518,
                'state_id' => 25,
                'name' => 'Kosofe',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            18 =>
            array (
                'id' => 519,
                'state_id' => 25,
                'name' => 'Lagos Island',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            19 =>
            array (
                'id' => 520,
                'state_id' => 25,
                'name' => 'Lagos Mainland',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            20 =>
            array (
                'id' => 521,
                'state_id' => 25,
                'name' => 'Mushin',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            21 =>
            array (
                'id' => 522,
                'state_id' => 25,
                'name' => 'Ojo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            22 =>
            array (
                'id' => 523,
                'state_id' => 25,
                'name' => 'Oshodi-Isolo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            23 =>
            array (
                'id' => 524,
                'state_id' => 25,
                'name' => 'Shomolu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            24 =>
            array (
                'id' => 525,
                'state_id' => 25,
                'name' => 'Surulere, Lagos State',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            25 =>
            array (
                'id' => 526,
                'state_id' => 26,
                'name' => 'Akwanga',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            26 =>
            array (
                'id' => 527,
                'state_id' => 26,
                'name' => 'Awe',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            27 =>
            array (
                'id' => 528,
                'state_id' => 26,
                'name' => 'Doma',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            28 =>
            array (
                'id' => 529,
                'state_id' => 26,
                'name' => 'Karu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            29 =>
            array (
                'id' => 530,
                'state_id' => 26,
                'name' => 'Keana',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            30 =>
            array (
                'id' => 531,
                'state_id' => 26,
                'name' => 'Keffi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            31 =>
            array (
                'id' => 532,
                'state_id' => 26,
                'name' => 'Kokona',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            32 =>
            array (
                'id' => 533,
                'state_id' => 26,
                'name' => 'Lafia',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            33 =>
            array (
                'id' => 534,
                'state_id' => 26,
                'name' => 'Nasarawa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            34 =>
            array (
                'id' => 535,
                'state_id' => 26,
                'name' => 'Nasarawa Egon',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            35 =>
            array (
                'id' => 536,
                'state_id' => 26,
                'name' => 'Obi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            36 =>
            array (
                'id' => 537,
                'state_id' => 26,
                'name' => 'Toto',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            37 =>
            array (
                'id' => 538,
                'state_id' => 26,
                'name' => 'Wamba',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            38 =>
            array (
                'id' => 539,
                'state_id' => 27,
                'name' => 'Agaie',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            39 =>
            array (
                'id' => 540,
                'state_id' => 27,
                'name' => 'Agwara',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            40 =>
            array (
                'id' => 541,
                'state_id' => 27,
                'name' => 'Bida',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            41 =>
            array (
                'id' => 542,
                'state_id' => 27,
                'name' => 'Borgu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            42 =>
            array (
                'id' => 543,
                'state_id' => 27,
                'name' => 'Bosso',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            43 =>
            array (
                'id' => 544,
                'state_id' => 27,
                'name' => 'Chanchaga',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            44 =>
            array (
                'id' => 545,
                'state_id' => 27,
                'name' => 'Edati',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            45 =>
            array (
                'id' => 546,
                'state_id' => 27,
                'name' => 'Gbako',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            46 =>
            array (
                'id' => 547,
                'state_id' => 27,
                'name' => 'Gurara',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            47 =>
            array (
                'id' => 548,
                'state_id' => 27,
                'name' => 'Katcha',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            48 =>
            array (
                'id' => 549,
                'state_id' => 27,
                'name' => 'Kontagora',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            49 =>
            array (
                'id' => 550,
                'state_id' => 27,
                'name' => 'Lapai',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            50 =>
            array (
                'id' => 551,
                'state_id' => 27,
                'name' => 'Lavun',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            51 =>
            array (
                'id' => 552,
                'state_id' => 27,
                'name' => 'Magama',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            52 =>
            array (
                'id' => 553,
                'state_id' => 27,
                'name' => 'Mariga',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            53 =>
            array (
                'id' => 554,
                'state_id' => 27,
                'name' => 'Mashegu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            54 =>
            array (
                'id' => 555,
                'state_id' => 27,
                'name' => 'Mokwa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            55 =>
            array (
                'id' => 556,
                'state_id' => 27,
                'name' => 'Moya',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            56 =>
            array (
                'id' => 557,
                'state_id' => 27,
                'name' => 'Paikoro',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            57 =>
            array (
                'id' => 558,
                'state_id' => 27,
                'name' => 'Rafi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            58 =>
            array (
                'id' => 559,
                'state_id' => 27,
                'name' => 'Rijau',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            59 =>
            array (
                'id' => 560,
                'state_id' => 27,
                'name' => 'Shiroro',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            60 =>
            array (
                'id' => 561,
                'state_id' => 27,
                'name' => 'Suleja',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            61 =>
            array (
                'id' => 562,
                'state_id' => 27,
                'name' => 'Tafa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            62 =>
            array (
                'id' => 563,
                'state_id' => 27,
                'name' => 'Wushishi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            63 =>
            array (
                'id' => 564,
                'state_id' => 28,
                'name' => 'Abeokuta North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            64 =>
            array (
                'id' => 565,
                'state_id' => 28,
                'name' => 'Abeokuta South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            65 =>
            array (
                'id' => 566,
                'state_id' => 28,
                'name' => 'Ado-Odo/Ota',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            66 =>
            array (
                'id' => 567,
                'state_id' => 28,
                'name' => 'Egbado North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            67 =>
            array (
                'id' => 568,
                'state_id' => 28,
                'name' => 'Egbado South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            68 =>
            array (
                'id' => 569,
                'state_id' => 28,
                'name' => 'Ewekoro',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            69 =>
            array (
                'id' => 570,
                'state_id' => 28,
                'name' => 'Ifo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            70 =>
            array (
                'id' => 571,
                'state_id' => 28,
                'name' => 'Ijebu East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            71 =>
            array (
                'id' => 572,
                'state_id' => 28,
                'name' => 'Ijebu North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            72 =>
            array (
                'id' => 573,
                'state_id' => 28,
                'name' => 'Ijebu North East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            73 =>
            array (
                'id' => 574,
                'state_id' => 28,
                'name' => 'Ijebu Ode',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            74 =>
            array (
                'id' => 575,
                'state_id' => 28,
                'name' => 'Ikenne',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            75 =>
            array (
                'id' => 576,
                'state_id' => 28,
                'name' => 'Imeko Afon',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            76 =>
            array (
                'id' => 577,
                'state_id' => 28,
                'name' => 'Ipokia',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            77 =>
            array (
                'id' => 578,
                'state_id' => 28,
                'name' => 'Obafemi Owode',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            78 =>
            array (
                'id' => 579,
                'state_id' => 28,
                'name' => 'Odeda',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            79 =>
            array (
                'id' => 580,
                'state_id' => 28,
                'name' => 'Odogbolu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            80 =>
            array (
                'id' => 581,
                'state_id' => 28,
                'name' => 'Ogun Waterside',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            81 =>
            array (
                'id' => 582,
                'state_id' => 28,
                'name' => 'Remo North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            82 =>
            array (
                'id' => 583,
                'state_id' => 28,
                'name' => 'Shagamu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            83 =>
            array (
                'id' => 584,
                'state_id' => 29,
                'name' => 'Akoko North-East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            84 =>
            array (
                'id' => 585,
                'state_id' => 29,
                'name' => 'Akoko North-West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            85 =>
            array (
                'id' => 586,
                'state_id' => 29,
                'name' => 'Akoko South-West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            86 =>
            array (
                'id' => 587,
                'state_id' => 29,
                'name' => 'Akoko South-East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            87 =>
            array (
                'id' => 588,
                'state_id' => 29,
                'name' => 'Akure North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            88 =>
            array (
                'id' => 589,
                'state_id' => 29,
                'name' => 'Akure South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            89 =>
            array (
                'id' => 590,
                'state_id' => 29,
                'name' => 'Ese Odo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            90 =>
            array (
                'id' => 591,
                'state_id' => 29,
                'name' => 'Idanre',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            91 =>
            array (
                'id' => 592,
                'state_id' => 29,
                'name' => 'Ifedore',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            92 =>
            array (
                'id' => 593,
                'state_id' => 29,
                'name' => 'Ilaje',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            93 =>
            array (
                'id' => 594,
                'state_id' => 29,
                'name' => 'Ile Oluji/Okeigbo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            94 =>
            array (
                'id' => 595,
                'state_id' => 29,
                'name' => 'Irele',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            95 =>
            array (
                'id' => 596,
                'state_id' => 29,
                'name' => 'Odigbo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            96 =>
            array (
                'id' => 597,
                'state_id' => 29,
                'name' => 'Okitipupa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            97 =>
            array (
                'id' => 598,
                'state_id' => 29,
                'name' => 'Ondo East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            98 =>
            array (
                'id' => 599,
                'state_id' => 29,
                'name' => 'Ondo West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            99 =>
            array (
                'id' => 600,
                'state_id' => 29,
                'name' => 'Ose',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            100 =>
            array (
                'id' => 601,
                'state_id' => 29,
                'name' => 'Owo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            101 =>
            array (
                'id' => 602,
                'state_id' => 30,
                'name' => 'Atakunmosa East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            102 =>
            array (
                'id' => 603,
                'state_id' => 30,
                'name' => 'Atakunmosa West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            103 =>
            array (
                'id' => 604,
                'state_id' => 30,
                'name' => 'Aiyedaade',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            104 =>
            array (
                'id' => 605,
                'state_id' => 30,
                'name' => 'Aiyedire',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            105 =>
            array (
                'id' => 606,
                'state_id' => 30,
                'name' => 'Boluwaduro',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            106 =>
            array (
                'id' => 607,
                'state_id' => 30,
                'name' => 'Boripe',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            107 =>
            array (
                'id' => 608,
                'state_id' => 30,
                'name' => 'Ede North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            108 =>
            array (
                'id' => 609,
                'state_id' => 30,
                'name' => 'Ede South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            109 =>
            array (
                'id' => 610,
                'state_id' => 30,
                'name' => 'Ife Central',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            110 =>
            array (
                'id' => 611,
                'state_id' => 30,
                'name' => 'Ife East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            111 =>
            array (
                'id' => 612,
                'state_id' => 30,
                'name' => 'Ife North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            112 =>
            array (
                'id' => 613,
                'state_id' => 30,
                'name' => 'Ife South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            113 =>
            array (
                'id' => 614,
                'state_id' => 30,
                'name' => 'Egbedore',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            114 =>
            array (
                'id' => 615,
                'state_id' => 30,
                'name' => 'Ejigbo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            115 =>
            array (
                'id' => 616,
                'state_id' => 30,
                'name' => 'Ifedayo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            116 =>
            array (
                'id' => 617,
                'state_id' => 30,
                'name' => 'Ifelodun',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            117 =>
            array (
                'id' => 618,
                'state_id' => 30,
                'name' => 'Ila',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            118 =>
            array (
                'id' => 619,
                'state_id' => 30,
                'name' => 'Ilesa East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            119 =>
            array (
                'id' => 620,
                'state_id' => 30,
                'name' => 'Ilesa West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            120 =>
            array (
                'id' => 621,
                'state_id' => 30,
                'name' => 'Irepodun',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            121 =>
            array (
                'id' => 622,
                'state_id' => 30,
                'name' => 'Irewole',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            122 =>
            array (
                'id' => 623,
                'state_id' => 30,
                'name' => 'Isokan',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            123 =>
            array (
                'id' => 624,
                'state_id' => 30,
                'name' => 'Iwo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            124 =>
            array (
                'id' => 625,
                'state_id' => 30,
                'name' => 'Obokun',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            125 =>
            array (
                'id' => 626,
                'state_id' => 30,
                'name' => 'Odo Otin',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            126 =>
            array (
                'id' => 627,
                'state_id' => 30,
                'name' => 'Ola Oluwa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            127 =>
            array (
                'id' => 628,
                'state_id' => 30,
                'name' => 'Olorunda',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            128 =>
            array (
                'id' => 629,
                'state_id' => 30,
                'name' => 'Oriade',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            129 =>
            array (
                'id' => 630,
                'state_id' => 30,
                'name' => 'Orolu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            130 =>
            array (
                'id' => 631,
                'state_id' => 30,
                'name' => 'Osogbo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            131 =>
            array (
                'id' => 632,
                'state_id' => 31,
                'name' => 'Afijio',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            132 =>
            array (
                'id' => 633,
                'state_id' => 31,
                'name' => 'Akinyele',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            133 =>
            array (
                'id' => 634,
                'state_id' => 31,
                'name' => 'Atiba',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            134 =>
            array (
                'id' => 635,
                'state_id' => 31,
                'name' => 'Atisbo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            135 =>
            array (
                'id' => 636,
                'state_id' => 31,
                'name' => 'Egbeda',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            136 =>
            array (
                'id' => 637,
                'state_id' => 31,
                'name' => 'Ibadan North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            137 =>
            array (
                'id' => 638,
                'state_id' => 31,
                'name' => 'Ibadan North-East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            138 =>
            array (
                'id' => 639,
                'state_id' => 31,
                'name' => 'Ibadan North-West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            139 =>
            array (
                'id' => 640,
                'state_id' => 31,
                'name' => 'Ibadan South-East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            140 =>
            array (
                'id' => 641,
                'state_id' => 31,
                'name' => 'Ibadan South-West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            141 =>
            array (
                'id' => 642,
                'state_id' => 31,
                'name' => 'Ibarapa Central',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            142 =>
            array (
                'id' => 643,
                'state_id' => 31,
                'name' => 'Ibarapa East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            143 =>
            array (
                'id' => 644,
                'state_id' => 31,
                'name' => 'Ibarapa North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            144 =>
            array (
                'id' => 645,
                'state_id' => 31,
                'name' => 'Ido',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            145 =>
            array (
                'id' => 646,
                'state_id' => 31,
                'name' => 'Irepo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            146 =>
            array (
                'id' => 647,
                'state_id' => 31,
                'name' => 'Iseyin',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            147 =>
            array (
                'id' => 648,
                'state_id' => 31,
                'name' => 'Itesiwaju',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            148 =>
            array (
                'id' => 649,
                'state_id' => 31,
                'name' => 'Iwajowa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            149 =>
            array (
                'id' => 650,
                'state_id' => 31,
                'name' => 'Kajola',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            150 =>
            array (
                'id' => 651,
                'state_id' => 31,
                'name' => 'Lagelu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            151 =>
            array (
                'id' => 652,
                'state_id' => 31,
                'name' => 'Ogbomosho North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            152 =>
            array (
                'id' => 653,
                'state_id' => 31,
                'name' => 'Ogbomosho South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            153 =>
            array (
                'id' => 654,
                'state_id' => 31,
                'name' => 'Ogo Oluwa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            154 =>
            array (
                'id' => 655,
                'state_id' => 31,
                'name' => 'Olorunsogo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            155 =>
            array (
                'id' => 656,
                'state_id' => 31,
                'name' => 'Oluyole',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            156 =>
            array (
                'id' => 657,
                'state_id' => 31,
                'name' => 'Ona Ara',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            157 =>
            array (
                'id' => 658,
                'state_id' => 31,
                'name' => 'Orelope',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            158 =>
            array (
                'id' => 659,
                'state_id' => 31,
                'name' => 'Ori Ire',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            159 =>
            array (
                'id' => 660,
                'state_id' => 31,
                'name' => 'Oyo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            160 =>
            array (
                'id' => 661,
                'state_id' => 31,
                'name' => 'Oyo East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            161 =>
            array (
                'id' => 662,
                'state_id' => 31,
                'name' => 'Saki East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            162 =>
            array (
                'id' => 663,
                'state_id' => 31,
                'name' => 'Saki West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            163 =>
            array (
                'id' => 664,
                'state_id' => 31,
                'name' => 'Surulere, Oyo State',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            164 =>
            array (
                'id' => 665,
                'state_id' => 32,
                'name' => 'Bokkos',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            165 =>
            array (
                'id' => 666,
                'state_id' => 32,
                'name' => 'Barkin Ladi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            166 =>
            array (
                'id' => 667,
                'state_id' => 32,
                'name' => 'Bassa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            167 =>
            array (
                'id' => 668,
                'state_id' => 32,
                'name' => 'Jos East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            168 =>
            array (
                'id' => 669,
                'state_id' => 32,
                'name' => 'Jos North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            169 =>
            array (
                'id' => 670,
                'state_id' => 32,
                'name' => 'Jos South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            170 =>
            array (
                'id' => 671,
                'state_id' => 32,
                'name' => 'Kanam',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            171 =>
            array (
                'id' => 672,
                'state_id' => 32,
                'name' => 'Kanke',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            172 =>
            array (
                'id' => 673,
                'state_id' => 32,
                'name' => 'Langtang South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            173 =>
            array (
                'id' => 674,
                'state_id' => 32,
                'name' => 'Langtang North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            174 =>
            array (
                'id' => 675,
                'state_id' => 32,
                'name' => 'Mangu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            175 =>
            array (
                'id' => 676,
                'state_id' => 32,
                'name' => 'Mikang',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            176 =>
            array (
                'id' => 677,
                'state_id' => 32,
                'name' => 'Pankshin',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            177 =>
            array (
                'id' => 678,
                'state_id' => 32,
                'name' => 'Qua\'an Pan',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            178 =>
            array (
                'id' => 679,
                'state_id' => 32,
                'name' => 'Riyom',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            179 =>
            array (
                'id' => 680,
                'state_id' => 32,
                'name' => 'Shendam',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            180 =>
            array (
                'id' => 681,
                'state_id' => 32,
                'name' => 'Wase',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            181 =>
            array (
                'id' => 682,
                'state_id' => 33,
                'name' => 'Abua/Odual',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            182 =>
            array (
                'id' => 683,
                'state_id' => 33,
                'name' => 'Ahoada East',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            183 =>
            array (
                'id' => 684,
                'state_id' => 33,
                'name' => 'Ahoada West',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            184 =>
            array (
                'id' => 685,
                'state_id' => 33,
                'name' => 'Akuku-Toru',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            185 =>
            array (
                'id' => 686,
                'state_id' => 33,
                'name' => 'Andoni',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            186 =>
            array (
                'id' => 687,
                'state_id' => 33,
                'name' => 'Asari-Toru',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            187 =>
            array (
                'id' => 688,
                'state_id' => 33,
                'name' => 'Bonny',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            188 =>
            array (
                'id' => 689,
                'state_id' => 33,
                'name' => 'Degema',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            189 =>
            array (
                'id' => 690,
                'state_id' => 33,
                'name' => 'Eleme',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            190 =>
            array (
                'id' => 691,
                'state_id' => 33,
                'name' => 'Emuoha',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            191 =>
            array (
                'id' => 692,
                'state_id' => 33,
                'name' => 'Etche',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            192 =>
            array (
                'id' => 693,
                'state_id' => 33,
                'name' => 'Gokana',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            193 =>
            array (
                'id' => 694,
                'state_id' => 33,
                'name' => 'Ikwerre',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            194 =>
            array (
                'id' => 695,
                'state_id' => 33,
                'name' => 'Khana',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            195 =>
            array (
                'id' => 696,
                'state_id' => 33,
                'name' => 'Obio/Akpor',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            196 =>
            array (
                'id' => 697,
                'state_id' => 33,
                'name' => 'Ogba/Egbema/Ndoni',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            197 =>
            array (
                'id' => 698,
                'state_id' => 33,
                'name' => 'Ogu/Bolo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            198 =>
            array (
                'id' => 699,
                'state_id' => 33,
                'name' => 'Okrika',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            199 =>
            array (
                'id' => 700,
                'state_id' => 33,
                'name' => 'Omuma',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            200 =>
            array (
                'id' => 701,
                'state_id' => 33,
                'name' => 'Opobo/Nkoro',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            201 =>
            array (
                'id' => 702,
                'state_id' => 33,
                'name' => 'Oyigbo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            202 =>
            array (
                'id' => 703,
                'state_id' => 33,
                'name' => 'Port Harcourt',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            203 =>
            array (
                'id' => 704,
                'state_id' => 33,
                'name' => 'Tai',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            204 =>
            array (
                'id' => 705,
                'state_id' => 34,
                'name' => 'Binji',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            205 =>
            array (
                'id' => 706,
                'state_id' => 34,
                'name' => 'Bodinga',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            206 =>
            array (
                'id' => 707,
                'state_id' => 34,
                'name' => 'Dange Shuni',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            207 =>
            array (
                'id' => 708,
                'state_id' => 34,
                'name' => 'Gada',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            208 =>
            array (
                'id' => 709,
                'state_id' => 34,
                'name' => 'Goronyo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            209 =>
            array (
                'id' => 710,
                'state_id' => 34,
                'name' => 'Gudu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            210 =>
            array (
                'id' => 711,
                'state_id' => 34,
                'name' => 'Gwadabawa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            211 =>
            array (
                'id' => 712,
                'state_id' => 34,
                'name' => 'Illela',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            212 =>
            array (
                'id' => 713,
                'state_id' => 34,
                'name' => 'Isa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            213 =>
            array (
                'id' => 714,
                'state_id' => 34,
                'name' => 'Kebbe',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            214 =>
            array (
                'id' => 715,
                'state_id' => 34,
                'name' => 'Kware',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            215 =>
            array (
                'id' => 716,
                'state_id' => 34,
                'name' => 'Rabah',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            216 =>
            array (
                'id' => 717,
                'state_id' => 34,
                'name' => 'Sabon Birni',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            217 =>
            array (
                'id' => 718,
                'state_id' => 34,
                'name' => 'Shagari',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            218 =>
            array (
                'id' => 719,
                'state_id' => 34,
                'name' => 'Silame',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            219 =>
            array (
                'id' => 720,
                'state_id' => 34,
                'name' => 'Sokoto North',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            220 =>
            array (
                'id' => 721,
                'state_id' => 34,
                'name' => 'Sokoto South',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            221 =>
            array (
                'id' => 722,
                'state_id' => 34,
                'name' => 'Tambuwal',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            222 =>
            array (
                'id' => 723,
                'state_id' => 34,
                'name' => 'Tangaza',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            223 =>
            array (
                'id' => 724,
                'state_id' => 34,
                'name' => 'Tureta',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            224 =>
            array (
                'id' => 725,
                'state_id' => 34,
                'name' => 'Wamako',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            225 =>
            array (
                'id' => 726,
                'state_id' => 34,
                'name' => 'Wurno',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            226 =>
            array (
                'id' => 727,
                'state_id' => 34,
                'name' => 'Yabo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            227 =>
            array (
                'id' => 728,
                'state_id' => 35,
                'name' => 'Ardo Kola',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            228 =>
            array (
                'id' => 729,
                'state_id' => 35,
                'name' => 'Bali',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            229 =>
            array (
                'id' => 730,
                'state_id' => 35,
                'name' => 'Donga',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            230 =>
            array (
                'id' => 731,
                'state_id' => 35,
                'name' => 'Gashaka',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            231 =>
            array (
                'id' => 732,
                'state_id' => 35,
                'name' => 'Gassol',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            232 =>
            array (
                'id' => 733,
                'state_id' => 35,
                'name' => 'Ibi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            233 =>
            array (
                'id' => 734,
                'state_id' => 35,
                'name' => 'Jalingo',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            234 =>
            array (
                'id' => 735,
                'state_id' => 35,
                'name' => 'Karim Lamido',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            235 =>
            array (
                'id' => 736,
                'state_id' => 35,
                'name' => 'Kumi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            236 =>
            array (
                'id' => 737,
                'state_id' => 35,
                'name' => 'Lau',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            237 =>
            array (
                'id' => 738,
                'state_id' => 35,
                'name' => 'Sardauna',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            238 =>
            array (
                'id' => 739,
                'state_id' => 35,
                'name' => 'Takum',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            239 =>
            array (
                'id' => 740,
                'state_id' => 35,
                'name' => 'Ussa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            240 =>
            array (
                'id' => 741,
                'state_id' => 35,
                'name' => 'Wukari',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            241 =>
            array (
                'id' => 742,
                'state_id' => 35,
                'name' => 'Yorro',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            242 =>
            array (
                'id' => 743,
                'state_id' => 35,
                'name' => 'Zing',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            243 =>
            array (
                'id' => 744,
                'state_id' => 36,
                'name' => 'Bade',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            244 =>
            array (
                'id' => 745,
                'state_id' => 36,
                'name' => 'Bursari',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            245 =>
            array (
                'id' => 746,
                'state_id' => 36,
                'name' => 'Damaturu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            246 =>
            array (
                'id' => 747,
                'state_id' => 36,
                'name' => 'Fika',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            247 =>
            array (
                'id' => 748,
                'state_id' => 36,
                'name' => 'Fune',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            248 =>
            array (
                'id' => 749,
                'state_id' => 36,
                'name' => 'Geidam',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            249 =>
            array (
                'id' => 750,
                'state_id' => 36,
                'name' => 'Gujba',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            250 =>
            array (
                'id' => 751,
                'state_id' => 36,
                'name' => 'Gulani',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            251 =>
            array (
                'id' => 752,
                'state_id' => 36,
                'name' => 'Jakusko',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            252 =>
            array (
                'id' => 753,
                'state_id' => 36,
                'name' => 'Karasuwa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            253 =>
            array (
                'id' => 754,
                'state_id' => 36,
                'name' => 'Machina',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            254 =>
            array (
                'id' => 755,
                'state_id' => 36,
                'name' => 'Nangere',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            255 =>
            array (
                'id' => 756,
                'state_id' => 36,
                'name' => 'Nguru',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            256 =>
            array (
                'id' => 757,
                'state_id' => 36,
                'name' => 'Potiskum',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            257 =>
            array (
                'id' => 758,
                'state_id' => 36,
                'name' => 'Tarmuwa',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            258 =>
            array (
                'id' => 759,
                'state_id' => 36,
                'name' => 'Yunusari',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            259 =>
            array (
                'id' => 760,
                'state_id' => 36,
                'name' => 'Yusufari',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            260 =>
            array (
                'id' => 761,
                'state_id' => 37,
                'name' => 'Anka',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            261 =>
            array (
                'id' => 762,
                'state_id' => 37,
                'name' => 'Bakura',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            262 =>
            array (
                'id' => 763,
                'state_id' => 37,
                'name' => 'Birnin Magaji/Kiyaw',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            263 =>
            array (
                'id' => 764,
                'state_id' => 37,
                'name' => 'Bukkuyum',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            264 =>
            array (
                'id' => 765,
                'state_id' => 37,
                'name' => 'Bungudu',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            265 =>
            array (
                'id' => 766,
                'state_id' => 37,
                'name' => 'Gummi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            266 =>
            array (
                'id' => 767,
                'state_id' => 37,
                'name' => 'Gusau',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            267 =>
            array (
                'id' => 768,
                'state_id' => 37,
                'name' => 'Kaura Namoda',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            268 =>
            array (
                'id' => 769,
                'state_id' => 37,
                'name' => 'Maradun',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            269 =>
            array (
                'id' => 770,
                'state_id' => 37,
                'name' => 'Maru',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            270 =>
            array (
                'id' => 771,
                'state_id' => 37,
                'name' => 'Shinkafi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            271 =>
            array (
                'id' => 772,
                'state_id' => 37,
                'name' => 'Talata Mafara',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            272 =>
            array (
                'id' => 773,
                'state_id' => 37,
                'name' => 'Chafe',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
            273 =>
            array (
                'id' => 774,
                'state_id' => 37,
                'name' => 'Zurmi',
                'square_area' => rand(23453, 2435670),
                'population' => rand(34567, 10000000),
                'created_at' => '2019-05-07 08:12:04',
                'updated_at' => '2019-05-07 08:12:04',
            ),
        ));


    }
}