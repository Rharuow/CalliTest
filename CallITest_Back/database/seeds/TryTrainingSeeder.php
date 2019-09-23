<?php

use Illuminate\Database\Seeder;

class TryTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('try_trainings')->insert(["type"=>"Forma",
        "shape"=> "Circle",
        "color"=> 'Blue',
        "training_id"=> 4]);
        DB::table('try_trainings')->insert(["type"=>"Cor",
        "shape"=> "Triangle",
        "color"=>	'Blue',
        "training_id"=> 3]);
        DB::table('try_trainings')->insert(["type"=>"Cor",
        "shape"=> "Square",
        "color"=>	'Blue',
        "training_id"=> 2]);
        DB::table('try_trainings')->insert(["type"=>"Froma e cor",
        "shape"=> "Hexagonal",
        "color"=> 'Blue',
        "training_id"=> 1]);
    }
}
