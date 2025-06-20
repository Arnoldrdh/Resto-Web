@extends('layouts.general-layout')

@section('content')
<div class="flex h-full w-full flex-col gap-4">
    <div class="container h-[calc(100dvh-4rem)] w-screen p-8 pt-0">
        <x-hero.hero title="NKFoods" description="Lorem ipsum abc" image="{{asset('image.webp')}}" />
    </div>

    <div class="container flex flex-col gap-4 px-8 xl:flex-row">
        <div class="flex flex-col overflow-hidden rounded-2xl border-4 md:flex-row-reverse">
            <div class="h-96 md:w-[550px]">
                <img src="{{ asset('image.webp')}}" alt="" class="h-full w-full object-cover">
            </div>
            <div class="bg-accent-foreground min-w-92 flex flex-1 flex-col justify-center gap-4 p-8 md:justify-start">
                <h1 class="font-outline-3 text-accent text-justify text-6xl">Menu</h1>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid excepturi ad rerum incidunt magni accusantium laborum sint quos dignissimos corporis.</p>
                <a href="{{route('menu')}}">
                    <button class="bg-accent hover:bg-accent/80 ms-auto w-fit border-4 md:ms-0">View Menu</button>
                </a>
            </div>
        </div>

        <div class="flex flex-col overflow-hidden rounded-2xl border-4 md:flex-row-reverse">
            <div class="h-96 md:w-[550px]">
                <img src="{{ asset('image.webp')}}" alt="" class="h-full w-full object-cover">
            </div>
            <div class="bg-primary-foreground min-w-92 flex flex-1 flex-col justify-center gap-4 p-8 md:justify-start">
                <h1 class="font-outline-3 text-accent text-justify text-6xl">Reservation</h1>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid excepturi ad rerum incidunt magni accusantium laborum sint quos dignissimos corporis.</p>
                <a href="{{route('reservation')}}">
                    <button class="bg-accent hover:bg-accent/80 ms-auto w-fit border-4 md:ms-0">Reserve Now</button>
                </a>
            </div>
        </div>
    </div>


</div>

@endsection