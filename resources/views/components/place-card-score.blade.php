@props(['label', 'score'])
@php
if ($score >= 7) {
$color = 'bg-green-500';
} else if ($score >= 4) {
$color = 'bg-yellow-400';
} else {
$color = 'bg-red-500';
}
@endphp
<div class="flex mb-4">
  <p class="text-white text-base font-bold w-1/2" style="text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);">
    {{ $label }}
  </p>
  <div class="overflow-hidden h-6 flex rounded bg-gray-300 w-1/2">
    <div style="width: {{ $score * 10 }}%" class="shadow-none
        flex flex-col
        text-center
        whitespace-nowrap
        text-white
        justify-center
        {{ $color }} px-2"></div>
  </div>
</div>
