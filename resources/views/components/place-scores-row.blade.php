<div class="w-full md:w-1/2 border border-gray-500">
    <div class="flex flex-row justify-between p-4">
        <h2 class="w-2/4 text-base font-semibold">{{ $slot }}</h2>
        <div class="w-2/4">
            <div class="overflow-hidden h-8 flex rounded bg-gray-300">
                <div style="width: {{ $calculateWidth }}%" class="shadow-none
                  flex flex-col
                  text-center
                  whitespace-nowrap
                  text-white
                  justify-center
                  bg-{{ $calculateColor }} px-2"><span class="font-bold text-shadow text-sm">{{ $buildLabel }}</span></div>
            </div>
        </div>
    </div>
</div>
