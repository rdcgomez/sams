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
          'name' => 'Student Name',
          'email' => 'jdoe@student.apc.edu.ph',
          'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
          'remember_token' => Str::random(10),
        ],

        [
          'id_number' => '2013-100222',
          'role_id' => '2',
          'username' => 'disciplineoofficer',
          'name' => 'Raymart Cabiten',
          'email' => 'do@apc.edu.ph',
          'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
          'remember_token' => Str::random(10),
          
        ],

        [
          'id_number' => '2014-100422',
          'role_id' => '3',
          'username' => 'guidancecounselor',
          'name' => 'Angel Arca',
          'email' => 'gc@apc.edu.ph',
          'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
          'remember_token' => Str::random(10),
          
        ],
  
        [
          'id_number' => '2013-100422',
          'role_id' => '4',
          'username' => 'teacher',
          'name' => 'Jojo Castillo',
          'email' => 'teacher@apc.edu.ph',
          'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
          'remember_token' => Str::random(10),
        ],
        [
          'id_number' => '2013-100422',
          'role_id' => '5',
          'username' => 'receptionist',
          'name' => 'Jane Doe',
          'email' => 'se@apc.edu.ph',
          'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
          'remember_token' => Str::random(10),
        ],
      ]);
      
    }
}
