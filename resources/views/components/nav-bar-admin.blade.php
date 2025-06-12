<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/@heroicons/react@2.0.18/24/outline.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="{{ asset('wahyep.png') }}" type="image/png">
    @vite('resources/js/app.js')
</head>

<body>
    @php
    $user = Auth::guard('pengguna')->user();
    @endphp

    @if (!$user || $user->role !== 'admin')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Akses Ditolak',
            text: 'Anda tidak memiliki akses ke halaman ini!',
            confirmButtonColor: '#4A4843'
        }).then(() => {
            window.location.href = "{{ url('/') }}";
        });
    </script>
    @endif
    <header class="fixed mx-auto w-full flex flex-col overflow-hidden px-8 py-4 lg:flex-row lg:items-center z-50 backdrop-blur-md">
        <a href="/" class="flex items-center whitespace-nowrap text-2xl font-black">
            <span class="mr-2 w-28">
                <img src="/storage/assets/wahyep.png" />
            </span>
        </a>
        <input type="checkbox" class="peer hidden" id="navbar-open" />
        <label class="absolute top-5 right-5 cursor-pointer lg:hidden" for="navbar-open">
            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </label>
        <nav aria-label="Header Navigation" class="peer-checked:pt-8 peer-checked:max-h-60 flex max-h-0 w-full flex-col items-center overflow-hidden transition-all lg:ml-40 lg:max-h-full lg:flex-row">
            <div class="my-0 flex items-center space-x-6 space-y-2 lg:my-0 lg:ml-auto lg:space-x-3 lg:space-y-0">
                <ul class="flex w-full flex-col items-center space-y-2 lg:flex-row lg:justify-center lg:space-y-0">
                    <form method="POST" action="{{ route('logout') }}" >
                        @csrf
                        <button type="submit" class="w-full flex justify-center items-center px-6 py-2 rounded-lg bg-red-600 hover:bg-red-800 font-medium text-white transition-all duration-200">
                            <ion-icon name="log-out-outline" class="text-xl mr-2"></ion-icon>
                            Logout
                        </button>
                    </form>
            </div>
            </ul>
        </nav>
    </header>
</body>

</html>
