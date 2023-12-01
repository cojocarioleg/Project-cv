<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address' => 'Cahul, str. Stefan cel Mare, nr. 1',
            'grafic' => 'mon-fri: 9:00 - 18:00',
            'phone' => '+(737)12345678',
        ];
    }
}
