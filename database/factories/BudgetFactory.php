<?php

namespace Database\Factories;

use App\Models\budget;
use Illuminate\Database\Eloquent\Factories\Factory;

class BudgetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = budget::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->word(),
            "amount" => $this->faker->numberBetween(-66000,66666),
            "category" => $this->faker->randomElement(['Housing','Transportation','Food','Utilities','Education','Gifts/Donations','Entertainment','Clothing','Savings','Insurance','Medical/Healthcare','Household Items/Supplies','Debt','Retirement'])
        ];
    }


}






