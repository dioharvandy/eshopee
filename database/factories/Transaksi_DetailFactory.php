<?php

namespace Database\Factories;

use App\Models\Transaksi_detail;
use Illuminate\Database\Eloquent\Factories\Factory;

class Transaksi_DetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaksi_detail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jumlah' => $this->faker->numberBetween(1, 1000),
            'harga_beli'=> $this->faker->numberBetween(1000, 1000000),
            'discount'=> 0
        ];
    }
}
