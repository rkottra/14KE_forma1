<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eredmeny>
 */
class EredmenyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'versenyId'    => rand(DB::table('versenyek')->min('id'), DB::table('versenyek')->max('id')),
            'pilotaId'     => rand(DB::table('pilotak')->min('id'), DB::table('pilotak')->max('id')),
            'futott'       => 12
        ];
    }
}
