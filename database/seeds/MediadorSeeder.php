<?php

use Illuminate\Database\Seeder;
use App\Mediador;

class MediadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mediador::insert(['mediadorId' => '2']);
    }
}
