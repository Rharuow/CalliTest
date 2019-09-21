<?php

use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')->insert(["tryNum"=>1,
        "tryTime"=> '00:00:00',
        "errorTime"=> '00:00:00',
        "rewardTime"=>  '00:00:00',
        "test_id"=> 4]);
        DB::table('trainings')->insert(["tryNum"=>2,
        "tryTime"=>	'00:00:00',
        "errorTime"=>	'00:00:00',
        "rewardTime"=>  '00:00:00',
        "test_id"=> 3]);
        DB::table('trainings')->insert(["tryNum"=>3,
        "tryTime"=>	'00:00:00',
        "errorTime"=>	'00:00:00',
        "rewardTime"=>  '00:00:00',
        "test_id"=> 2]);
        DB::table('trainings')->insert(["tryNum"=>4,
        "tryTime"=> '00:00:00',
        "errorTime"=> '00:00:00',
        "rewardTime"=> '00:00:00',
        "test_id"=> 1]);
    }
}
