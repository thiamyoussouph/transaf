<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Admin User
        $user = User::create([
            'first_name'    => 'Super',
            'last_name'     => 'Admin',
            'email'         =>  'admin@admin.com',
            'mobile_number' =>  '9028187696',
            'password'      =>  Hash::make('Admin@123#'),
            'role_id'       => 1
        ]);

         // Create Admin User
         $user = User::create([
            'first_name'    => 'Antaal',
            'last_name'     => 'Gye',
            'email'         =>  'antaal@user.com',
            'mobile_number' =>  '786547898',
            'password'      =>  Hash::make('user'),
            'role_id'       => 2
        ]);

          // Create Admin User
          $user = User::create([
            'first_name'    => 'fatou',
            'last_name'     => 'Gye',
            'email'         =>  'fatou@user.com',
            'mobile_number' =>  '780987654',
            'password'      =>  Hash::make('user2'),
            'role_id'       => 3
        ]);

    }
}
