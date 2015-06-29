<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nome' => str_random(10),
            'login' => 'user1',
            'senha' => 'user1',//bcrypt('secret'),
            'foto' => '01.jpeg',
        ]);
    }
}
