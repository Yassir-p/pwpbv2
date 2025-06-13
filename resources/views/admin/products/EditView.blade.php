<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/@heroicons/react@2.0.18/24/outline.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Edit Data Produk</title>
</head>

<body class="min-h-screen bg-[#B6B09F]">
    <x-nav-bar-admin />
    <main class="pt-24 px-4 sm:px-6 lg:px-8 flex justify-center">
        <div class="w-full max-w-md bg-[#EFE4D2] rounded-2xl shadow-xl p-6 sm:p-8 mt-14">
            <h2 class="text-3xl font-bold text-center text-[#2F2E2B] mb-6">Edit Data Produk</h2>
            <form method="POST" action="{{ route('produk.update', $produk->id) }}" class="space-y-6" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="nm_brg" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                    <input id="nm_brg" name="nm_brg" type="text" value="{{ $produk->nm_brg }}" required
                        class="mt-1 w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200"
                        placeholder="Masukkan nama produk" />
                </div>
                <div>
                    <label for="hrg_brg" class="block text-sm font-medium text-gray-700">Harga Produk</label>
                    <input id="hrg_brg" name="hrg_brg" type="number" value="{{ $produk->hrg_brg }}" step="0.01" required
                        class="mt-1 w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200"
                        placeholder="Masukkan harga produk" />
                </div>
                <div>
                    <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
                    <input id="stok" name="stok" type="number" value="{{ $produk->stok }}" required
                        class="mt-1 w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200"
                        placeholder="Masukkan jumlah stok" />
                </div>
                <div>
                    <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                    <select id="kategori" name="kategori" required
                        class="mt-1 w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200">
                        <option value="" disabled selected>Pilih kategori</option>
                        <option value="Makanan" {{ $produk->kategori == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                        <option value="Minuman" {{ $produk->kategori == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                        <option value="Perawatan" {{ $produk->kategori == 'Perawatan' ? 'selected' : '' }}>Perawatan</option>
                    </select>
                </div>
                <div>
                    <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input id="gambar" name="gambar" type="file" accept="image/*"
                        class="mt-1 w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200" />
                </div>
                <div class="flex space-x-4">
                    <button type="submit"
                        class="flex-1 py-3 px-4 bg-[#4A4843] text-white rounded-lg hover:bg-[#2F2E2B] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#4A4843] transition duration-300 text-sm font-medium">
                        Tambah
                    </button>
                    <a href="{{ route('produk.index') }}"
                        class="flex-1 py-3 px-4 bg-gray-400 text-white rounded-lg hover:bg-gray-500 text-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 text-sm font-medium">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </main>
</body>

</html>