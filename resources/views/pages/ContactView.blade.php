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
  <section id="contact" class="py-24 px-4 bg-secondary/30 relative">
    <div class="container mx-auto max-w-5xl mt-8">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-center">
        Kirim <span class="text-[#4A4843]">Pesan</span>
      </h2>
      <p class="text-center text-muted mb-12 max-w-2xl mx-auto">
        Punya sebuah pesan, saran atau pertanyaan? Jangan ragu untuk menghubungi kami! kami akan berusaha membalas pesan Anda secepat mungkin. Silakan isi formulir di bawah ini atau hubungi saya melalui email atau telepon.
      </p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

        <div class="space-y-8">
          <h3 class="text-2xl font-semibold mb-6">Informasi Kontak</h3>
          <div class="space-y-6">

            <div class="flex items-start space-x-4">
              <div class="p-3 rounded-full bg-[#EFE4D2]">
                <svg class="h-6 w-6 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l9-6 9 6v10a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 12h12" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium">Email</h4>
                <a href="mailto:myassiralhakim@gmail.com" class="text-muted hover:text-primary transition-colors">
                  myassiralhakim@gmail.com
                </a>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="p-3 rounded-full bg-[#EFE4D2]">
                <svg class="h-6 w-6 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium">Telepon</h4>
                <a href="tel:+6289612978372" class="text-muted hover:text-primary transition-colors">
                  +62 896 1297 8372
                </a>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="p-3 rounded-full bg-[#EFE4D2]">
                <svg class="h-6 w-6 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium">Lokasi</h4>
                <span class="text-muted hover:text-primary transition-colors">
                  Bandung, Indonesia
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="p-8 rounded-2xl shadow-sm bg-[#EFE4D2]">
          <h3 class="text-2xl font-semibold mb-6">Kirim sebuah Pesan</h3>
          <form id="contact-form" class="space-y-6">
            <div>
              <label for="name" class="block text-sm font-medium mb-2">Namamu</label>
              <input type="text" id="name" name="name" required
                class="w-full px-4 py-3 rounded-lg border border-input bg-[#f8eede] border-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200" placeholder="Namamu..." />
            </div>
            <div>
              <label for="email" class="block text-sm font-medium mb-2">Emailmu</label>
              <input type="email" id="email" name="email" required
                class="w-full px-4 py-3 rounded-lg border border-input bg-[#f8eede] border-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200" placeholder="contoh@gmail.com"/>
            </div>
            <div>
              <label for="message" class="block text-sm font-medium mb-2">Pesanmu</label>
              <textarea id="message" name="message" required class="w-full px-4 py-3 rounded-lg border border-input bg-[#f8eede] border-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200"
                placeholder="Hi, saya ingin bertanya tentang..."
                rows="5"
              ></textarea>
            </div>
            <button type="submit" id="submit-button" class="w-full flex items-center justify-center gap-2 bg-[#4A4843] hover:bg-[#2F2E2B] text-white py-3 rounded-3xl transition-colors">
              <span id="button-text">Kirim Pesan</span>
              <i data-lucide="send" class="h-4 w-4"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>
</html> 