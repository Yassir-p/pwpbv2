<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Beranda</title>
</head>

<body class="min-h-screen bg-[#B6B09F]">
  <x-nav-bar />
  <div class="flex flex-col justify-center items-center min-h-screen text-center px-4">
    <p class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-2">SELAMAT DATANG DI</p>
    <p class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-2">WARUNG BAH IYEP</p>
    <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold">- MURAH, LENGKAP, NIKMAT! -</p>
    <div class="mt-8">
      <a href="/produk">
        <div class="group flex w-full cursor-pointer items-center justify-center rounded-md bg-[#4A4843] hover:bg-[#2F2E2B] px-6 py-2 text-white transition">
          <span class="group flex w-full items-center justify-center rounded py-1 text-center font-bold">Lihat Produk</span>
        </div>
    </a>
    </div>
  </div>
</body>

</html>