<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // User::truncate();
      
         $user = User::create([
            'name'     => 'Shofi',
            'email'    => 'okdone@gmail.com',
            'password' =>    bcrypt('mdsfpk2231'),
            'role_id'  => Role::find(1)->id,
        ]);



    }
}
