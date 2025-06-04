<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Produk</title>
</head>

<body class="min-h-screen bg-[#B6B09F]">
  <x-nav-bar />
  <div class="flex justify-center items-center">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-24 px-4 py-10 mt-44">
      @foreach ($products as $row)
      <div class="max-w-sm rounded-3xl overflow-hidden shadow-lg bg-white transform duration-300 hover:scale-105">
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