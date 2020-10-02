<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

class productFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // $table->string('product_name');
            'product_name' => $this->faker->name,
            'product_price' => $this->faker->creditCardNumber,
            'product_description' => $this->faker->product_description,
            
        ];
    }
}
