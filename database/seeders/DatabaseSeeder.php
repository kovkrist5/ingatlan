<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Ingatlan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $categories=["Ház", "lakéás" , "építési telek", "garázs","mezőgazdasági terület", "ipari ingatlan"];
        foreach($categories as $c){
        Category::create(['name'=> $c]);
        }
        $ingatlans= [
            [
              "id"=> 1,
              "category"=> 1,
              "leiras"=> "Kertvárosi részén, egyszintes házat kínálunk nyugodt környezetben, nagy telken.",
              "hirdetesDatuma"=> "2022-02-21",
              "tehermentes"=> true,
              "ar"=> 26990000,
              "kepUrl"=> "http://localhost:3000/adv01.jpg"
            ],
            [
              "id"=> 2,
              "category"=> 1,
              "leiras"=> "Belvárosi környezetben, árnyékos helyen kis méretú családi ház eladó. Tömegközlekedéssel könnyen megközelíthető.",
              "hirdetesDatuma"=> "2022-02-28",
              "tehermentes"=> true,
              "ar"=> 28990000,
              "kepUrl"=> "http://localhost:3000/adv02.jpg"
            ],
            [
              "id"=> 3,
              "category"=> 2,
              "leiras"=> "Kétszintes berendezett lakás a belvárosban kiadó.",
              "hirdetesDatuma"=> "2022-02-24",
              "tehermentes"=> true,
              "ar"=> 32000000,
              "kepUrl"=> "http://localhost:3000/adv03.jpg"
            ],
            [
              "id"=> 4,
              "category"=> 4,
              "leiras"=> "Nagy garázs kertvárosi környezetben kiadó",
              "hirdetesDatuma"=> "2022-02-26",
              "tehermentes"=> true,
              "ar"=> 5990000,
              "kepUrl"=> "http://localhost:3000/adv04.jpg"
            ],
            [
              "id"=> 5,
              "category"=> 5,
              "leiras"=> "10 hektáros mezőhazdasági terület eladó.",
              "hirdetesDatuma"=> "2022-03-18",
              "tehermentes"=> true,
              "ar"=> 79000000,
              "kepUrl"=> "http://localhost:3000/adv05.jpg"
            ],   
            [
              "id"=> 6,
              "category"=> 6,
              "leiras"=> "Felújításra szoruló üzemcsarnok zöld környezetben áron alul eladó",
              "hirdetesDatuma"=> "2022-02-23",
              "tehermentes"=> false,
              "ar"=> 25000000,
              "kepUrl"=> "http://localhost:3000/adv06.jpg"
            ]    
            ];
            foreach($ingatlans as $s){
                Ingatlan::create($s);
                }

    }
}
