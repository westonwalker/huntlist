@props(['places', 'filters'])

<script>
    function showPlace(place, currentFilters) {
        let result = true;
        currentFilters.forEach(function (filter) {
            if (result) {
                if (filter.id == "fishing") {
                    result = place.fishing_score > 0;
                }
                if (filter.id == "whitetail_hunting") {
                    result = place.whitetail_score > 0;
                }
                if (filter.id == "elk") {
                    result = place.elk_score > 0;
                }
                if (filter.id == "mule_deer") {
                    result = place.mule_deer_score > 0;
                }
                if (filter.id == "turkey") {
                    result = place.turkey_score > 0;
                }
            }
        });
        return result;

    }
</script>

<div x-data="{ filters: @js($filters),
    showFilters: false,
    searchValue: '',
    currentFilters: [] }">
    <div class="mt-6 flex flex-col">
        <!-- search and filter -->
        <div class="relative w-full sm:w-1/2 sm:max-w-sm mx-auto">
            <label for="search" class="sr-only">Search or filter</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input x-model="searchValue" @click.away="showFilters = false" @click="showFilters = true" id="filter" name="filter"
                    class="block w-full pl-10 pr-3 py-2 border border-transparent rounded-md leading-5 bg-gray-700 text-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white focus:border-white focus:ring-white focus:text-gray-900 sm:text-sm" placeholder="Search or filter" type="search">
                <div style="z-index: 1000;" x-cloak x-transition x-show="showFilters" class="cursor-pointer origin-top-left z-20 absolute left-0 mt-2 w-80 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical"
                    aria-labelledby="user-menu-button" tabindex="-1">
                    <div class="p-1">
                        <template x-for="filter in filters" :key="filter.id">
                            <div>
                                <template x-if="filter.type == 'place'">
                                    <a x-bind:href="'/places/'+filter.slug" x-show="searchValue.length > 1 && filter.name.toLowerCase().includes(searchValue.toLowerCase())" class="focus-within:bg-yellow-500">
                                        <div class="hover:bg-yellow-500 px-1 py-2 rounded-lg">
                                            <div x-text="'📍&nbsp;&nbsp;&nbsp;'+filter.name">
                                                <span class="float-right ml-1 mr-2">➡️</span>
                                            </div>
                                        </div>
                                    </a>
                                </template>
                                <template x-if="filter.type == 'filter'">
                                    <div @click="currentFilters.push(filter)" x-text="filter.emoji+'&nbsp;&nbsp;&nbsp;'+filter.name" x-show="!searchValue || filter.name.toLowerCase().includes(searchValue.toLowerCase())" tabindex="0"
                                        class="hover:bg-yellow-500 px-1 py-2 rounded-lg focus:bg-yellow-500">
                                    </div>
                                </template>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
        <div x-cloak x-show="currentFilters.length > 0" class="relative flex flex-wrap mt-2">
            <div class="mr-2 flex-initial rounded-full py-2 px-4 bg-white border-4 border-yellow-500 mt-2">
                <div class="inline-flex items-start">
                    <div class="mr-2">Clear filters</div>
                    <div @click="currentFilters = []">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <template x-for="filter in currentFilters" :key="filter.id">
                <div class="mr-2 flex-initial rounded-full py-2 px-4 bg-white border-4 border-yellow-500 mt-2">
                    <div class="inline-flex items-start">
                        <div x-html="filter.name" class="mr-2"></div>
                        <div @click="currentFilters = currentFilters.filter((f) => f.id !== filter.id)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
    <ul role="list" class="mt-6 grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2 sm:gap-x-6 md:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        @php
        $count = 1;
        @endphp
        @foreach ($places as $place)
        <div x-data="{ place: {{ $place->toJson() }}}" x-show="showPlace(place, currentFilters)">
            <li class="relative group cursor-pointer rounded-lg">
                <x-place-card :place="$place" :rank="$count" />
            </li>
        </div>
        @php
        $count++;
        @endphp
        @endforeach
    </ul>
</div>
