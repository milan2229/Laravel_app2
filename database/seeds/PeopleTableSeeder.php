<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'name' => 'yamada',
            'mail' => 'yamada@example.net',
            'age' => 12,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
