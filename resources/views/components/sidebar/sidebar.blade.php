<nav class="w-[200px] h-dvh border-r-4 py-2">
    <a href="/home">
        <h2 class="text-center">NK Foods</h1>
    </a>
        <div class="px-2 mt-8">
            <a href="{{ route('admin.menus')}}" class="{{ request()->routeIs('admin.menus') ? 'text-accent font-semibold' : ''}} font-medium ">
                <button class="{{request()->routeIs('admin.menus') ? 'bg-primary hover:bg-primary/80' : 'hover:bg-accent/10'}} w-full">Foods</button>
            </a>
            <a href="{{ route('admin.reservation')}}" class="{{ request()->routeIs('admin.reservation') ? 'text-accent font-semibold' : ''}} font-medium ">
                <button class="{{request()->routeIs('admin.reservation') ? 'bg-primary hover:bg-primary/80' : 'hover:bg-accent/10'}} w-full">List Reservasi</button>
            </a>
        </div>
</nav>