<?php

use Illuminate\Database\Seeder;

class ParedaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paredoes')->insert([
            'emparedado' => 'Bozo',
            'data' => date_create_from_format("Y-m-d  H:i:s",'2015-07-02 18:00:00'),
            'idtema' => 1,
            'created_at' => date("Y-m-d  H:i:s"),
        ]);
    }
}
