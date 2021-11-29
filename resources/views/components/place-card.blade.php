@props(['place'])

<a href="{{ route('places.show', $place) }}" class="">
  <div class="absolute left-0 top-0 z-10 w-full p-4">
    <div class="float-left text-white font-bold text-base md:text-lg">
      <span class="" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">
        {{ $place->id }}
      </span>
    </div>
    {{-- <div class="float-right text-white font-bold text-base md:text-lg">
      <span class="" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">
        $800
      </span>
    </div> --}}
  </div>
  <div class="absolute left-0 top-1/2 z-10 text-center w-full" style="transform: translateY(-50%)">
    <h1 class="text-white font-extrabold text-xl md:text-2xl" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">
      {{ $place->name }}
    </h1>
    <h2 class="text-white font-bold text-sm md:text-base" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">
      {{ $place->display_name }}
    </h2>
  </div>
  <div class="absolute left-0 bottom-0 z-10 text-center w-full pb-4">
    <!-- <h2 class="text-white font-bold text-base" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">Peoria, IL</h1> -->
    <div class="inline-block text-white font-bold text-xl md:text-2xl">
      <!-- <span class="" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">⭐</span>
        <span class="" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">💰</span> -->
      @if($place->whitetail_score > 0)
      <span class="emoji mr-1" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%),1px 1px 5px rgb(0 0 0 / 50%);">
        🦌
      </span>
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
      @if($place->ice_fishing_score > 0)
      <span class="emoji mr-1" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">
        🥶
      </span>
      @endif
    </div>
  </div>
  <div class="block w-full h-64 aspect-w-10 aspect-h-10 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-green-500 overflow-hidden">
    <img src="{{ $place->cover_image }}" alt="" class="object-cover w-full h-64 pointer-events-none group-hover:opacity-75" />
  </div>
</a>
