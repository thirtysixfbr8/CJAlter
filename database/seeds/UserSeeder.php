<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Relations\Relation;

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

        $morpMap = collect(Relation::morphMap()); 
        
        User::insert([
            'name' => 'Administrador',
            'email'=>'admin@cja.co.ao',
            'username' => 'Admin', 
            'password' => Hash::make('Admin.2019#'),
            'telemovel' => '940262168', 
            'perfilId' => '1',
            'userable_id' => '1',
            'userable_type' => 'Admin'
        ]);
        User::insert([
            'name' => 'Mediador Teste',
            'email'=>'mediador@cja.com',
            'username' => 'Mediador', 
            'password' => Hash::make('jja'),
            'telemovel' => '940262169', 
            'perfilId' => '2',
            'userable_id' => '2',
            'userable_type' => $morpMap['mediador']
        ]);
        User::insert([
            'name' => 'Cliente Teste',
            'email'=>'cliente@cja.com',
            'username' => 'Cliente', 
            'password' => Hash::make('jja'),
            'telemovel' => '940262170', 
            'perfilId' => '4',
            'userable_id' => '3',
            'userable_type' => $morpMap['cliente']
        ]);
    }
}
