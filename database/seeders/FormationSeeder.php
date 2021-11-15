<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            'nom' => Str::random(10),
            "description" => Str::random(100),
            "categorie" => Str::random(20),
            "prix" => mt_rand(0,100),
            "chapitres"=>Str::random(10),
        ]);
    }
}
