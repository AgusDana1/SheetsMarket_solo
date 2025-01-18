<nav id="navbar" class="bg-white shadow-md py-4 fixed w-full top-0 z-10 transition-transform duration-300" x-data="{ open: false }">
    <div class="flex-col md:flex-row container mx-auto flex items-center justify-between px-4 gap-4">
        {{-- Logo --}}
        <div class="flex gap-2 items-center justify-between text-2xl md:w-auto w-full">
            <div class="flex gap-2 items-center">
                <h3 class="font-bold text-cyan-500 font-poppins">SheetsMarket</h3>
                <img class="w-10 rounded-full" src="{{ asset('img/SHEETS LOGO1.jpg') }}" alt="">
            </div>
            <div>
                <i class="bi bi-list text-4xl md:hidden cursor-pointer" x-on:click="open = !open"></i>
            </div>
        </div>

        {{-- Search Bar --}}
        <div class="flex-1 w-full hidden md:block">
            <div class="relative">
                <input type="text" placeholder="Cari di SheetsMarket..." class="w-full border border-gray-300 rounded-md py-2 px-4 pl-10 focus:ring-2 font-poppins focus:ring-blue-500 focus:outline-none">
                <i class="bi bi-search absolute left-3 top-2"></i>
            </div>
        </div>

        {{-- Shopping Cart --}}
        <div class="items-center space-x-4 hidden md:flex">
            <button class="text-gray-600 hover:text-black">
                <i class="bi bi-cart-fill"></i>
            </button>
        </div>

        @auth
            {{-- User Profile --}}
            <div class="relative">
                <button class="relative flex items-center focus:outline-none" id="profile-button">
                    <img class="w-10 h-10 rounded-full border-2 border-gray-300" src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('default.png') }}" alt="User Avatar">
                </button>
                <div class="absolute right-0 mt-2 bg-white shadow-lg rounded-md hidden" id="profile-dropdown">
                    <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</button>
                    </form>
                </div>
            </div>
        @endauth

        @guest
            <div class="md:flex gap-2 hidden">
                <button class="border border-cyan-500 text-cyan-500 rounded-md px-4 py-2 font-poppins hover:bg-cyan-50">
                    <a href="{{ route('login') }}">Login</a>
                </button>
                <button class="border text-white bg-cyan-500 rounded-md px-4 py-2 font-poppins hover:bg-cyan-600">
                    <a href="{{ route('register') }}">Register</a>
                </button>
            </div>
        @endguest

        <div class="flex flex-col w-full gap-2 md:hidden" x-show="open" x-transition>
            <div class="flex-1 w-full">
                <div class="relative">
                    <input type="text" placeholder="Cari di SheetsMarket..." class="w-full border border-gray-300 rounded-md py-2 px-4 pl-10 focus:ring-2 font-poppins focus:ring-blue-500 focus:outline-none">
                    <i class="bi bi-search absolute left-3 top-2"></i>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button class="text-gray-600 hover:text-black">
                    <i class="bi bi-cart-fill"></i>
                </button>
            </div>
        </div>
    </div>
</nav>

{{-- JavaScript --}}
<script>
    let lastScrollTop = 0;
    const navbar = document.getElementById('navbar');

    // navbar scroller
    window.addEventListener('scroll', function () {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            navbar.style.transform = 'translateY(-100%)';
        } else {
            navbar.style.transform = 'translateY(0)';
        }
        lastScrollTop = scrollTop;
    });

    document.getElementById('profile-button').addEventListener('click', function () {
        const dropdown = document.getElementById('profile-dropdown');
        dropdown.classList.toggle('hidden');
    });

    document.querySelectorAll('#profile-dropdown a').forEach(link => {
        link.addEventListener('click', function () {
            const dropdown = document.getElementById('profile-dropdown');
            dropdown.classList.add('hidden');
        });
    });
</script>
