<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SettingFactory extends Factory
{
    protected $model = Setting::class;

    public function definition()
    {
        return [
            'name'  => $this->faker->userName(),
            'value' => $this->faker->text(5),
        ];
    }
}
