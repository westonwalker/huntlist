@props(['place'])

<div class="flex flex-wrap">
  <x-place-default-row type="link" :text="$place->location_name" :link="$place->google_maps_url">
    <span class="mr-2">🌎</span>Location
  </x-place-default-row>
  <x-place-default-row :text="$place->current_weather">
    <span class="mr-2">🌥️</span>Current Weather
  </x-place-default-row>
  <x-place-default-row type="link" :text="$place->closest_town" :link="$place->closest_town_map">
    <span class="mr-2">🏘️</span>Closest Town
  </x-place-default-row>
  <x-place-default-row type="link" :text="$place->nearest_hospital" :link="$place->nearest_hospital_map">
    <span class="mr-2">🏥</span>Nearest Hospital
  </x-place-default-row>
  <x-place-default-row type="link" :text="$place->closest_lodging" :link="$place->closest_lodging_map">
    <span class="mr-2">🏠</span>Lodging
  </x-place-default-row>
  <x-place-default-row type="link" :text="$place->closest_camping" :link="$place->closest_camping_map">
    <span class="mr-2">⛺</span>Camping
  </x-place-default-row>
  <x-place-default-row type="link" :text="$place->closest_food" :link="$place->closest_food_map">
    <span class="mr-2">🍲</span>Food
  </x-place-default-row>
  <x-place-default-row type="link" :text="$place->closest_bar" :link="$place->closest_bar_map">
    <span class="mr-2">🍺</span>Bar
  </x-place-default-row>
</div>
