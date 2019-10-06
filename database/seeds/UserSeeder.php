<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Campo para Foto;
        //Os outros users não tem username papá
        User::insert([
            'name' => 'Administrador',
            'email'=>'admin@cja.co.ao',
            'username' => 'Admin', 
            'password' => Hash::make('Admin.2019#'),
            'telemovel' => '940262168', 
            'perfilId' => '1'
        ]);
    }
}
