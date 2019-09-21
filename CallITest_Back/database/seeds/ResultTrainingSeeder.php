<?php

use Illuminate\Database\Seeder;

class ResultTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('result_trainings')->insert(["biggestErrorTime"=>1,
        "totalError"=> 3,
        "totalTime"=> '00:00:00',
        "touchscreenNum"=>  2,
        "training_id"=> 4]);
        DB::table('result_trainings')->insert(["biggestErrorTime"=>2,
        "totalError"=>	4,
        "totalTime"=>	'00:00:00',
        "touchscreenNum"=>  2,
        "training_id"=> 3]);
        DB::table('result_trainings')->insert(["biggestErrorTime"=>3,
        "totalError"=>	4,
        "totalTime"=>	'00:00:00',
        "touchscreenNum"=>  2,
        "training_id"=> 2]);
        DB::table('result_trainings')->insert(["biggestErrorTime"=>4,
        "totalError"=> 3,
        "totalTime"=> '00:00:00',
        "touchscreenNum"=> 2,
        "training_id"=> 1]);
    }
}
