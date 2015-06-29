<?php

use Illuminate\Database\Seeder;

class PerguntaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perguntas')->insert([
            'pergunta' => 'Qual é mais divertido?',
            'idtema' => 1,
            'created_at' => date("Y-m-d  H:i:s"),
        ]);
    }
}
