<?php

use Illuminate\Database\Seeder;

class ResultTryBaterySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('result_try_bateries')->insert(["firstErroTime"=>'00:00:00',
        "totalTime"=> '00:00:00',
        "touchscreenNum"=> 2,
        "try_bateries_id"=> 4]);
        DB::table('result_try_bateries')->insert(["firstErroTime"=>'00:00:00',
        "totalTime"=>	'00:00:00',
        "touchscreenNum"=>	1,
        "try_bateries_id"=> 3]);
        DB::table('result_try_bateries')->insert(["firstErroTime"=>'00:00:00',
        "totalTime"=>	'00:00:00',
        "touchscreenNum"=>	3,
        "try_bateries_id"=> 2]);
        DB::table('result_try_bateries')->insert(["firstErroTime"=>'00:00:00',
        "totalTime"=> '00:00:00',
        "touchscreenNum"=> 2,
        "try_bateries_id"=> 1]);
    }
}
