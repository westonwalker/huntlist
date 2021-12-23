@props(['place'])

<div class="flex flex-wrap">
  <x-place-scores-row :score="$place->overall_score" type="overall">
    <span class="mr-2 emoji">⭐</span>Overall
  </x-place-scores-row>
  <x-place-scores-row :score="$place->whitetail_score">
    <span class="mr-2 emoji">🦌</span>Whitetail
  </x-place-scores-row>
  <x-place-scores-row :score="$place->fishing_score">
    <span class="mr-2 emoji">🐟</span>Fishing
  </x-place-scores-row>
  <x-place-scores-row :score="$place->elk_score">
    <span class="mr-2 emoji">🦌</span>Elk
  </x-place-scores-row>
  <x-place-scores-row :score="$place->turkey_score">
    <span class="mr-2 emoji">🦃</span>Turkey
  </x-place-scores-row>
  <x-place-scores-row :score="$place->mule_deer_score">
    <span class="mr-2 emoji">🦌</span>Mule Deer
  </x-place-scores-row>
  <x-place-scores-row :score="$place->weather_score">
    <span class="mr-2 emoji">⛅️</span>Weather
  </x-place-scores-row>
  {{-- <x-place-scores-row :score="$place->nearest_hospital_distance" type="hospital">
    <span class="mr-2 emoji">🏥</span>Nearest Hospital
  </x-place-scores-row> --}}
  <x-place-scores-row :score="$place->cell_coverage_score" type="cell_coverage">
    <span class="mr-2 emoji">📱</span>Cell Coverage
  </x-place-scores-row>
  <x-place-scores-row :score="$place->dangerous_animal_score" type="dangerous_animal">
    <span class="mr-2 emoji">🐻</span>Dangerous Animals
  </x-place-scores-row>
</div>
