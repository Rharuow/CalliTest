<?php

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert(['name'=>"TESTE 1", 'project_id'=>"4"]);
        DB::table('tests')->insert(['name'=>"TESTE 2", 'project_id'=>"3"]);
        DB::table('tests')->insert(['name'=>"TESTE 3", 'project_id'=>"2"]);
        DB::table('tests')->insert(['name'=>"TESTE 4", 'project_id'=>"1"]);
    }
}
