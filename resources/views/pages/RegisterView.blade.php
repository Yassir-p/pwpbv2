<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Register</title>
</head>
<body class="min-h-screen bg-[#B6B09F] flex flex-col">
  <x-nav-bar />
  <div class="flex-grow flex items-center justify-center px-4 sm:px-6 lg:px-8 ">
    <div class="w-full max-w-md bg-[#EFE4D2] rounded-2xl shadow-xl p-8 sm:p-10 transform transition-all duration-500 hover:shadow-2xl">
      <h2 class="text-3xl font-bold text-center text-[#2F2E2B] mb-8">Daftar</h2>
      <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
          <div class="mt-1">
            <input id="email" name="email" type="email" autocomplete="email" required
              class="w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200"
              placeholder="Masukkan email anda" />
          </div>
        </div>

        <div>
          <label for="fullName" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
          <div class="mt-1">
            <input id="fullName" name="full_name" type="text" required
              class="w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200"
              placeholder="Masukkan nama lengkap anda" />
          </div>
        </div>

        <div>
          <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
          <div class="mt-1">
            <input id="username" name="username" type="text" autocomplete="username" required
              class="w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200"
              placeholder="Masukkan username anda" />
          </div>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <div class="mt-1">
            <input id="password" name="password" type="password" required
              class="w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200"
              placeholder="Masukkan password anda" />
          </div>
        </div>

        <div>
          <button type="submit"
            class="w-full flex justify-center mt-8 py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-[#4A4843] hover:bg-[#2F2E2B]">
            Daftar
          </button>
        </div>
      </form>

      <p class="mt-6 text-center text-sm text-gray-600">
        Sudah memiliki akun?
        <a href="/login" class="font-medium text-[#4A4843] hover:text-[#2F2E2B] transition duration-300">Masuk</a>
      </p>
    </div>
  </div>
</body>
</html>