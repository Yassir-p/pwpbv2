<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<header class="fixed mx-auto w-full flex flex-col overflow-hidden px-8 py-4 lg:flex-row lg:items-center z-50 backdrop-blur-md">
  <a href="/" class="flex items-center whitespace-nowrap text-2xl font-black">
    <span class="mr-2 w-28">
      <img src="/storage/assets/wahyep.png"/>
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
    <div class="my-4 flex items-center space-x-6 space-y-2 lg:my-0 lg:ml-auto lg:space-x-8 lg:space-y-0">
      <a href="/login" class="w-32 rounded-full bg-[#3a2a22] px-5 py-3 font-medium text-white transition-all duration-200 hover:bg-[#2a1c16] text-center">Login</a>
    </div>
  </nav>
</header>
