{{-- @extends('layout.PlainLayout') --}}
{{-- @section('content') --}}
<div class="container flex h-full min-h-full w-full items-center justify-center-px-8">
    <div class="bg-accent flex w-full max-w-screen-md flex-col gap-6 rounded-2xl border-4 p-8">
        <h1>Login</h1>
            <form action="/login" method="post" class="flex flex-col gap-4">
                @csrf

                <div class="flex flex-col gap-1">
                    <label for="email"class="font-semibold">Email</label>
                    <input type="email" id="email" name="email" class="bg-accent-foreground rounded-xl border-4 px-3 py-2 focus:outline-none">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="password"class="font-semibold">Email</label>
                    <input type="password" id="password" name="password" class="bg-accent-foreground rounded-xl border-4 px-3 py-2 focus:outline-none">
                </div>
                <button type="submit" class="bg-primary text-accent hover:bg-primary/90">Login</button>
            </form>
            <p class="text-center"> don't have an account? <a href="/register" class="font-semibold">Register?</a></p>
    </div>
</div>
{{-- @endsection --}}