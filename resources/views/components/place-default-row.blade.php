@props(['type' => 'paragraph', 'link' => '', 'text'])

<div class="w-full md:w-1/2 border border-gray-500">
  <div class="flex flex-row justify-between p-4">
    <h2 class="w-2/4 text-base font-semibold">{{ $slot }}</h2>
    <div class="w-2/4 text-right text-sm">
      @if(!empty($text))
      @if ($type == 'link')
      <a class="underline" target="_blank" href="{{ $link }}">{{ $text }}</a>
      @else
      <p>{{ $text }}</p>
      @endif
      @else
      <p>N/A</p>
      @endif
    </div>
  </div>
</div>
