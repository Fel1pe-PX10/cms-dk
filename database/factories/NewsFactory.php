<?php

namespace Database\Factories;

use App\Models\Target;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $imageName = $this->faker->word().".png";
        $pdfName = $this->faker->word().".pdf";
        $videoName = $this->faker->word().".mp4";

        return [
            'target_id'     => Target::factory(),
            'headline'      => $this->faker->sentence,
            'description'   => $this->faker->sentence(10),
            'image'         => $imageName,
            'document'      => $pdfName,
            'video'         => $videoName,
            'created_by'     => $this->faker->name()
        ];
    }
}
