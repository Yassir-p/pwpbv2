<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @vite('resources/js/app.js')
  <title>Produk</title>
</head>

<body class="min-h-screen bg-[#B6B09F]">
  <x-nav-bar />
  <div class="flex justify-center items-center">
    <div class="w-full max-w-7xl px-4 py-10 mt-28">
      <form method="GET" action="{{ route('produk') }}" class="flex flex-col sm:flex-row gap-4 mb-8">
        <input type="text" name="search" placeholder="Cari produk..." value="{{ $request->search ?? '' }}"
          class="flex-1 px-4 py-2 rounded-full bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#BF9264] shadow-md" />
        <div x-data="{ open: false, selected: '{{ $request->kategori ?? 'Semua' }}' }" class="relative w-full sm:w-48">
          <button type="button" @click="open = !open"
            class="w-full px-4 py-2 bg-white text-gray-900 rounded-full shadow-md flex justify-between items-center focus:outline-none focus:ring-2 focus:ring-[#BF9264]">
            <span x-text="selected"></span>
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>

          <ul x-show="open" @click.away="open = false" x-transition
            class="absolute z-10 mt-2 w-full bg-white rounded-xl shadow-md max-h-60 overflow-auto">
            <li @click="selected = 'Semua'; open = false; $refs.kategori.value='Semua'"
              class="px-4 py-2 hover:bg-indigo-100 cursor-pointer">Semua</li>
            @foreach ($categories as $category)
            <li @click="selected = '{{ $category }}'; open = false; $refs.kategori.value='{{ $category }}'"
              class="px-4 py-2 hover:bg-indigo-100 cursor-pointer">{{ $category }}</li>
            @endforeach
          </ul>
          <input type="hidden" name="kategori" x-ref="kategori" :value="selected">
        </div>
        <button type="submit"
          class="px-6 py-2 bg-[#4A4843] hover:bg-[#2F2E2B] text-white rounded-full transition">
          Cari
        </button>
      </form>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4 place-items-center">
        @foreach ($products as $row)
        <div class="w-full max-w-xs rounded-xl overflow-hidden shadow-lg bg-[#EFE4D2] backdrop-blur-sm border border-gray-100 transition duration-300">
          <div class="relative">
            <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $row->gambar) }}" alt="{{ $row->nm_brg }}" />
            @if(in_array(strtolower($row->nm_brg), ['basreng', 'seblak']))
            <div class="absolute top-2 left-2 bg-[#4A4843] text-white text-xs font-semibold px-2 py-1 rounded-full">Top Seller</div>
            @endif
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $row->nm_brg }}</h3>
            <p class="text-gray-600 text-sm mb-1">Kategori: {{ $row->kategori }}</p>
            <p class="text-[#4A4843] font-bold text-lg mb-2">{{ $row->hrg_rupiah }}</p>
            <p class="text-gray-500 text-sm mb-4">Stok: {{ $row->stok }}</p>
            @if (Auth::guard('pengguna')->check())
            <form method="POST" action="{{ route('cart.add', $row->id) }}" x-data="{ qty: 0 }">
              @csrf
              @else
              <form x-data="{ qty: 0 }" @submit.prevent="window.location.href='{{ route('login') }}'">
                @endif
                <div class="flex items-center justify-between mb-4">
                  <span class="text-gray-700 font-medium">Quantity:</span>
                  <div class="flex items-center space-x-2">
                    <button type="button" @click="if(qty >1) qty--" class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-300 transition">-</button>
                    <span class="text-gray-900 font-semibold" x-text="qty"></span>
                    <button type="button" @click="qty++" class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-300 transition">+</button>
                  </div>
                </div>
                <input type="hidden" name="qty" x-model="qty">
                <button type="submit" class="w-full bg-[#4A4843] hover:bg-[#2F2E2B] text-white py-2 rounded-lg transition duration-300">Tambah ke Keranjang</button>
              </form>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</body>
</html>