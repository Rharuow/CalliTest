<?php

use Illuminate\Database\Seeder;

class ResultBaterySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('result_bateries')->insert(["biggestErrorTime"=>1,
        "totalError"=> 3,
        "totalTime"=> '00:00:00',
        "touchscreenNum"=>  2,
        "batery_id"=> 4]);
        DB::table('result_bateries')->insert(["biggestErrorTime"=>2,
        "totalError"=>	4,
        "totalTime"=>	'00:00:00',
        "touchscreenNum"=>  2,
        "batery_id"=> 3]);
        DB::table('result_bateries')->insert(["biggestErrorTime"=>3,
        "totalError"=>	4,
        "totalTime"=>	'00:00:00',
        "touchscreenNum"=>  2,
        "batery_id"=> 2]);
        DB::table('result_bateries')->insert(["biggestErrorTime"=>4,
        "totalError"=> 3,
        "totalTime"=> '00:00:00',
        "touchscreenNum"=> 2,
        "batery_id"=> 1]);
    }
}
