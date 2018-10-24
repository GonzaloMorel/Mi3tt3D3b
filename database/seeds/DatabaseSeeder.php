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
        // $this->call(UsersTableSeeder::class);

        $this->truncateTables([
            'users',
            'sliders',
        ]);

        $this->call(UsersSeeder::class);
        $this->call(SliderSeeder::class);
    }


    private function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
