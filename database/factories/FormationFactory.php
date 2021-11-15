<?php

namespace Database\Factories;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    protected $model= Formation::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>'',
            'description'=>'',
            'categorie'=>'',
            'prix'=>'',
            'chapitres'=>'',
        ];
    }
}
