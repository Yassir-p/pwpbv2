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
    <title>Admin Dashboard</title>
</head>

<body class="min-h-screen bg-[#B6B09F]">
    <x-nav-bar-admin />

    <main class="pt-24 px-4 sm:px-6 lg:px-8 flex justify-center">
        <div class="w-full max-w-6xl bg-[#EFE4D2] rounded-2xl shadow-xl p-6 sm:p-8 mt-14">
            <div class="flex justify-between items-center mb-6">
                <a href="{{ url('admin') }}" class="py-2 px-4 bg-red-600 text-white rounded-lg hover:bg-[#2F2E2B] transition duration-300">Kembali</a>
                <h2 class="text-3xl font-bold text-center text-[#2F2E2B]">Kelola Produk</h2>
                <a href="{{ url('tambahDataProduk') }}" class="py-2 px-4 bg-[#4A4843] text-white rounded-lg hover:bg-[#2F2E2B] transition duration-300">Tambah Data</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-700 border-collapse">
                    <thead class="text-xs uppercase bg-[#f8eede] text-gray-700">
                        <tr>
                            <th class="px-6 py-3">ID</th>
                            <th class="px-6 py-3">Nama Produk</th>
                            <th class="px-6 py-3">Harga Produk</th>
                            <th class="px-6 py-3">Stok</th>
                            <th class="px-6 py-3">Kategori</th>
                            <th class="px-6 py-3">Gambar</th>
                            <th class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $item)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $item->id }}</td>
                            <td class="px-6 py-4">{{ $item->nm_brg }}</td>
                            <td class="px-6 py-4">{{ $item->hrg_brg }}</td>
                            <td class="px-6 py-4">{{ $item->stok }}</td>
                            <td class="px-6 py-4">{{ $item->kategori }}</td>
                            <td class="px-6 py-4"><img src="{{ asset('storage/' . $item->gambar) }}" width="40"></td>
                            <td class="px-6 py-4 flex space-x-2">
                                <a href="{{ route('produk.edit', $item->id) }}"
                                    class="py-2 px-4 bg-[#4A4843] text-white rounded-lg hover:bg-[#2F2E2B] transition duration-300 text-center text-sm font-medium">
                                    Edit
                                </a>
                                <a href="{{ route('produk.delete', $item->id) }}"
                                    onclick="return confirmDelete(this)"
                                    class="py-2 px-4 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-300 text-center text-sm font-medium">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script>
        function confirmDelete(link) {
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#4A4843',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link.href;
                }
            });
            return false;
        }
    </script>
</body>

</html>