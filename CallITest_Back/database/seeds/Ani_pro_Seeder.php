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
        DB::table('ani_pros')->insert(["animal_ID"=>1,"project_ID"=>2]);
        DB::table('ani_pros')->insert(["animal_ID"=>2,"project_ID"=>1]);
        DB::table('ani_pros')->insert(["animal_ID"=>3,"project_ID"=>3]);
        DB::table('ani_pros')->insert(["animal_ID"=>4,"project_ID"=>2]);
        DB::table('ani_pros')->insert(["animal_ID"=>2,"project_ID"=>4]);
        DB::table('ani_pros')->insert(["animal_ID"=>3,"project_ID"=>1]);
        DB::table('ani_pros')->insert(["animal_ID"=>4,"project_ID"=>1]);
    }
}
