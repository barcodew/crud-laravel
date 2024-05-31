<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use faker\Factory as faker;
use Illuminate\Support\Arr;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = faker::create();
        return [
            'name'=>$faker->name,
            'nim' => mt_rand(0000000,99999999),
            'gender' => Arr::random(['L','P']),
            'kelas' => Arr::random(['1A','2A','3A'])
        ];
    }
}
