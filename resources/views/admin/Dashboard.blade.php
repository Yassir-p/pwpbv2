<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Admin Dashboard</title>
</head>
<body class="min-h-screen bg-[#B6B09F] flex flex-col">
  <nav class="bg-[#4A4843] p-4 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold text-white">Admin Dashboard</h1>
        <div class="text-sm">
          <a href="/logout" class="font-medium text-white hover:text-[#EFE4D2] transition duration-300">Logout</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="flex-grow flex items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-2xl bg-[#EFE4D2] rounded-2xl shadow-xl p-8 sm:p-10 transform transition-all duration-500 hover:shadow-2xl">
      <h2 class="text-3xl font-bold text-center text-[#2F2E2B] mb-8">Selamat Datang, Admin</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <a href="/manage-users" 
           class="flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-[#4A4843] hover:bg-[#2F2E2B] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#4A4843] transition duration-300">
          Kelola Pengguna
        </a>
        <a href="/manage-products" 
           class="flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-[#4A4843] hover:bg-[#2F2E2B] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#4A4843] transition duration-300">
          Kelola Produk
        </a>
      </div>
    </div>
  </div>
</body>
</html>