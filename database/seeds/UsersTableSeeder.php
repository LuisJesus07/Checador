<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->nombre = "Luis Jesus";
        $user->apellidos = "Aviles Morales";
        $user->fechaNacimiento = "1997-12-07";
        $user->telefono = "6123948953";
        $user->email = "Luis@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role = 1; 
        $user->save();

        $user = new User();
        $user->nombre = "Juan Diego";
        $user->apellidos = "Zarate Hernandez";
        $user->fechaNacimiento = "1980-12-27";
        $user->telefono = "612374785";
        $user->email = "JuanDiego@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role = 2; 
        $user->save();
    }
}
