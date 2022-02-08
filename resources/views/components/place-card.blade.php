@props(['place', 'rank' => 1])

<a href="{{ route('places.show', $place) }}" class="">
  <div class="absolute left-0 top-0 z-10 w-full p-4">
    <div class="float-left text-white font-bold text-base md:text-lg">
      <span class="" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">
        {{ $rank }}
      </span>
    </div>
  </div>
  <div class="absolute left-0 top-1/2 z-10 text-center w-full" style="transform: translateY(-50%)">
    <h1 class="text-white font-extrabold text-xl md:text-2xl" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">
      {{ $place->name }}
    </h1>
    <h2 class="text-white font-bold text-sm md:text-base" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">
      {{ $place->location_name }}
    </h2>
  </div>
  <div class="absolute left-0 bottom-0 z-50 w-full h-64 aspect-w-10 aspect-h-10 rounded-lg bg-gray-900 opacity-0 hover:opacity-100 overflow-hidden transition-opacity border border-yellow-400">
    <!-- overlay -->
    <div class="flex flex-col p-4 h-full justify-center opacity-100">
      @if ($place->whitetail_score > 0)
      <x-place-card-score :score="$place->whitetail_score" label="Whitetail Deer" />
      @endif
      @if ($place->mule_deer_score > 0)
      <x-place-card-score :score="$place->mule_deer_score" label="Mule Deer" />
      @endif
      @if ($place->elk_score > 0)
      <x-place-card-score :score="$place->elk" label="Elk" />
      @endif
      @if ($place->fishing_score > 0)
      <x-place-card-score :score="$place->fishing_score" label="Fishing" />
      @endif
      @if ($place->turkey_score > 0)
      <x-place-card-score :score="$place->turkey_score" label="Turkey" />
      @endif
      <div class="flex justify-end">
        <p class="hover:underline text-yellow-500">See Details ➡️</p>
      </div>
    </div>
  </div>
  <div class="absolute left-0 bottom-0 z-10 text-center w-full pb-4">
    <div class="inline-block text-white font-bold text-3xl md:text-3xl items-center">
      @if($place->whitetail_score > 0 || $place->mule_deer_score > 0)
      <span class="emoji mr-1" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%),1px 1px 5px rgb(0 0 0 / 50%);">
        🦌
      </span>
      @endif
      @if($place->elk_score > 0)
      <img src="{{ asset('elk-icon.png') }}" class="inline-block h-10 w-auto emoji mr-1 pb-1" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%),1px 1px 5px rgb(0 0 0 / 50%);" />
      @endif
      @if($place->turkey_score > 0)
      <span class="emoji mr-1" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%),1px 1px 5px rgb(0 0 0 / 50%);">
        🦃
      </span>
      @endif
      @if($place->fishing_score > 0)
      <span class="emoji mr-1" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%),1px 1px 5px rgb(0 0 0 / 50%);">
        🐟
      </span>
      @endif
    </div>
  </div>
  <div class="block w-full h-64 aspect-w-10 aspect-h-10 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-green-500 overflow-hidden">
    <img src="{{ $place->cover_image }}" alt="" class="object-cover w-full h-64 pointer-events-none" />
    {{-- <img src="{{ asset('places/' . $place->slug .'.png') }}" alt="" class="object-cover w-full h-64 pointer-events-none" /> --}}
  </div>
</a>
