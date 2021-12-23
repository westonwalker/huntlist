<x-place-layout>
    <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'scores' }">
        <div class="relative group">
            <div class="absolute left-0 top-1/2 z-10 text-center w-full" style="transform: translateY(-50%)">
                <h1 class="text-white font-extrabold text-3xl md:text-4xl" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">
                    {{ $place->name }}
                </h1>
                <h2 class="text-white font-bold text-base md:text-lg" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">
                    {{ $place->location_name }}
                </h2>
            </div>
            <div class="absolute left-0 top-0 pt-4 pl-4">
                <x-home-link></x-home-link>
            </div>
            <img class="h-48 w-full object-cover lg:h-64" src="{{ asset('places/' . $place->slug .'.png') }}" alt="">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-800">
            <div class="mt-4">
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Select a tab</label>
                    <select x-model="tab" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-green-400 focus:border-green-400 sm:text-sm rounded-md">
                        <option value="scores">Scores</option>
                        <option value="local">Local Info</option>
                        <option value="hunting">Hunting Guide</option>
                        <option value="fishing">Fishing Guide</option>
                        <option value="map">Map</option>
                        <option value="reviews">Reviews</option>
                        <option value="weather">Weather</option>
                    </select>
                </div>
                <div class="hidden sm:block">
                    <div class="">
                        <nav class="-mb-px flex flex-wrap text-lg" aria-label="Tabs">
                            <a :class="tab === 'scores' ? 'border-yellow-500 text-yellow-500' : 'text-white'" @click.prevent="tab = 'scores'; window.location.hash = 'scores'" href="#"
                                class="mr-4 cursor-pointer hover:text-yellow-500 hover:border-yellow-500 whitespace-nowrap py-4 px-1 border-b-4 font-medium">Scores</a>
                            <a :class="tab === 'local' ? 'border-yellow-500 text-yellow-500' : 'text-white'" @click.prevent="tab = 'local'; window.location.hash = 'local'" href="#"
                                class="mr-4 cursor-pointer hover:text-yellow-500 hover:border-yellow-500 whitespace-nowrap py-4 px-1 border-b-4 font-medium">Local Info</a>
                            <a :class="tab === 'hunting' ? 'border-yellow-500 text-yellow-500' : 'text-white'" @click.prevent="tab = 'hunting'; window.location.hash = 'hunting'" href="#"
                                class="mr-4 cursor-pointer hover:text-yellow-500 hover:border-yellow-500 whitespace-nowrap py-4 px-1 border-b-4 font-medium">Hunting Guide</a>
                            <a :class="tab === 'fishing' ? 'border-yellow-500 text-yellow-500' : 'text-white'" @click.prevent="tab = 'fishing'; window.location.hash = 'fishing'" href="#"
                                class="mr-4 cursor-pointer hover:text-yellow-500 hover:border-yellow-500 whitespace-nowrap py-4 px-1 border-b-4 font-medium">Fishing Guide</a>
                            <a :class="tab === 'map' ? 'border-yellow-500 text-yellow-500' : 'text-white'" @click.prevent="tab = 'map'; window.location.hash = 'map'" href="#"
                                class="mr-4 cursor-pointer hover:text-yellow-500 hover:border-yellow-500 whitespace-nowrap py-4 px-1 border-b-4 font-medium">Map</a>
                            <a :class="tab === 'reviews' ? 'border-yellow-500 text-yellow-500' : 'text-white'" @click.prevent="tab = 'reviews'; window.location.hash = 'reviews'" href="#"
                                class="mr-4 cursor-pointer hover:text-yellow-500 hover:border-yellow-500 whitespace-nowrap py-4 px-1 border-b-4 font-medium">Reviews</a>
                            <a :class="tab === 'weather' ? 'border-yellow-500 text-yellow-500' : 'text-white'" @click.prevent="tab = 'weather'; window.location.hash = 'weather'" href="#"
                                class="mr-4 cursor-pointer hover:text-yellow-500 hover:border-yellow-500 whitespace-nowrap py-4 px-1 border-b-4 font-medium">Weather</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div x-cloak class="text-white mt-4">
                <div x-show="tab === 'scores'" class="">
                    <x-place-scores :place="$place" />
                </div>
                <div x-show="tab === 'hunting'" class="">
                    <x-place-hunting-guide :place="$place" />
                </div>
                <div x-show="tab === 'fishing'" class="">
                    <x-place-fishing-guide :place="$place" />
                </div>
                <div x-show="tab === 'local'" class="">
                    <x-place-local :place="$place" />
                </div>
                <div x-show="tab === 'map'" class="">
                    <p class="mt-6 text-2xl">Interactive maps coming soon!</p>
                </div>
                <div x-show="tab === 'reviews'" class="">
                    <p class="mt-6 text-2xl">Reviews coming soon!</p>
                </div>
                <div x-show="tab === 'weather'" class="">
                    <p class="mt-6 text-2xl">Historical monthly weather patterns coming soon!</p>
                </div>
            </div>

        </div>
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <!-- content -->
        </div>
    </div>
</x-place-layout>
