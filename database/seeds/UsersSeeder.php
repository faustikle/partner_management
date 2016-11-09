<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $newUser = new User([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        
        $newUser->save();
    }
}
