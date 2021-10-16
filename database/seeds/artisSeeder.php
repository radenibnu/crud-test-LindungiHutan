<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class artisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artis')->insert([
            'kd_artis' => 'A001', 
            'nm_artis' => 'ROBERT DOWNEY JR', 
            'jk' => 'PRIA', 
            'bayaran' => 10000000, 
            'award' => 2,
            'negara' => 'AS', 
        ]);

        DB::table('artis')->insert([
            'kd_artis' => 'A002', 
            'nm_artis' => 'ANGELINA JOLIE', 
            'jk' => 'WANITA', 
            'bayaran' => 70000000, 
            'award' => 1,
            'negara' => 'AS', 
        ]);

        DB::table('artis')->insert([
            'kd_artis' => 'A003', 
            'nm_artis' => 'JACKIE CHAN', 
            'jk' => 'PRIA', 
            'bayaran' => 20000000, 
            'award' => 7,
            'negara' => 'HK', 
        ]);

        DB::table('artis')->insert([
            'kd_artis' => 'A004', 
            'nm_artis' => 'JOE TASLIM', 
            'jk' => 'PRIA', 
            'bayaran' => 350000000, 
            'award' => 1,
            'negara' => 'ID', 
        ]);

        DB::table('artis')->insert([
            'kd_artis' => 'A005', 
            'nm_artis' => 'CHELSEA ISLAN', 
            'jk' => 'WANITA', 
            'bayaran' => 30000000, 
            'award' => 0 ,
            'negara' => 'ID', 
        ]);
    }
}
