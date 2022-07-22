<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         \DB::table('staffs')->delete();
        
        \DB::table('staffs')->insert(array (
            0 => [
                'name'=>'ademola',
              'email'=>'ademola@gmail.com',
              'password'=>bcrypt('ademola78'),
              'role'=>'HR',
              'department'=>'General',
              'level' => 1,
            ],
            1 => [
                'name'=>'wale',
              'email'=>'wale@gmail.com',
              'password'=>bcrypt('ademola78'),
              'role'=>'staff',
              'department'=>'engineering',
              'level' => 0,
            ],
            2 => [
                'name'=>'salam',
              'email'=>'salam@gmail.com',
              'password'=>bcrypt('ademola78'),
              'role'=>'HOD',
              'department'=>'engineering',
              'level' => 0,
            ],
        ));
    }
}
