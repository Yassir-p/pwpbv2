<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Tentang</title>
</head>

<body class="min-h-screen bg-[#B6B09F] font-sans">
  <x-nav-bar />
  <main class="pt-40">
    <section class="py-16 px-4">
      <div class="max-w-5xl mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl font-semibold text-gray-900 mb-6">Tentang WahYep</h2>
        <p class="text-gray-700 text-base sm:text-lg mb-8 leading-relaxed">
          Warung Bah Iyep adalah warung kecil yang berdiri dengan cinta untuk menyediakan berbagai kebutuhan Anda.
          Kami menawarkan aneka makanan lezat, minuman segar, serta produk perawatan dan kebutuhan sehari-hari lainnya.
          Dengan suasana yang nyaman dan pelayanan yang ramah, kami ingin menjadi bagian dari hari Anda.
          Kunjungi kami dan nikmati pengalaman berbelanja yang menyenangkan!
        </p>
      </div>
    </section>

    <section class="py-16 px-4 bg-[#A9A490]">
      <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-semibold text-gray-900 text-center mb-12">Apa yang WahYep tawarkan</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="bg-[#EAE4D5] rounded-2xl shadow-lg p-6 text-center transform hover:scale-105 transition duration-300">
            <div class="w-16 h-16 bg-indigo-100 rounded-full mx-auto mb-4 flex items-center justify-center">
              <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9h18M3 9l1.5-4h15L21 9M3 9v9a2 2 0 002 2h14a2 2 0 002-2V9m-9 0v5m-4-5v5m8-5v5" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Makanan</h3>
            <p class="text-gray-700">Nikmati berbagai makanan lezat seperti seblak, basreng, dan camilan lainnya yang menggugah selera</p>
          </div>

          <div class="bg-[#EAE4D5] rounded-2xl shadow-lg p-6 text-center transform hover:scale-105 transition duration-300">
            <div class="w-16 h-16 bg-indigo-100 rounded-full mx-auto mb-4 flex items-center justify-center">
              <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3M3 9h18" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Minuman</h3>
            <p class="text-gray-700">Segarkan hari Anda dengan minuman kami, mulai dari kopi, pop ice, hingga minuman tradisional.</p>
          </div>

          <div class="bg-[#EAE4D5] rounded-2xl shadow-lg p-6 text-center transform hover:scale-105 transition duration-300">
            <div class="w-16 h-16 bg-indigo-100 rounded-full mx-auto mb-4 flex items-center justify-center">
              <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Lain-lain</h3>
            <p class="text-gray-700">Kami juga menyediakan produk perawatan seperti shampoo dan kebutuhan harian lainnya.</p>
          </div>
        </div>
      </div>
    </section>

    <footer class="py-8 bg-[#A9A490] text-center">
      <p class="text-gray-700">© 2025 Warung Bah Iyep. All rights reserved.</p>
    </footer>
  </main>
</body>

</html>