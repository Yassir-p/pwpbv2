<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <title>Produk</title>
</head>

<body class="min-h-screen bg-[#B6B09F]">
  <x-nav-bar />
  <div class="flex justify-center items-center">
    <div class="w-full max-w-5xl px-4 py-10 mt-44">
      <!-- Search Bar and Category Dropdown -->
      <div class="flex flex-col sm:flex-row gap-4 mb-8">
        <!-- Search Bar -->
        <div class="flex-1">
          <input type="text" placeholder="Cari produk..."
            class="w-full px-4 py-2 rounded-full bg-white text-gray-900 placeholder-gray-500 
                 focus:outline-none focus:ring-2 focus:ring-indigo-600 shadow-md">
        </div>
        <!-- Category Dropdown -->
        <div x-data="{ open: false, selected: 'Pilih Kategori' }" class="relative w-full sm:w-48">
          <button @click="open = !open"
            class="w-full px-4 py-2 bg-white text-gray-900 rounded-full shadow-md flex justify-between items-center focus:outline-none focus:ring-2 focus:ring-indigo-600">
            <span x-text="selected"></span>
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>

          <!-- Dropdown Options -->
          <ul x-show="open" @click.away="open = false" x-transition
            class="absolute z-10 mt-2 w-full bg-white rounded-xl shadow-md overflow-hidden">
            <li @click="selected = 'Semua'; open = false"
              class="px-4 py-2 hover:bg-indigo-100 cursor-pointer">Semua</li>
            <li @click="selected = 'Perawatan'; open = false"
              class="px-4 py-2 hover:bg-indigo-100 cursor-pointer">Perawatan</li>
            <li @click="selected = 'Makanan'; open = false"
              class="px-4 py-2 hover:bg-indigo-100 cursor-pointer">Makanan</li>
            <li @click="selected = 'Minuman'; open = false"
              class="px-4 py-2 hover:bg-indigo-100 cursor-pointer">Minuman</li>
          </ul>
        </div>
      </div>
      <!-- Product Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-28 justify-items-center">
        @foreach ($products as $row)
        <div class="w-60 rounded-3xl overflow-hidden shadow-lg bg-[#EAE4D5] transform duration-300 hover:scale-105">
          <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $row->gambar) }}" alt="{{ $row->nm_brg }}" />
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 text-gray-900">{{ $row->nm_brg }}</div>
            <p class="text-gray-700 text-base mb-2">{{ $row->jenis }}</p>
            <p class="text-indigo-600 font-semibold text-lg">Rp{{ number_format($row->hrg_brg, 0, ',', '.') }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</body>

</html>