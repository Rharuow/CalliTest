<?php

use Illuminate\Database\Seeder;

class BateriersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bateries')->insert(["tryNum"=>1,
        "tryTime"=> '00:00:00',
        "errorTime"=> '00:00:00',
        "rewardTime"=>  '00:00:00',
        "showingTime"=> '00:00:00',
        "test_id"=> 4]);
        DB::table('bateries')->insert(["tryNum"=>2,
        "tryTime"=>	'00:00:00',
        "errorTime"=>	'00:00:00',
        "rewardTime"=>  '00:00:00',
        "showingTime"=>	'00:00:00',
        "test_id"=> 3]);
        DB::table('bateries')->insert(["tryNum"=>3,
        "tryTime"=>	'00:00:00',
        "errorTime"=>	'00:00:00',
        "rewardTime"=>  '00:00:00',
        "showingTime"=> '00:00:00',
        "test_id"=> 2]);
        DB::table('bateries')->insert(["tryNum"=>4,
        "tryTime"=> '00:00:00',
        "errorTime"=> '00:00:00',
        "rewardTime"=> '00:00:00',
        "showingTime"=>	'00:00:00',
        "test_id"=> 1]);
    }
}
