<div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'overall' }">
    <div class="relative group">
        <div class="absolute left-0 top-1/2 z-10 text-center w-full" style="transform: translateY(-50%)">
            <h1 class="text-white font-extrabold text-2xl md:text-4xl" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">
                {{ $place->name }}
            </h1>
            <h2 class="text-white font-bold text-base md:text-lg" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">
                {{ $place->display_name }}
            </h2>
        </div>
        <div class="absolute left-0 top-0 pt-4 pl-4">
            <x-home-link></x-home-link>
        </div>
        <img class="h-48 w-full object-cover lg:h-64" src="{{ $place->cover_image }}" alt="">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-800">
        <div class="mt-4">
            {{-- <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select a tab</label>
                <select v-model="activeTab" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-green-400 focus:border-green-400 sm:text-sm rounded-md">
                    <option v-for="tab in tabs" v-bind:value="tab.id">{{ tab.name }}test</option>
                </select>
            </div> --}}
            <div class="hidden sm:block">
                <div class="">
                    <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                        <a :class="tab === 'overall' ? 'border-yellow-500 text-yellow-500' : 'text-white'" @click.prevent="tab = 'overall'; window.location.hash = 'overall'" href="#"
                            class="cursor-pointer hover:text-yellow-500 hover:border-yellow-500 whitespace-nowrap py-4 px-1 border-b-4 font-medium text-base">Overall</a>
                        <a :class="tab === 'hunting' ? 'border-yellow-500 text-yellow-500' : 'text-white'" @click.prevent="tab = 'hunting'; window.location.hash = 'hunting'" href="#"
                            class="cursor-pointer hover:text-yellow-500 hover:border-yellow-500 whitespace-nowrap py-4 px-1 border-b-4 font-medium text-base">Hunting</a>
                        <a :class="tab === 'fishing' ? 'border-yellow-500 text-yellow-500' : 'text-white'" @click.prevent="tab = 'fishing'; window.location.hash = 'fishing'" href="#"
                            class="cursor-pointer hover:text-yellow-500 hover:border-yellow-500 whitespace-nowrap py-4 px-1 border-b-4 font-medium text-base">Fishing</a>
                        <a :class="tab === 'map' ? 'border-yellow-500 text-yellow-500' : 'text-white'" @click.prevent="tab = 'map'; window.location.hash = 'map'" href="#"
                            class="cursor-pointer hover:text-yellow-500 hover:border-yellow-500 whitespace-nowrap py-4 px-1 border-b-4 font-medium text-base">Map</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="text-white mt-4">
            <div x-show="tab === 'overall'" class="flex">
                <div class="w-1/2 border border-b-0  border-gray-500">
                    <div class="flex justify-between p-2 border-b border-gray-500">
                        <h2><span class="mr-4">⭐</span>Overall</h2>
                        <h2>11</h2>
                    </div>
                </div>
                <div class="w-1/2 border border-b-0  border-gray-500">
                    <div class="flex justify-between p-2 border-b border-gray-500">
                        <h2>Score</h2>
                        <h2>11</h2>
                    </div>
                </div>
            </div>
            <div x-show="tab === 'hunting'" class="flex">
                <p class="mt-2">Coming Soon!</p>
            </div>
            <div x-show="tab === 'fishing'" class="flex">
                <p class="mt-2">Coming Soon!</p>
            </div>
            <div x-show="tab === 'map'" class="flex">
                <p class="mt-2">Coming Soon!</p>
            </div>
        </div>

    </div>
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- content -->
    </div>
</div>
