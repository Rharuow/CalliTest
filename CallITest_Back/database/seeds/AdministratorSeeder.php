<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrators')->insert(["name"=>"Harysson", "psw" => "12345678", "sex"=>"M","temporaryToken"=>"87654321"]);
        DB::table('administrators')->insert(["name"=>"Clara", "psw" => "12345678", "sex"=>"F","temporaryToken"=>"87654321"]);
        DB::table('administrators')->insert(["name"=>"Zé", "psw" => "12345678", "sex"=>"M","temporaryToken"=>"87654321"]);
        DB::table('administrators')->insert(["name"=>"Rafael", "psw" => "12345678", "sex"=>"M","temporaryToken"=>"87654321"]);
        DB::table('administrators')->insert(["name"=>"João", "psw" => "12345678", "sex"=>"M","temporaryToken"=>"87654321"]);
    }
}
