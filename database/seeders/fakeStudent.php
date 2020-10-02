<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fakeStudent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$faker = fakeStudent::create();
        if(DB::table('fakeStudent')->count() === 0){
            DB::table('fakeStudent')->insert([
                [
                    'fakeStudent_name' => 'nguyen van a',
                    'fakeStudent_class' => 'tkw'
                ]
            ]);
        }
        else{
            echo ' bang fakeStudent da co du lieu'. PHP_EOL;
        }
    }
}
