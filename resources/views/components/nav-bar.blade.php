<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/@heroicons/react@2.0.18/24/outline.js"></script>
<script src="https://unpkg.com/lucide@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@vite('resources/js/app.js')
<header class="fixed mx-auto w-full flex flex-col overflow-hidden px-8 py-4 lg:flex-row lg:items-center z-50 backdrop-blur-md">
    <a href="/" class="flex items-center whitespace-nowrap text-2xl font-black">
        <span class="mr-2 w-28">
            <img src="/storage/assets/wahyep.png" />
        </span>
    </a>
    <input type="checkbox" class="peer hidden" id="navbar-open" />
    <label class="absolute top-5 right-5 cursor-pointer lg:hidden" for="navbar-open">
        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </label>
    <nav aria-label="Header Navigation" class="peer-checked:pt-8 peer-checked:max-h-60 flex max-h-0 w-full flex-col items-center overflow-hidden transition-all lg:ml-24 lg:max-h-full lg:flex-row">
        <ul class="flex w-full flex-col items-center space-y-2 lg:flex-row lg:justify-center lg:space-y-0">
            <li class="lg:mr-12"><a class="text-black transition hover:text-amber-950 duration-200" href="/">Beranda</a></li>
            <li class="lg:mr-12"><a class="text-black transition hover:text-amber-950 duration-200" href="/tentang">Layanan</a></li>
            <li class="lg:mr-12"><a class="text-black transition hover:text-amber-950 duration-200" href="/hubungi">Kontak</a></li>
            <li class="lg:mr-12"><a class="text-black transition hover:text-amber-950 duration-200" href="/produk">Produk</a></li>
        </ul>
        <hr class="mt-4 w-full lg:hidden" />
        <div class="my-0 flex items-center space-x-3 space-y-2 lg:my-0 lg:ml-auto lg:space-x-3 lg:space-y-0">
            <a href="/cart" class="hover:bg-[#9b9688] lg:mt-0 md:mt-4 mt-4 px-3 py-2 rounded-md text-sm font-medium flex items-center transition duration-300">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                Cart
                <span id="cart-count" class="ml-2 bg-[#4A4843] text-white text-xs font-semibold px-2 py-1 rounded-full">{{ session('cart') ? array_sum(array_column(session('cart'), 'qty')) : 0 }}</span>
            </a>
            @if (Auth::guard('pengguna')->check())
            <div class="flex flex-row items-center space-x-3">
                <a href="/profile" class="flex items-center rounded-full bg-[#4A4843] hover:bg-[#2F2E2B] px-5 py-3 font-medium text-white transition-all duration-200">
                    <ion-icon name="person-circle-outline" class="text-xl mr-2"></ion-icon>
                    Profile
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center rounded-full bg-red-600 hover:bg-red-800 px-5 py-3 font-medium text-white transition-all duration-200">
                        <ion-icon name="log-out-outline" class="text-xl mr-2"></ion-icon>
                        Logout
                    </button>
                </form>
            </div>
            @else
            <a href="/login" class="flex items-center rounded-full bg-[#4A4843] hover:bg-[#2F2E2B] px-5 py-3 font-medium text-white transition-all duration-200">
                <ion-icon name="log-in-outline" class="text-xl mr-2"></ion-icon>
                Login
            </a>
            @endif

        </div>
    </nav>
</header>