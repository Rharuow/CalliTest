<?php

use Illuminate\Database\Seeder;

class Ani_pro_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animal_project')->insert(["animal_id"=>1,"project_id"=>2]);
        DB::table('animal_project')->insert(["animal_id"=>2,"project_id"=>1]);
        DB::table('animal_project')->insert(["animal_id"=>3,"project_id"=>3]);
        DB::table('animal_project')->insert(["animal_id"=>4,"project_id"=>2]);
        DB::table('animal_project')->insert(["animal_id"=>2,"project_id"=>4]);
        DB::table('animal_project')->insert(["animal_id"=>3,"project_id"=>1]);
        DB::table('animal_project')->insert(["animal_id"=>4,"project_ID"=>1]);
    }
}
