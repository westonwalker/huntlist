<nav class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
    <div class="relative flex items-center justify-center h-16">
      <div class="flex items-center px-2 lg:px-0">
        <a href="/" class="flex-shrink-0 flex justify-center">
          <img class="inline-block h-8 sm:h-10 w-auto" src="/huntlist-logo-yellow.png" alt="Workflow">
          <p class="ml-1 inline-block font-bold text-lg sm:text-xl text-white self-center tracking-wider">TheHuntList</p>
        </a>
      </div>
      <!-- Search Bar -->
      <div class="flex-1 flex px-2 lg:ml-6 justify-end">
        <div class="max-w-lg w-full lg:max-w-xs">
          <div class="flex justify-end">
            <a href="{{ route('pages.contribute') }}" class="rounded-md px-2 sm:px-4 py-1 sm:py-2 self-center text-xs sm:text-base text-white border-2 border-gray-700">Contribute</a>
            <a href="{{ route('pages.subscribe') }}" class="ml-3 rounded-md px-2 sm:px-4 py-1 sm:py-2 self-center text-xs sm:text-base bg-gradient-to-r from-red-500 to-pink-800 text-white">Sign Up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
