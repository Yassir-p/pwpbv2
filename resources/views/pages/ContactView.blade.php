
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Hubungi</title>
</head>
<body class="min-h-screen bg-[#B6B09F] flex flex-col">
  <x-nav-bar />

  <div class="flex flex-1 items-center justify-center px-4 py-12">
    <div class="w-full max-w-lg bg-white/80 rounded-2xl shadow-xl p-8 backdrop-blur-md">
      <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Hubungi Kami</h2>
      <form action="#" method="POST" class="space-y-5">
        <div>
          <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" required
            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#B6B09F] bg-white/70 text-gray-800 transition" />
        </div>
        <div>
          <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
          <input type="email" id="email" name="email" required
            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#B6B09F] bg-white/70 text-gray-800 transition" />
        </div>
        <div>
          <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan</label>
          <textarea id="message" name="message" rows="5" required
            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#B6B09F] bg-white/70 text-gray-800 transition resize-none"></textarea>
        </div>
        <button type="submit"
          class="w-full py-3 rounded-lg bg-[#4A4843] hover:bg-[#2F2E2B] text-white font-bold text-lg shadow-md transition">Kirim</button>
      </form>
    </div>
  </div>
</body>
</html>