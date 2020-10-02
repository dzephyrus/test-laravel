<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\fakeStudent;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        fakeStudent::factory(10)->create();
        // \App\Models\User::factory(10)->create();
        // Model::unguard();
        // $this->call(fakeStudent::class);
        // Model::reguard();
    }
}
