<?php

use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert(["name"=>"Exemplo 1", "code"=>"dajshdusah", "marking"=>"Cauda", "cage"=>"saudhsadus", "sex"=>"M"]);
        DB::table('animals')->insert(["name"=>"Exemplo 2", "code"=>"asdjasojd", "marking"=>"Cauda", "cage"=>"saudhsadus", "sex"=>"F"]);
        DB::table('animals')->insert(["name"=>"Exemplo 3", "code"=>"j sadisja", "marking"=>"Cauda", "cage"=>"saudhsadus", "sex"=>"M"]);
        DB::table('animals')->insert(["name"=>"Exemplo 4", "code"=>" daspokd as", "marking"=>"Cauda", "cage"=>"saudhsadus", "sex"=>"F"]);
    }
}
