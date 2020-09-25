<?php

namespace Database\Factories;

use App\Models\RemoteUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class RemoteUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RemoteUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'remote' => 'THis is remote user',
        ];
    }
}
