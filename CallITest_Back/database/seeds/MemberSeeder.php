<?php

use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert(["name"=>"Fulano", "psw"=>"12345687", "CPF"=>" jdaso","RG"=>" asndyasi", "sex"=>"M", "registration"=>"sadsadsad1sa35","course"=>"asiodhoasdsa","administrators_id"=>5]);
        DB::table('members')->insert(["name"=>"Sicrano", "psw"=>"12345687", "CPF"=>" ajdnasid","RG"=>"hdia sas uas", "sex"=>"M", "registration"=>" daskhask","course"=>"asiodhoasdsa","administrators_id"=>4]);
        DB::table('members')->insert(["name"=>"Beltrano", "psw"=>"12345687", "CPF"=>" adsuhasuy","RG"=>" hudashib  a", "sex"=>"M", "registration"=>" adsij,masd","course"=>"asiodhoasdsa","administrators_id"=>3]);
        DB::table('members')->insert(["name"=>"Fucrano", "psw"=>"12345687", "CPF"=>" dashbyud","RG"=>" nbjajs  aa", "sex"=>"M", "registration"=>" dasjdasud","course"=>"asiodhoasdsa","administrators_id"=>2]);
        DB::table('members')->insert(["name"=>"Belfutrano", "psw"=>"12345687", "CPF"=>" asdaspoid","RG"=>" jdaso d sa", "sex"=>"M", "registration"=>" dhasaidsa dsa","course"=>"asiodhoasdsa","administrators_id"=>1]);
    }
}
