<?php

use Illuminate\Database\Seeder;

class OpcaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opcoes')->insert([
            'opcao' => 'desenvolvimento front-end',
            'idpergunta' => 1,
            'created_at' => date("Y-m-d  H:i:s"),
        ]);

        DB::table('opcoes')->insert([
            'opcao' => 'desenvolvimento back-end',
            'idpergunta' => 1,
            'created_at' => date("Y-m-d  H:i:s"),
        ]);


    }
}
