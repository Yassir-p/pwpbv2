<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = DB::select('CALL tampilProduk()');
        $categories = collect($products)->pluck('kategori')->unique()->values()->all();

        if ($request->filled('search')) {
            $search = strtolower($request->search);
            $products = array_filter($products, function ($item) use ($search) {
                return str_contains(strtolower($item->nm_brg), $search);
            });
        }

        if ($request->filled('kategori') && $request->kategori != 'Semua') {
            $kategori = $request->kategori;
            $products = array_filter($products, function ($item) use ($kategori) {
                return $item->kategori === $kategori;
            });
        }

        $products = collect($products);
        return view('pages.ProductView', compact('products', 'categories', 'request'));
    }
}
