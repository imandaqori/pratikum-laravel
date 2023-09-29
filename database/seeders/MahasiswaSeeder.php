<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'id' => '1',
            'nim' => '1855201031',
            'status' => 'Tidak Aktif',
            'semester' => '8'
        ]);

        DB::table('mahasiswa_details')->insert([
            'id' => '1',
            'mahasiswa_id' => '1',
            'nama_lengkap' => 'Qori Imanda',
            'tgl_lahir' => '2000-05-19',
            'alamat' => 'jln.agusalim'
        ]);
    }
}
