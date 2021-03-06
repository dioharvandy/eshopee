<?php

namespace Database\Factories;

use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaksi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tanggal' => Carbon::create($this->faker->dateTimeThisYear()->format('Y-m-d')),
            'no_resi' => $this->faker->randomNumber()
        ];
    }
}
