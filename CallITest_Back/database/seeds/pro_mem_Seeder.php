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
        DB::table('pro_mem')->insert(["project_id"=>1,"member_id"=>2]);
        DB::table('pro_mem')->insert(["project_id"=>2,"member_id"=>1]);
        DB::table('pro_mem')->insert(["project_id"=>3,"member_id"=>3]);
        DB::table('pro_mem')->insert(["project_id"=>4,"member_id"=>2]);
        DB::table('pro_mem')->insert(["project_id"=>2,"member_id"=>4]);
        DB::table('pro_mem')->insert(["project_id"=>3,"member_id"=>1]);
        DB::table('pro_mem')->insert(["project_id"=>4,"member_id"=>1]);
    }
}
