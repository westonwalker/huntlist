<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Place;

class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $coverImages = [
            'https://images.unsplash.com/photo-1444628838545-ac4016a5418a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80',
            'https://images.unsplash.com/photo-1434725039720-aaad6dd32dfe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80',
            'https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80',
            'https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80',
            'https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80',
            'https://images.unsplash.com/photo-1490604001847-b712b0c2f967?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80',
            'https://images.unsplash.com/photo-1485201543483-f06c8d2a8fb4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80',
            'https://images.unsplash.com/photo-1523978591478-c753949ff840?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80',
            'https://images.unsplash.com/37/IHLjdHdzSvi0rgUMMlSK_TE3_0286.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80',
            'https://images.unsplash.com/reserve/unsplash_524010c76b52a_1.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80',
            'https://images.unsplash.com/photo-1527489377706-5bf97e608852?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80',
            'https://images.unsplash.com/photo-1523712999610-f77fbcfc3843?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80',
            'https://images.unsplash.com/photo-1518627675569-e9d4fb90cdb5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80',
        ];
        $currentWeather = [
            '☀️ Hi 100 / Low 90',
            '🌥️ Hi 80 / Low 60',
            '❄️ Hi 20 / Low 5',
            '🥶 Hi 5 / Low -10',
        ];
        $schema = [
            'name' => $this->faker->streetName,
            'display_name' => $this->faker->city() . ', ' . $this->faker->country(),
            'whitetail_score' => $this->faker->numberBetween(0, 10),
            'fishing_score' => $this->faker->numberBetween(0, 10),
            'elk_score' => $this->faker->numberBetween(0, 10),
            'turkey_score' => $this->faker->numberBetween(0, 10),
            'mule_deer_score' => $this->faker->numberBetween(0, 10),
            'cover_image' => $this->faker->randomElement($coverImages),
            'current_weather' => $this->faker->randomElement($currentWeather),
            'weather_score' => $this->faker->numberBetween(0, 10),
            'cell_coverage_score' => $this->faker->numberBetween(0, 10),
            'dangerous_animal_score' => $this->faker->numberBetween(0, 10),
            'google_maps_url' => 'https://goo.gl/maps/g3JETuVNAVm3LpZQ9',
            'nearest_hospital_distance' => $this->faker->numberBetween(7, 100),
            'nearest_hospital' => 'UnityPoint Proctor',
            'nearest_hospital_map' => 'https://goo.gl/maps/nLPyPbAanj8AUpok8',
            'closest_town' => 'Glasford, IL',
            'closest_town_map' => 'https://goo.gl/maps/NiBiyBPSfkb4Zqos5',
            'closest_lodging' => 'Peoria Marriott Pere Marquette',
            'closest_lodging_map' => 'https://goo.gl/maps/c9fsGtmL1FJxLNS7A',
            'closest_camping' => 'Rivers Edge Campground',
            'closest_camping_map' => 'https://goo.gl/maps/vZQnTWePrAZjNnNn9',
            'closest_food' => 'Gils Supper Club',
            'closest_food_map' => 'https://goo.gl/maps/fs1Nnb5QQn6SCpXR6',
            'closest_bar' => 'The Warehouse',
            'closest_bar_map' => 'https://goo.gl/maps/1aLbSaKYMmYZ8wEh7',
        ];
        $schema['slug'] = Str::slug($schema['name']);
        return $schema;
    }
}