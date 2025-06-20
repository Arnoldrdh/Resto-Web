@props(['title', 'description' => '', 'image'])

<div class="relative h-full w-full overflow-hidden rounded-2xl border-4">
  <img src="{{ $image }}" alt="" class="absolute inset-0 h-full w-full object-cover">
  <div class="absolute inset-0 bg-black/30"></div>
  <div class="absolute inset-0 flex flex-col items-center justify-center gap-4 p-8 text-center font-bold text-white">
    <h1 class="text-background text-6xl md:text-9xl">
      {{ $title }}</h1>
    <p class="text-background w-3/4 font-light md:text-lg">{{ $description }}</p>
  </div>
</div>