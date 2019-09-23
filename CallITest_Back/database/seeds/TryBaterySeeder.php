<?php

use Illuminate\Database\Seeder;

class TryBaterySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('try_bateries')->insert(["type"=>"Forma",
        "shape"=> "Circle",
        "color"=> 'Blue',
        "batery_id"=> 4]);
        DB::table('try_bateries')->insert(["type"=>"Cor",
        "shape"=> "Triangle",
        "color"=>	'Blue',
        "batery_id"=> 3]);
        DB::table('try_bateries')->insert(["type"=>"Cor",
        "shape"=> "Square",
        "color"=>	'Blue',
        "batery_id"=> 2]);
        DB::table('try_bateries')->insert(["type"=>"Froma e cor",
        "shape"=> "Hexagonal",
        "color"=> 'Blue',
        "batery_id"=> 1]);
    }
}
