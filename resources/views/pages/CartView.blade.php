<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Keranjang Belanja</title>
</head>

<body class="min-h-screen bg-[#B6B09F]">
    <x-nav-bar />
    <div class="flex flex-col justify-center items-center min-h-screen text-center px-4">
        <div class="max-w-4xl mx-auto p-6 bg-[#EFE4D2] rounded-lg shadow-md px-4">
            <h1 class="text-2xl font-bold mb-6">Keranjang Belanja Anda</h1>
            @if(empty($cart))
            <p class="text-gray-600">Keranjang belanja Anda kosong.</p>
            @else
            <table class="w-full border-collapse">
                <thead>
                    <tr class="border-b border-gray-300">
                        <th class="text-left py-2 px-4">Produk</th>
                        <th class="text-left py-2 px-4">Jumlah</th>
                        <th class="text-left py-2 px-4">Harga Satuan</th>
                        <th class="text-left py-2 px-4">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach ($cart as $item)
                    @php
                    $product = $item['product'];
                    $qty = $item['qty'];
                    $subtotal = $product->hrg_brg * $qty;
                    $total += $subtotal;
                    $id = $product->id;
                    @endphp
                    <tr class="border-b border-gray-200">
                        <td class="py-2 px-4">{{ $product->nm_brg }}</td>
                        <td class="py-2 px-4 flex items-center space-x-2">
                            <form action="{{ route('cart.update', ['id' => $id]) }}" method="POST" class="flex">
                                @csrf
                                <input type="hidden" name="action" value="decrease">
                                <button type="submit" class="bg-gray-300 text-black px-2 rounded">−</button>
                            </form>
                            <span>{{ $qty }}</span>
                            <form action="{{ route('cart.update', ['id' => $id]) }}" method="POST" class="flex">
                                @csrf
                                <input type="hidden" name="action" value="increase">
                                <button type="submit" class="bg-gray-300 text-black px-2 rounded">+</button>
                            </form>
                        </td>
                        <td class="py-2 px-4">Rp {{ number_format($product->hrg_brg, 0, ',', '.') }}</td>
                        <td class="py-2 px-4">Rp {{ number_format($subtotal, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-left font-bold py-2 px-4">Total:</td>
                        <td class="font-bold py-2 px-4 text-left" colspan="2">Rp {{ number_format($total, 0, ',', '.') }}</td>
                    </tr>
                </tbody>
            </table>
            <form action="{{ route('cart.pesan') }}" method="POST" target="_blank">
                @csrf
                <button type="submit" class="w-full bg-[#4A4843] hover:bg-[#2F2E2B] text-white py-2 rounded-lg transition duration-300 mt-3">
                    Pesan
                </button>
            </form>

            <form action="{{ route('cart.clear') }}" method="POST">
                @csrf
                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg transition duration-300 mt-2">
                    Kosongkan Keranjang
                </button>
            </form>
            @endif
        </div>
    </div>
</body>

</html>