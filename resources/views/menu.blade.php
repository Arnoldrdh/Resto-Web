@extends('layouts.general-layout')
@section('content')

<div class="flex h-fit w-full flex-col gap-4">
    <div class="container h-[calc(100dvh-4rem)] w-screen p-8 pt-0">
        <x-hero.hero title="Menu" image="{{ asset('images/food-1.webp')}}"></x-hero>
    </div>
    <div class="flex w-full items-center justify-center gap-4">
        <button class="bg-accent border-4" onclick="setCategoryIsFood(true)">Foods</button>
        <button class="bg-accent border-4" onclick="setCategoryIsFood(false)">Drinks</button>
    </div>
    {{-- Food Section --}}
    <div id="foodsSection" class="container grid grid-cols-1 gap-4 p-8 md:grid-cols-2">
        @foreach ($food as $f)
            <div class="flex items-center gap-4">
                <img src="{{ $f->image_url }}" alt="" class="aspect-square h-28 rounded-xl">
                <div class="flex flex-col gap-2">
                    <h3>{{ $f->name }}</h3>
                    <p class="line-clamp-3"> {{$f->description}}</p>
                    <p class="line-clamp-3">{{$f->price}}</p>
                </div>
            </div>
        @endforeach
    </div>
    {{-- Drinks Section --}}
    <div id="drinksSection" class="container grid grid-cols-1 gap-4 p-8 md:grid-cols-2">
        @foreach ($drink as $d)
            <div class="flex items-center gap-4">
                <img src="{{ $f->image_url }}" alt="" class="aspect-square h-28 rounded-xl">
                <div class="flex flex-col gap-2">
                    <h3>{{ $f->name }}</h3>
                    <p class="line-clamp-3"> {{$f->description}}</p>
                    <p class="line-clamp-3">{{$f->price}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

<script>
    let setCategoryIsFood = true;
    function setCategoryIsFood(val){
        setCategoryIsFood = val;
        document.getElementById('foodsSection').style.display = setCategoryIsFood? 'grid':'none';
        document.getElementById('drinksSection').style.display = setCategoryIsFood? 'none':'grid';
    }
</script>