<?php

use Illuminate\Database\Seeder;

class pro_mem_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pro_mems')->insert(["project_ID"=>1,"member_ID"=>2]);
        DB::table('pro_mems')->insert(["project_ID"=>2,"member_ID"=>1]);
        DB::table('pro_mems')->insert(["project_ID"=>3,"member_ID"=>3]);
        DB::table('pro_mems')->insert(["project_ID"=>4,"member_ID"=>2]);
        DB::table('pro_mems')->insert(["project_ID"=>2,"member_ID"=>4]);
        DB::table('pro_mems')->insert(["project_ID"=>3,"member_ID"=>1]);
        DB::table('pro_mems')->insert(["project_ID"=>4,"member_ID"=>1]);
    }
}
