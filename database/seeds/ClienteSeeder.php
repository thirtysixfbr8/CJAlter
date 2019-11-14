<?php

use Illuminate\Database\Seeder;
use App\Cliente;
use App\Particular;
use Illuminate\Database\Eloquent\Relations\Relation;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $morpMap = collect(Relation::morphMap()); 
        Cliente::insert([
            'clienteId' => '3',
            'clienteable_id' => '3',
            'clienteable_type' => $morpMap['particular']
        ]);
        
        Particular::insert([
            'particularId' => '3',
        ]);
    }
}
