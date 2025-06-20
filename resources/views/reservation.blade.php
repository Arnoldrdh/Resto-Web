@extends('layouts.general-layout')
@section('content')

<div class="flex flex-col gap-4">
    <div class="container h-[calc(100dvh-4rem)] w-screen p-8 pt-0">
        <x-hero.hero title="Reservation" image="{{ asset('images/food-1.webp')}}"></x-hero>
    </div>

    <div class="container px-8">
        @if (Auth::check())
            <form action="/reservation" method="post" class="bg-accent-foreground flex flex-col gap-4 rounded-2xl border-4 p-8">
                @csrf

                <h1 class="font-outline-3 text-accent">Reservation Form</h1>
                <div class="flex flex-col gap-1">
                    <label for="name" class="font-semibold">Name</label>
                    <input type="text" id="name" name="name" value="{{Auth::check() ? Auth::user()->name:''}}" class="bg-accent-foreground rounded-xl border-4 px-3 py-2 focus:outline-none">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="datetime" class="font-semibold">Date & Time</label>
                    <input type="datetime-local" id="datetime" name="datetime" class="bg-accent-foreground rounded-xl border-4 px-3 py-2 focus:outline-none">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="people" class="font-semibold">People</label>
                    <input type="number" id="people" name="people" min="1" max="10" class="bg-accent-foreground rounded-xl border-4 px-3 py-2 focus:outline-none">
                </div>

                <button type="submit" class="bg-accent hover:bg-accent/80 rounder-xl border-4">Reserve Now</button>
            </form>
        @else
            <div class="bg-accent-foreground w-full h-fit p-8 border-4 rounded-xl flex items-center justify-center flex-col gap-4">
                <h1 class="text-center">Login to Reserve</h1>
                <a href="/login">
                    <button class="bg-accent border-4 hover:bg-accent/80">Login</button>
                </a>
            </div>
        @endif
    </div>
</div>
@endsection