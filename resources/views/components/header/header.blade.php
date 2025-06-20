<header class="bg-background fixed inset-0 z-50 flex h-16 items-center justify-center gap-8 px-4">
    <h3 class="text-accent">NKFoods</h3>

    <div class="flex gap-4">
        <div class="flex gap-4">
            <a href="{{ route('home')}}" class="{{ request()->routeIs('home') ? 'text-primary font-semibold' : 'text-muted-foreground'}} font-medium">Home</a>
            <a href="{{ route('menu')}}" class="{{ request()->routeIs('menu') ? 'text-primary font-semibold' : 'text-muted-foreground'}} font-medium">Menu</a>
            <a href="{{ route('reservation')}}" class="{{ request()->routeIs('reservation') ? 'text-primary font-semibold' : 'text-muted-foreground'}} font-medium">Reservation</a>
        </div>
    </div>

    @if(!Auth::check())
    <a href="{{route('login')}}">
        <button class="bg-accent border-4 py-1">Login</button>
    </a>
    @else
    <div class="relative cursor-pointer" onclick="setIsSectionOpen()">
        <p>Hi, {{Auth::user()->name}}</p>
        <div id="section" class="bg-background text-accent absolute inset-0 mt-8 hiddend h-fit w-fit flex-col gap-1 rounded-xl border-4 p-1 hidden">
            @if(Auth::user()->role == 'admin')
            <a href="{{route('reservation')}}">
                <button class="hover:bg-accent/10 w-full text-start text-base font-normal">Dashboard</button>
            </a>
            @endif
            <a href="/logout">
                <button class="hover:bg-accent/10 w-full text-start text-base font-normal">Logout</button>
            </a>
        </div>
    </div>
    @endif
</header>

<script>
    var isSectionOpen = false;
    function setIsSectionOpen() {
        isSectionOpen = !isSectionOpen;
        document.getElementById('section').style.display = isSectionOpen ? 'flex' : 'none';
    }
</script>