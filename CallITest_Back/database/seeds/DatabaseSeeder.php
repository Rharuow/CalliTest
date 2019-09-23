<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdministratorSeeder::class);
        $this->call(ProjetosSeeder::class);
        $this->call(AnimalSeeder::class);
        $this->call(Ani_pro_Seeder::class);
        $this->call(MemberSeeder::class);
        $this->call(pro_mem_Seeder::class);
        $this->call(TestSeeder::class);
        $this->call(BateriersSeeder::class);
        $this->call(ResultBaterySeeder::class);
        $this->call(TryBaterySeeder::class);
        $this->call(ResultTryBaterySeeder::class);
        $this->call(TrainingSeeder::class);
        $this->call(ResultTrainingSeeder::class);
        $this->call(TryTrainingSeeder::class);
        $this->call(ResultTryTrainingSeeder::class);
    }
}
