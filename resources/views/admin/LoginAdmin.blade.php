<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login</title>
</head>

<body class="min-h-screen bg-[#B6B09F] flex flex-col">
  <div class="flex-grow flex items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md bg-[#EFE4D2] rounded-2xl shadow-xl p-8 sm:p-10 transform transition-all duration-500 hover:shadow-2xl">
      <h2 class="text-3xl font-bold text-center text-[#2F2E2B] mb-8">Masuk</h2>

      @if ($errors->any())
      <div class="mb-4 text-red-600 text-sm text-center">
        {{ $errors->first() }}
      </div>
      @endif

      <form method="POST" action="{{ route('loginAdmin') }}" class="space-y-6">
        @csrf
        <div>
          <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
          <div class="mt-1">
            <input id="username" name="username" type="text" value="{{ old('username') }}" autocomplete="username" required
              class="w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-200"
              placeholder="Masukan username anda" />
          </div>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <div class="mt-1 relative">
            <input id="password" name="password" type="password" autocomplete="current-password" required
              class="w-full px-4 py-3 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-300"
              placeholder="Masukan password anda" />
          </div>
        </div>

        <div>
          <button type="submit"
            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-[#4A4843] hover:bg-[#2F2E2B] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#4A4843] transition duration-300">
            Masuk
          </button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
@if(session('swal_error'))
<script>
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: "{{ session('swal_error') }}",
  });
</script>
@elseif(session('swal_success'))
<script>
  Swal.fire({
    icon: 'success',
    title: 'Login berhasil',
    text: "{{ session('swal_success') }}",
  });
</script>
@endif