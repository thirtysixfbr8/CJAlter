<?php

use Illuminate\Database\Seeder;
use App\Perfil;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perfil::insert([
            'perfil' => 'Administrador'
        ]);
        
        Perfil::insert([
            'perfil' => 'Mediador'
        ]);
        
        Perfil::insert([
            'perfil' => 'Empresa'
        ]);
        
        Perfil::insert([
            'perfil' => 'Particular'
        ]);
    }
}
