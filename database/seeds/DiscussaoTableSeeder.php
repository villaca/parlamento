<?php

use Illuminate\Database\Seeder;

class DiscussaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discussoes')->insert([
            'assunto' => 'back-end vs front-end',
            'idtema' => 1,
            'created_at' => date("Y-m-d  H:i:s"),
        ]);
    }
}
