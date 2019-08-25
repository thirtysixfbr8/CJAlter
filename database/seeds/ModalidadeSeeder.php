<?php

use Illuminate\Database\Seeder;
use App\Modalidade;

class ModalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modalidade::insert([
            'modalidade' => 'Saúde'
        ]);
        
        Modalidade::insert([
            'modalidade' => 'Automóvel'
        ]);

        Modalidade::insert([
            'modalidade' => 'Viagem'
        ]);

    }
}
