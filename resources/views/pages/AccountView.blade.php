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
    <div class="min-h-screen flex items-center justify-center p-4">

        <div class="w-full max-w-md bg-[#EFE4D2] rounded-2xl shadow-xl p-8 mt-8">
            <div class="text-center mb-8">
                <div class="relative inline-block">
                    <img id="profilePhoto" src="{{ $user->profile ? asset('storage/' . $user->profile) : 'https://via.placeholder.com/150' }}" class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-md">
                </div>
                <h4 id="fullName" class="text-gray-800"><a href="#">Edit Foto Profile</a></h4>
            </div>

            <form id="profileForm" class="space-y-4 mt-4">
                @csrf
                <div>
                    <label for="fullName" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <div class="mt-1 relative">
                        <input id="fullName" type="text" value="{{ $user->full_name }}" class="w-full px-4 py-2 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-300" disabled>

                    </div>
                </div>

                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <div class="mt-1 relative">
                        <input id="username" type="text" value="{{ $user->username }}" class="w-full px-4 py-2 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-300" disabled>

                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <div class="mt-1 relative">
                        <input id="email" type="email" value="{{ $user->email }}" class="w-full px-4 py-2 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-300" disabled>

                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="mt-1 relative">
                        <input id="password" type="password" value="********" class="w-full px-4 py-2 border bg-[#f8eede] border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4A4843] focus:border-transparent transition duration-300" disabled>

                    </div>
                </div>

                <div class="flex justify-end mt-8">
                    <button type="submit" id="editBtn" class="bg-[#4A4843] hover:bg-[#2F2E2B] w-full text-white px-6 py-2 rounded-lg transition">Edit Profile</button>
                </div>
            </form>
            <form method="POST" action="{{ route('logout') }}" class="mt-4">
                @csrf
                <button type="submit" class="w-full flex justify-center items-center px-6 py-2 rounded-lg bg-red-600 hover:bg-red-800 font-medium text-white transition-all duration-200">
                    <ion-icon name="log-out-outline" class="text-xl mr-2"></ion-icon>
                    Logout
                </button>
            </form>
        </div>
    </div>
</body>
</html>