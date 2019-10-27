<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ModalidadeSeeder::class,
            PerfilSeeder::class,
            UserSeeder::class,
            ClienteSeeder::class,
            MediadorSeeder::class,
            SolicitacaoSeeder::class,
        ]);
    }
}
