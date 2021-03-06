<x-app-layout>
    <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl text-left sm:text-center">
        <span class="block xl:inline">Find your next</span>
        <span class="text-yellow-500 md:block">adventure</span>
    </h1>
    <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl text-left sm:text-center">
        Join a community making it easy to plan your next hunting or fishing trip.
        The Hunt List is a database of public hunting and fishing locations compiled by a community of outdoorsman.
    </p>
    <x-place-grid :places="$places" :filters="$filters"></x-place-grid>
</x-app-layout>
