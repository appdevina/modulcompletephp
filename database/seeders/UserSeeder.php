<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'full_name' => 'DEDE SUPRIYATNO',
                'username' => '2015.08.14.01',
                'password' => bcrypt('complete123'),
                'divisi_id' => 10,
                'sub_divisi_id' => null,
                'job_level_id' => 4,
            ],
            [
                'full_name' => 'EKY PERMANA',
                'username' => '2019.02.25.03',
                'password' => bcrypt('complete123'),
                'divisi_id' => 10,
                'sub_divisi_id' => null,
                'job_level_id' => 3,
            ],
            [
                'full_name' => 'BURHANUDIN YUSUF',
                'username' => '2019.09.13.02',
                'password' => bcrypt('complete123'),
                'divisi_id' => 10,
                'sub_divisi_id' => null,
                'job_level_id' => 2,
            ],
            [
                'full_name' => 'SUNENDAR',
                'username' => '2009.05.06.01',
                'password' => bcrypt('complete123'),
                'divisi_id' => 4,
                'sub_divisi_id' => 4,
                'job_level_id' => 4,
            ],
            [
                'full_name' => 'admin',
                'username' => 'admin',
                'password' => bcrypt('complete123'),
                'divisi_id' => 12,
                'sub_divisi_id' => null,
                'job_level_id' => 1,
            ],
        ]);
    }
}
