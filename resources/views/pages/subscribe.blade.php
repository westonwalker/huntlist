<x-app-layout>
    <x-home-link></x-home-link>
    <div class="text-center">
        <h1 class="text-4xl mb-3 tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl text-left sm:text-center">
            <span class="block xl:inline">Sign up to the</span>
            <span class="md:block text-yellow-500">Hunt List</span>
        </h1>
        <p class="text-gray-200 text-lg sm:text-2xl sm:leading-10 font-medium mb-2 sm:mb-4 text-left sm:text-center">
            Stay up to date with the Hunt List. When new <span class="text-yellow-500">locations</span> are added, we will <span class="text-yellow-500">email</span> you!
        </p>
        @if (session('success'))
        <p class="text-green-500 text-lg sm:text-2xl sm:leading-10 font-medium mb-2 sm:mb-4 text-left sm:text-center">
            {{ session('success') }}
        </p>
        @else
        @if ($errors->any())
        <div class="flex justify-center">
            @foreach ($errors->all() as $error)
            <p class="text-red-500">{{ $error }}</p>
            @endforeach
        </div>
        <br />
        @endif
        <form action="{{ route('pages.subscribe.store') }}" method="POST" class="sm:flex justify-center">
            @csrf
            <label for="email" class="sr-only">Email address</label>
            <input name="email" type="email" autocomplete="email" required class="w-full px-5 py-3 border border-transparent rounded-md leading-5 bg-gray-700 text-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white focus:border-white focus:ring-white focus:text-gray-900 sm:max-w-xs"
                placeholder="Enter your email">
            <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                <button type="submit" class="w-full flex items-center justify-center px-5 py-3 text-base font-medium rounded-md border-2 border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Sign Up
                </button>
            </div>
        </form>
        @endif
    </div>

</x-app-layout>
