<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\sample1;

class sample1Tableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       sample1::create([
        'id' =>3,
        'name' =>'anshad',
        'email' => 'anshad@gmail.com',
        'password' =>'9101'


       ]);
    }
}
