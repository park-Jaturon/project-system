<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') -> insert([
            'name' => 'teacher1',
            'password' => Hash::make('t123456789'),
            'caste' =>  'teacher',
        ]);

        DB::table('users') -> insert([
            'name' => 'users1',
            'password' => Hash::make('s123456789'),
            'caste' =>  'parents',
        ]);
    }
}
