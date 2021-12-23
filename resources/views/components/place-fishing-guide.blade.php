@props(['place'])
@if ($place->fishing_score > 0)
<h2 class="text-2xl font-bold mb-2 text-yellow-400">General Information</h2>
<div class="mb-2">
  {!! $place->fishing_description !!}
</div>
<div class="flex flex-wrap">
  <x-place-default-row type="link" text="Link" :link="$place->fishing_info">
    <span class="mr-2 emoji">ℹ️</span>{{ $place->name }} Information
  </x-place-default-row>
  <x-place-default-row type="link" text="Link" :link="$place->state->fishing_license_info">
    <span class="mr-2 emoji">ℹ️</span>Fishing License
  </x-place-default-row>
  <x-place-default-row type="text" :text="$place->fishing_acres">
    <span class="mr-2 emoji">🌎</span>Acres
  </x-place-default-row>
  <x-place-default-row type="link" text="Link" :link="$place->catch_limits">
    <span class="mr-2 emoji">⚖️</span>Catch Limits
  </x-place-default-row>
  <x-place-default-row type="text" :text="$place->average_water_depth">
    <span class="mr-2 emoji">🌊</span>Avg Water Depth
  </x-place-default-row>
  <x-place-default-row type="text" :text="$place->fish_list">
    <span class="mr-2 emoji">🐟</span>Fish List
  </x-place-default-row>
  <x-place-default-row type="text" :text="$place->boat_fishing">
    <span class="mr-2 emoji">🛥️</span>Boat Fishing
  </x-place-default-row>
  <x-place-default-row type="text" :text="$place->has_boat_ramps ? 'Yes' : 'No'">
    <span class="mr-2 emoji">📏</span>Boats Ramps?
  </x-place-default-row>
</div>
@else
<p>No fishing for this location.</p>
@endif
