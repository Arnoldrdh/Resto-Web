@extends('layouts.general-layout')

@section('content')
  <div class="flex h-fit w-full flex-col gap-4">
    <div class="container h-[calc(100dvh-4rem)] w-screen p-8 pt-0">
      <x-hero.hero title="Menu" image="{{ asset('image.webp') }}" />
    </div>

    <div class="flex w-full items-center justify-center gap-4">
      <button class="bg-accent border-4" onclick="setCategoryIsFood(true)">Foods</button>
      <button class="bg-accent border-4" onclick="setCategoryIsFood(false)">Drinks</button>
    </div>

    <div id="foodsSection" class="container grid grid-cols-1 gap-4 p-8 md:grid-cols-2">
      @foreach ($food as $f)
        <div class="flex items-center gap-4">
          <img src="{{ asset($f->image) }}" alt="" class="aspect-square h-28 rounded-xl">
          <div class="flex flex-col gap-2">
            <h3>{{ $f->name }}</h3>
            <p class="line-clamp-3">{{ $f->description }}</p>
            <p class="text-xl font-bold">Rp. {{ $f->price }}</p>
          </div>
        </div>
      @endforeach
    </div>

    <div id="drinksSection" class="container hidden grid-cols-1 gap-4 p-8 md:grid-cols-2">
      @foreach ($drink as $d)
        <div class="flex items-center gap-4">
          <img src="{{ asset($d->image) }}" alt="" class="aspect-square h-28 rounded-xl">
          <div class="flex flex-col gap-2">
            <h3>Ayam Goreng</h3>
            <p class="line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aut libero itaque
              cupiditate voluptatum
              repellat consequuntur consequatur veniam repellendus officia.</p>
          </div>
        </div>
      @endforeach
    </div>

  </div>
@endsection

<script>
  let categoryIsFood = true;

  function setCategoryIsFood(val) {
    categoryIsFood = val;
    document.getElementById('foodsSection').style.display = categoryIsFood ? 'grid' : 'none';
    document.getElementById('drinksSection').style.display = categoryIsFood ? 'none' : 'grid';
  }
</script>