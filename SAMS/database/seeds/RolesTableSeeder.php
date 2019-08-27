<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
        
        [
          'role_name' => 'Student',

        ],

        [
          'role_name' => 'Discipline Officer',
        ],

        [
          'role_name' => 'Guidance Counselor',
        ],
  
        [
          'role_name' => 'Teacher',
        ],

        [
          'role_name' => 'School Employee',
        ],

      ]);
    }
}
