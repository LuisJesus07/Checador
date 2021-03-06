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
        $user->matricula = "2016082426";
        $user->fechaNacimiento = "1997-12-07";
        $user->telefono = "6123948953";
        $user->email = "Luis@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role = 1; 
        $user->save();

        $user = new User();
        $user->nombre = "Juan Diego";
        $user->apellidos = "Zarate Hernandez";
        $user->matricula = "2016082325";
        $user->fechaNacimiento = "1980-12-27";
        $user->telefono = "612374785";
        $user->email = "Juan@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role = 2; 
        $user->save();

        $user = new User();
        $user->nombre = "Jose Alfredo";
        $user->apellidos = "Trasviña Fischer";
        $user->matricula = "2016935649";
        $user->fechaNacimiento = "1990-04-15";
        $user->telefono = "6124803927";
        $user->email = "Alfredo@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role = 2;
        $user->save();
    }
}
