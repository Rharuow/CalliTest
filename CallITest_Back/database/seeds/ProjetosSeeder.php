<?php

use Illuminate\Database\Seeder;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert(['name'=>"Projeto 1", 'administrators_id'=>"4"]);
        DB::table('projects')->insert(['name'=>"Projeto 2", 'administrators_id'=>"3"]);
        DB::table('projects')->insert(['name'=>"Projeto 3", 'administrators_id'=>"2"]);
        DB::table('projects')->insert(['name'=>"Projeto 4", 'administrators_id'=>"1"]);
    }
}
