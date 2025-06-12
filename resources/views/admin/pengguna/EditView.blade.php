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
    <title>Tambah Data Produk</title>
</head>

<body class="min-h-screen bg-[#B6B09F]">
    <x-nav-bar-admin />
    <main class="pt-24 px-4 sm:px-6 lg:px-8 flex justify-center">
        <div class="w-full max-w-md bg-[#EFE4D2] rounded-2xl shadow-xl p-6 sm:p-8 mt-14">
            <h2 class="text-3xl font-bold text-center text-[#2F2E2B] mb-6">Edit Data Pengguna</h2>
            <form method="POST" action="{{ route('pengguna.update', $pengguna->id) }}" class="space-y-6">
                @csrf
                <div>
                    <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input id="nama_lengkap" name="nama_lengkap" type="text" value="{{ $pengguna->full_name }}" required
                        class="mt-1 w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm" />
                </div>
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input id="username" name="username" type="text" value="{{ $pengguna->username }}" required
                        class="mt-1 w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm" />
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" value="{{ $pengguna->email }}" required
                        class="mt-1 w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm" />
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password (Biarkan kosong jika tidak ingin mengubah)</label>
                    <input id="password" name="password" type="password"
                        class="mt-1 w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm" />
                </div>
                <div class="flex space-x-4">
                    <button type="submit"
                        class="flex-1 py-3 px-4 bg-[#4A4843] text-white rounded-lg hover:bg-[#2F2E2B]">
                        Simpan
                    </button>
                    <a href="{{ route('kelolaPengguna') }}"
                        class="flex-1 py-3 px-4 bg-gray-400 text-white rounded-lg text-center hover:bg-gray-500">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </main>
</body>

</html>