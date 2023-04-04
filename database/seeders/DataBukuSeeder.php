<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('table_books')->insert([
            'judul' => 'Filosofi Teras',
            'pengarang' => 'Henry Manampiring',
            'jenis_buku' => 'Buku Umum',
            'harga' => 75.000,
            'qty' => 40,
            'kode_buku'=> 'BKN05'
        ]
    );
    
    }
}
