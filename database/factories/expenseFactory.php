<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Expense;
use Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\expense>
 */
class expenseFactory extends Factory
{
    
    protected $model = Expense::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $expenseCategory = ['food', 'shopping', 'entertainment', 'travel', 'other'];
        
        return [
            'description'=> $this->faker->sentence(4),
            'amount'=> $this->faker->numberBetween(50, 500),
            'type' => $this->faker->randomElement($expenseCategory),
        ];
    }
}
