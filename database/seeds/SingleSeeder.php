<?php

use Illuminate\Database\Seeder;

class SingleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Single::class,150)->create();
    }
}
