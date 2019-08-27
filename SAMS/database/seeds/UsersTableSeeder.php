<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        [
          'id_number' => '2011-100422',
          'role_id' => '1',
          'username' => 'student',
          'name' => 'John Doe',
          'email' => 'jdoe@student.apc.edu.ph',
          'password' => 'password',
        ],

        [
          'id_number' => '2013-100222',
          'role_id' => '2',
          'username' => 'disciplineoofficer',
          'name' => 'John Doe',
          'email' => 'do@student.apc.edu.ph',
          'password' => 'password',
          
        ],

        [
          'id_number' => '2014-100422',
          'role_id' => '3',
          'username' => 'guidancecounselor',
          'name' => 'John Doe',
          'email' => 'gc@student.apc.edu.ph',
          'password' => 'password',
          
        ],
  
        [
          'id_number' => '2013-100422',
          'role_id' => '4',
          'username' => 'teacher',
          'name' => 'John Doe',
          'email' => 'teacher@student.apc.edu.ph',
          'password' => 'password',
        ],
        [
          'id_number' => '2013-100422',
          'role_id' => '5',
          'username' => 'schoolemployee',
          'name' => 'John Doe',
          'email' => 'se@student.apc.edu.ph',
          'password' => 'password',
        ],
      ]);
      
    }
}
