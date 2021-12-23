@props(['place'])
@if (($place->whitetail_score+$place->elk_score+$place->mule_deer_score) > 0)
<h2 class="text-2xl font-bold mb-2 text-yellow-400">General Information</h2>
<div class="mb-2">
  {!! $place->hunting_description !!}
</div>
<div class="flex flex-wrap">
  <x-place-default-row type="link" text="Link" :link="$place->hunting_info">
    <span class="mr-2">ℹ️</span>{{ $place->name }} Information
  </x-place-default-row>
  <x-place-default-row type="link" text="Link" :link="$place->state->hunting_license_info">
    <span class="mr-2">ℹ️</span>Hunting License
  </x-place-default-row>
  <x-place-default-row type="text" :text="$place->hunting_acres">
    <span class="mr-2">🌎</span>Acres
  </x-place-default-row>
  <x-place-default-row type="text" :text="$place->animal_list">
    <span class="mr-2">🏹</span>Animal List
  </x-place-default-row>
  @if ($place->whitetail_score > 0)
  <x-place-default-row type="link" text="Link" :link="$place->state->whitetail_seasons">
    <span class="mr-2">📅</span>Whitetail Seasons
  </x-place-default-row>
  <x-place-default-row type="link" text="Link" :link="$place->state->whitetail_permits">
    <span class="mr-2">🦌</span>Whitetail Permits
  </x-place-default-row>
  @endif
  @if ($place->mule_deer_score > 0)
  <x-place-default-row type="link" text="Link" :link="$place->state->mule_deer_seasons">
    <span class="mr-2">📅</span>Mule Deer Seasons
  </x-place-default-row>
  <x-place-default-row type="link" text="Link" :link="$place->state->mule_deer_permits">
    <span class="mr-2">🦌</span>Mule Deer Permits
  </x-place-default-row>
  @endif
  @if ($place->elk_score > 0)
  <x-place-default-row type="link" text="Link" :link="$place->state->elk_seasons">
    <span class="mr-2">📅</span>Elk Seasons
  </x-place-default-row>
  <x-place-default-row type="link" text="Link" :link="$place->state->elk_permits">
    <span class="mr-2">🦌</span>Elk Permits
  </x-place-default-row>
  @endif
  @if ($place->turkey_score > 0)
  <x-place-default-row type="link" text="Link" :link="$place->state->turkey_seasons">
    <span class="mr-2">📅</span>Turkey Seasons
  </x-place-default-row>
  <x-place-default-row type="link" text="Link" :link="$place->state->turkey_permits">
    <span class="mr-2">🦃</span>Turkey Permits
  </x-place-default-row>
  @endif
</div>
@else
<p>No hunting for this location.</p>
@endif
