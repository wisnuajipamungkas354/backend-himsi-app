<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\Divisi;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Divisi::create([
            'nm_divisi' => 'BPH',
            'jobdesk' => 'Pengurus Harian HIMSI'
        ]);

        Divisi::create([
            'nm_divisi' => 'RSDM',
            'jobdesk' => 'Pengurus RSDM'
        ]);

        Anggota::create([
            'nim' => '19221106',
            'nama' => 'Wisnu Aji Pamungkas',
            'kelas' => '19.4A.24',
            'kota_lahir' => 'Brebes',
            'tgl_lahir' => '02-05-02',
            'no_hp' => '085889634432',
            'id_divisi' => '1'
        ]);

        Anggota::create([
            'nim' => '19221107',
            'nama' => 'Muhammad Naufal Saputra',
            'kelas' => '19.4A.24',
            'kota_lahir' => 'Cikarang',
            'tgl_lahir' => '04-05-04',
            'no_hp' => '085889634433',
            'id_divisi' => '2'
        ]);
    }
}
