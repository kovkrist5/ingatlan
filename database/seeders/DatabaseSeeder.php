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
              "kepUrl"=> "https://www.shutterstock.com/image-illustration/fire-number-1-260nw-82486915.jpg"
            ],
            [
              "id"=> 2,
              "category"=> 1,
              "leiras"=> "Belvárosi környezetben, árnyékos helyen kis méretú családi ház eladó. Tömegközlekedéssel könnyen megközelíthető.",
              "hirdetesDatuma"=> "2022-02-28",
              "tehermentes"=> true,
              "ar"=> 28990000,
              "kepUrl"=> "https://www.shutterstock.com/image-illustration/number-two-text-on-fire-600w-460188424.jpg"
            ],
            [
              "id"=> 3,
              "category"=> 2,
              "leiras"=> "Kétszintes berendezett lakás a belvárosban kiadó.",
              "hirdetesDatuma"=> "2022-02-24",
              "tehermentes"=> true,
              "ar"=> 32000000,
              "kepUrl"=> "https://as2.ftcdn.net/v2/jpg/10/37/86/69/1000_F_1037866944_d54jGTH5ER7gBb8vTBXeJQgebz0G9baF.jpg"
            ],
            [
              "id"=> 4,
              "category"=> 4,
              "leiras"=> "Nagy garázs kertvárosi környezetben kiadó",
              "hirdetesDatuma"=> "2022-02-26",
              "tehermentes"=> true,
              "ar"=> 5990000,
              "kepUrl"=> "https://www.shutterstock.com/image-illustration/number-four-text-on-fire-260nw-460188412.jpg"
            ],
            [
              "id"=> 5,
              "category"=> 5,
              "leiras"=> "10 hektáros mezőhazdasági terület eladó.",
              "hirdetesDatuma"=> "2022-03-18",
              "tehermentes"=> true,
              "ar"=> 79000000,
              "kepUrl"=> "https://media.istockphoto.com/id/532186777/photo/fire-number-on-black-background.jpg?s=612x612&w=0&k=20&c=Fe6majAx1IfPYhxzENnmOvia8GtqTFNJRf-FX_VGkEs="
            ],   
            [
              "id"=> 6,
              "category"=> 6,
              "leiras"=> "Felújításra szoruló üzemcsarnok zöld környezetben áron alul eladó",
              "hirdetesDatuma"=> "2022-02-23",
              "tehermentes"=> false,
              "ar"=> 25000000,
              "kepUrl"=> "https://www.shutterstock.com/shutterstock/photos/1331505035/display_1500/stock-photo-realistic-fire-countdown-with-smoke-and-cloud-the-fire-counts-from-ten-to-zero-abstract-epic-1331505035.jpg"
            ]    
            ];
            foreach($ingatlans as $s){
                Ingatlan::create($s);
                }

    }
}
