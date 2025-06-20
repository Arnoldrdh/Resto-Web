@extends('layouts.plain-layout')

@section('content')
  <div class="container flex h-full min-h-full w-full items-center justify-center px-8">
    <div class="bg-accent flex w-full max-w-screen-md flex-col gap-6 rounded-2xl border-4 p-8">
      <h1>Register</h1>
      <form method="POST" action="/register" class="flex flex-col gap-4">
        @csrf
        <div class="flex flex-col gap-1">
            <label for="name" class="font-semibold">Name</label>
            <input id="name" type="text" name="name"
              class="bg-accent-foreground rounded-xl border-4 px-3 py-2 focus:outline-none">
          </div>

        <div class="flex flex-col gap-1">
          <label for="email" class="font-semibold">Email</label>
          <input id="email" type="email" name="email"
            class="bg-accent-foreground rounded-xl border-4 px-3 py-2 focus:outline-none">
        </div>

        <div class="flex flex-col gap-1">
          <label for="password" class="font-semibold">Password</label>
          <input id="password" type="password" name="password"
            class="bg-accent-foreground rounded-xl border-4 px-3 py-2 focus:outline-none">
        </div>

        <button type="submit" class="bg-primary text-accent hover:bg-primary/90">Register</button>
      </form>
      <p class="text-center">Already have an Account? <a href="/login" class="font-semibold">Login</a></p>
    </div>
  </div>
@endsection