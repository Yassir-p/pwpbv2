<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                
                'success' => false,
                'message' => 'Silakan login terlebih dahulu untuk menambahkan produk ke keranjang.'
            ], 401);
        }

        $data = $request->json()->all();

        if (!isset($data['id']) || !isset($data['qty'])) {
            return response()->json(['success' => false, 'message' => 'Data kurang'], 400);
        }

        try {
            $product = Product::findOrFail($data['id']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Produk tidak ditemukan'], 404);
        }

        $qty = max(1, (int)$data['qty']);
        $cart = session('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['qty'] += $qty;
        } else {
            $cart[$product->id] = [
                'qty' => $qty,
                'product' => $product
            ];
        }

        session(['cart' => $cart]);

        return response()->json([
            'success' => true,
            'cartCount' => array_sum(array_column($cart, 'qty')),
        ]);
    }

    public function count()
    {
        $cart = session('cart', []);
        return response()->json([
            'total' => array_sum(array_column($cart, 'qty'))
        ]);
    }

    public function showCart()
    {
        $cart = session('cart', []);
        return view('pages/CartView', compact('cart'));
    }

    public function pesan(Request $request)
    {
        $cart = session('cart');

        if (!$cart || count($cart) == 0) {
            return redirect()->back()->with('error', 'Keranjang belanja kosong.');
        }

        $message = "Pesanan saya:\n\n";
        $total = 0;

        foreach ($cart as $item) {
            $product = $item['product'];
            $qty = $item['qty'];
            $harga = $product->hrg_brg;
            $subtotal = $qty * $harga;
            $total += $subtotal;

            $message .= "{$product->nm_brg} \t {$qty} \t Rp " . number_format($harga, 0, ',', '.') .
                " \t Rp " . number_format($subtotal, 0, ',', '.') . "\n";
        }

        $message .= "\nTotal: Rp " . number_format($total, 0, ',', '.');

        $whatsappNumber = '6285213449736';
        $url = 'https://wa.me/' . $whatsappNumber . '?text=' . urlencode($message);

        session()->forget('cart');

        return redirect()->away($url);
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'Keranjang telah dikosongkan');
    }

    public function update(Request $request, $id)
    {
        $action = $request->input('action');
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            if ($action === 'increase') {
                $cart[$id]['qty'] += 1;
            } elseif ($action === 'decrease') {
                $cart[$id]['qty'] -= 1;

                if ($cart[$id]['qty'] <= 0) {
                    unset($cart[$id]);
                }
            }

            session()->put('cart', $cart);
        }

        return redirect()->back();
    }
}
