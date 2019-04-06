<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staff')->delete();
        
        \DB::table('staff')->insert(array (
            0 => 
            array (
                'id' => 2,
                'staff_id' => 'DPRST00002',
                'username' => 'sagay.i.b.dpr.gov.ng',
                'first_name' => 'itse',
                'middle_name' => 'blessing',
                'surname' => 'sagay',
                'mobile_number' => '1234567890',
                'email_address' => 'codeplay.erniie@gmail.com',
                'password' => '$2y$10$XhXE4FH6T7J72OoUpN5qf.P9x0WE3UxvCaKu58vfDlW8LL0DnAFVi',
                'role' => 'Admin',
                'office' => 'Warri',
                'remember_token' => '9ucGhfb5JW5KnELQP52gb16n7Prk8UVnbLvuT8ncLiXhTheLDUR7HZAzKXxx',
                'created_at' => '2018-12-09 22:41:42',
                'updated_at' => '2018-12-09 22:41:42',
            ),
            1 => 
            array (
                'id' => 3,
                'staff_id' => 'DPRST00003',
                'username' => 'obi.m.m.dpr.gov.ng',
                'first_name' => 'mark',
                'middle_name' => 'mikel',
                'surname' => 'obi',
                'mobile_number' => '1234567890',
                'email_address' => 'obi@mark.com',
                'password' => '$2y$10$m0ZjFFtd6gtM7EyuLm5pD.l12hjf45JDpg6csT/UqqyzvLhMhGdo2',
                'role' => 'ZOPSCON',
                'office' => 'HQ',
                'remember_token' => '8VGZvWbbsVjxY9lLeARS6Kh8pH3ScisXOVp8JVtP75W5K6UIAcIoSClyGFly',
                'created_at' => '2018-12-09 22:46:05',
                'updated_at' => '2018-12-09 22:46:05',
            ),
            2 => 
            array (
                'id' => 4,
                'staff_id' => 'DPRST00004',
                'username' => 'plumber.j.f.dpr.gov.ng',
                'first_name' => 'joe',
                'middle_name' => 'farah',
                'surname' => 'plumber',
                'mobile_number' => '1234567890',
                'email_address' => 'joe@plumber.com',
                'password' => '$2y$10$1Be1kXm1nZfpv3G8lt0sLeCBNGY/xST0d2UuFyhKKpnRR3FYUCa7i',
                'role' => 'ADO',
                'office' => 'Warri',
                'remember_token' => '2Vf1XWxUSd2jDRhaWkAvjouiIMMRgHTSx65GDWm2CWsMjsajiD05bCWlmkdQ',
                'created_at' => '2018-12-09 22:46:50',
                'updated_at' => '2018-12-09 22:46:50',
            ),
            3 => 
            array (
                'id' => 5,
                'staff_id' => 'DPRST00005',
                'username' => 'manny.s.a.dpr.gov.ng',
                'first_name' => 'sarah',
                'middle_name' => 'ani',
                'surname' => 'manny',
                'mobile_number' => '1234567890',
                'email_address' => 'sarah@manny.com',
                'password' => '$2y$10$f7OHcths/HfgNIqrcUqvrOZ4RZBArw03Dlyp3tEeRxTCfBJN6RDXi',
                'role' => 'Head Gas M&G Lagos',
                'office' => 'Warri',
                'remember_token' => '5ABdAXajdJlo2PcCJUM8QIhuK1A4GK0qT2rMpfkDss7W5TLjXn3nxTqbyCFe',
                'created_at' => '2018-12-09 22:50:10',
                'updated_at' => '2018-12-09 22:50:10',
            ),
            4 => 
            array (
                'id' => 6,
                'staff_id' => 'DPRST00006',
                'username' => 'durant.b.j.dpr.gov.ng',
                'first_name' => 'bob',
                'middle_name' => 'john',
                'surname' => 'durant',
                'mobile_number' => '1234567890',
                'email_address' => 'bob@durant.com',
                'password' => '$2y$10$UJmdqYdHygWPmQthX1hxZ.0BAKnB4xk79prDB1s.9hxVA6rrdMXMe',
                'role' => 'Team Lead',
                'office' => 'Warri',
                'remember_token' => 'XtAOzznxpvCSg3eOrZDQORVJvsn6yhg03iIn9GKEyBr9ylce1fchjwBlZOnt',
                'created_at' => '2018-12-09 22:50:44',
                'updated_at' => '2018-12-09 22:50:44',
            ),
            5 => 
            array (
                'id' => 7,
                'staff_id' => 'DPRST00007',
                'username' => 'isha.m.g.dpr.gov.ng',
                'first_name' => 'mosay',
                'middle_name' => 'godwin',
                'surname' => 'isha',
                'mobile_number' => '1234567890',
                'email_address' => 'mosay@isha.com',
                'password' => '$2y$10$YLTWQWDWBNP4t8lSjzsgTO0wRr3xppwsRqU.0O.10T871x5X0Pm4W',
                'role' => 'Staff',
                'office' => 'Warri',
                'remember_token' => '0Ald6Ft3IcU4eknjhPL06QGXYy1ChbnaoIpzZwgZTGZ4G35cdTYjz6mxJ6RC',
                'created_at' => '2018-12-09 22:51:29',
                'updated_at' => '2018-12-09 22:51:29',
            ),
            6 => 
            array (
                'id' => 8,
                'staff_id' => 'DPRMKT00008',
                'username' => 'spiro.j.m.dpr.gov.ng',
                'first_name' => 'jerry',
                'middle_name' => 'matt',
                'surname' => 'spiro',
                'mobile_number' => '1234567890',
                'email_address' => 'jerry@spiro.com',
                'password' => '$2y$10$Eup1lMF51KvuxiflKgZ1OuoZryKw1zfwGWJFioegHp63m.dpLyFPK',
                'role' => 'Marketer',
                'office' => 'Marketer',
                'remember_token' => 'gPhhlumUlGzkVvG2yvEFN2yth6xZQnynysuMHePCpQhjxVTlmulrfODgGS3n',
                'created_at' => '2018-12-09 22:52:29',
                'updated_at' => '2018-12-09 22:52:29',
            ),
            7 => 
            array (
                'id' => 9,
                'staff_id' => 'DPRST00008',
                'username' => 'sapele.u.e.dpr.gov.ng',
                'first_name' => 'udu',
                'middle_name' => 'eff',
                'surname' => 'sapele',
                'mobile_number' => '2136453468759',
                'email_address' => 'udu@yahoo.com',
                'password' => '$2y$10$6kwVPRtm5H047Ib/iCrVau.YetVhQP4iZ9rtc2gXvKnIxN.jP4CL.',
                'role' => 'Manager Gas',
                'office' => 'Warri',
                'remember_token' => 'MPm2Fw5wSiMN95wwvsiTHeiLr8RIN9GJ54cmcrnwNxfhY5Xo9DcP25Qy9RFl',
                'created_at' => '2019-01-29 15:42:47',
                'updated_at' => '2019-01-29 15:42:47',
            ),
            8 => 
            array (
                'id' => 10,
                'staff_id' => 'DPRST00009',
                'username' => 'nunez.j.s.dpr.gov.ng',
                'first_name' => 'jorge',
                'middle_name' => 'salcedo',
                'surname' => 'nunez',
                'mobile_number' => '35434756865865',
                'email_address' => 'jorg@yahoo.com',
                'password' => '$2y$10$2teQWdZbcyVIwARmhzoyIuSLNXvEpNP6NKy2D3cYEv3GEUi85ktwi',
                'role' => 'ZOPSCON',
                'office' => 'Warri',
                'remember_token' => 'qffTofTHXcV986Cxxp5UuXyCGwUwEvWrpMJuQoMBXmIlPTbv1kTepfHJ9HdA',
                'created_at' => '2019-01-29 19:01:11',
                'updated_at' => '2019-01-29 19:01:11',
            ),
            9 => 
            array (
                'id' => 11,
                'staff_id' => 'DPRST00010',
                'username' => 'Mene.J.T.dpr.gov.ng',
                'first_name' => 'Jackson',
                'middle_name' => 'Tosan',
                'surname' => 'Mene',
                'mobile_number' => '2132463574685',
                'email_address' => 'Jatosan@gmail.com',
                'password' => '$2y$10$f18m87hW.U5R0pmf2HUiuel/8F53wK5i8P4L4CBEyRSPYwqQkaKmK',
                'role' => 'Team Lead',
                'office' => 'HQ',
                'remember_token' => 'V6q8tjpuFH01I5BvbKfYjHYTQhYlbmW4l5xyHst0Ayyq8yYpxec6qYRcO993',
                'created_at' => '2019-01-31 09:48:23',
                'updated_at' => '2019-01-31 09:48:23',
            ),
            10 => 
            array (
                'id' => 12,
                'staff_id' => 'DPRST00011',
                'username' => 'Chibuzor.E.R.dpr.gov.ng',
                'first_name' => 'Emeka',
                'middle_name' => 'Ronald',
                'surname' => 'Chibuzor',
                'mobile_number' => '134635742631',
                'email_address' => 'emeks@yahoo.com',
                'password' => '$2y$10$G3Jf.nFxXOeaII5.cKVV9eIF94LwCzhInBRfimsrYdt3JmuvfLPpi',
                'role' => 'Head Gas M&G Lagos',
                'office' => 'HQ',
                'remember_token' => 'f23VlPedhhJuvCJSKgYvo4tTgxILzbKRxpQaqtPYRhBJ9JEyzRrbsD5QbLnh',
                'created_at' => '2019-02-05 12:52:07',
                'updated_at' => '2019-02-05 12:52:07',
            ),
            11 => 
            array (
                'id' => 13,
                'staff_id' => 'DPRST00012',
                'username' => 'Pena.J.O.dpr.gov.ng',
                'first_name' => 'John',
                'middle_name' => 'Onoriode',
                'surname' => 'Pena',
                'mobile_number' => '089799768798',
                'email_address' => 'Jonny@gmail.com',
                'password' => '$2y$10$IlodOzjrkS2HDysMG8pcrufrS3oRkGKm/io.Op4Pf2jA0XcainZ5q',
                'role' => 'Manager Gas',
                'office' => 'HQ',
                'remember_token' => '95yWxH99kMeOf6Y1gYPUto9oTtSeZjrh2SJMjpJjrx5nH9fAYKOaZwf0aGBb',
                'created_at' => '2019-02-05 12:59:30',
                'updated_at' => '2019-02-05 12:59:30',
            ),
            12 => 
            array (
                'id' => 14,
                'staff_id' => 'DPRST00013',
                'username' => 'Aregbeshola.O.R.dpr.gov.ng',
                'first_name' => 'Olukolade',
                'middle_name' => 'Richard',
                'surname' => 'Aregbeshola',
                'mobile_number' => '7860493635',
                'email_address' => 'kola@gmail.com',
                'password' => '$2y$10$0x/Hsd35M4aEUgajtavNfudHH9E1je7oKkAc4lxJMXPx2lTJYyyWm',
                'role' => 'ADO',
                'office' => 'HQ',
                'remember_token' => 'AiaQ43SDmJKWEjo2ibspi2tuhYoqtO0brysLzZq8UNkvpLNgHAzT9oT6EfLB',
                'created_at' => '2019-02-05 13:01:27',
                'updated_at' => '2019-02-05 13:01:27',
            ),
            13 => 
            array (
                'id' => 15,
                'staff_id' => 'DPRST00014',
                'username' => 'Olasanya.A.B.dpr.gov.ng',
                'first_name' => 'Ayoola',
                'middle_name' => 'Ben',
                'surname' => 'Olasanya',
                'mobile_number' => '0902563423624',
                'email_address' => 'ayben@yahoo.com',
                'password' => '$2y$10$4FMJ7llThc16402AbAC6qOPC6zK6LpAUIb/XpLluIguPPUmyZb1Wa',
                'role' => 'Staff',
                'office' => 'HQ',
                'remember_token' => 'lvwyfHQlWGYKxB74twoe1t57DeJot6MwLtioPh10cBiLUw6YKC6i96H1srr6',
                'created_at' => '2019-02-05 13:04:29',
                'updated_at' => '2019-02-05 13:04:29',
            ),
        ));
        
        
    }
}