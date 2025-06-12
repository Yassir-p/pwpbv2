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
            <h2 class="text-3xl font-bold text-center text-[#2F2E2B] mb-6">Tambah Data Pengguna</h2>
            <form method="POST" action="{{ route('pengguna.store') }}" class="space-y-6">
                @csrf
                <div>
                    <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input id="nama_lengkap" name="nama_lengkap" type="text" required
                           class="mt-1 w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200"
                           placeholder="Masukkan nama lengkap" />
                </div>
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input id="username" name="username" type="text" required
                           class="mt-1 w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200"
                           placeholder="Masukkan username" />
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" required
                           class="mt-1 w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200"
                           placeholder="Masukkan email" />
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required
                           class="mt-1 w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200"
                           placeholder="Masukkan password" />
                </div>
                <div class="flex space-x-4">
                    <button type="submit"
                            class="flex-1 py-3 px-4 bg-[#4A4843] text-white rounded-lg hover:bg-[#2F2E2B] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#4A4843] transition duration-300 text-sm font-medium">
                        Tambah
                    </button>
                    <a href="{{ url('kelolaPengguna') }}"
                       class="flex-1 py-3 px-4 bg-gray-400 text-white rounded-lg hover:bg-gray-500 text-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 text-sm font-medium">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>