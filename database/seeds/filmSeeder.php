<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class filmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'kd_film' => 'F001',
            'nm_film' => 'IRON MAN',
            'genre' => 'G001',  
            'artis' => 'A001',
            'produser' => 'PD01',
            'pendapatan' => 20000000000,
            'nominasi' => 3
        ]);
        DB::table('films')->insert([
            'kd_film' => 'F002',
            'nm_film' => 'IRON MAN 2',
            'genre' => 'G001',  
            'artis' => 'A001',
            'produser' => 'PD01',
            'pendapatan' => 1800000000000,
            'nominasi' => 2
        ]);
        DB::table('films')->insert([
            'kd_film' => 'F003',
            'nm_film' => 'IRON MAN 3',
            'genre' => 'G001',  
            'artis' => 'A001',
            'produser' => 'PD01',
            'pendapatan' => 1200000000000,
            'nominasi' => 0
        ]);
        DB::table('films')->insert([
            'kd_film' => 'F004',
            'nm_film' => 'AVENGER : CIVIL WAR',
            'genre' => 'G001',  
            'artis' => 'A001',
            'produser' => 'PD01',
            'pendapatan' => 200000000000,
            'nominasi' => 1
        ]);
        DB::table('films')->insert([
            'kd_film' => 'F005',
            'nm_film' => 'SUPERMAN HOME COMING',
            'genre' => 'G001',  
            'artis' => 'A001',
            'produser' => 'PD01',
            'pendapatan' => 1300000000000,
            'nominasi' => 0
        ]);
        DB::table('films')->insert([
            'kd_film' => 'F006',
            'nm_film' => 'THE RAID',
            'genre' => 'G001',  
            'artis' => 'A004',
            'produser' => 'PD03',
            'pendapatan' => 80000000000,
            'nominasi' => 5
        ]);
        DB::table('films')->insert([
            'kd_film' => 'F007',
            'nm_film' => 'FAST & FARIOUS',
            'genre' => 'G001',  
            'artis' => 'A004',
            'produser' => 'PD03',
            'pendapatan' => 83000000000,
            'nominasi' => 2
        ]);
        DB::table('films')->insert([
            'kd_film' => 'F008',
            'nm_film' => 'HABIBIE & AINUN',
            'genre' => 'G004',  
            'artis' => 'A005',
            'produser' => 'PD03',
            'pendapatan' => 67000000000,
            'nominasi' => 4
        ]);
        DB::table('films')->insert([
            'kd_film' => 'F009',
            'nm_film' => 'POLICE STORY',
            'genre' => 'G001',  
            'artis' => 'A003',
            'produser' => 'PD02',
            'pendapatan' => 70000000000,
            'nominasi' => 3
        ]);
        DB::table('films')->insert([
            'kd_film' => 'F010',
            'nm_film' => 'POLICE STORY 2',
            'genre' => 'G001',  
            'artis' => 'A003',
            'produser' => 'PD02',
            'pendapatan' => 71000000000,
            'nominasi' => 1
        ]);
        DB::table('films')->insert([
            'kd_film' => 'F011',
            'nm_film' => 'POLICE STORY 3',
            'genre' => 'G001',  
            'artis' => 'A003',
            'produser' => 'PD02',
            'pendapatan' => 61500000000,
            'nominasi' => 0
        ]);
        DB::table('films')->insert([
            'kd_film' => 'F013',
            'nm_film' => 'KUNFU PANDA',
            'genre' => 'G003',  
            'artis' => 'A003',
            'produser' => 'PD05',
            'pendapatan' => 92300000000,
            'nominasi' => 5
        ]);
    }
}
