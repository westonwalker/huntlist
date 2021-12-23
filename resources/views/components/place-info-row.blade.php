@props(['title' => ''])

<div class="w-full md:w-1/2 border border-gray-500">
  <div class="flex flex-row justify-between p-4">
    <h2 class="w-2/4 text-base font-semibold">{!! $title !!}</h2>
    <div class="w-2/4 text-right text-sm">
      {{ $slot }}
    </div>
  </div>
</div>
