<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\CallLike;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/Dashboard');
    }

    public function login()
    {
        return view('admin/LoginAdmin');
    }

    public function tambahDataProduk()
    {
        return view('admin/products/AddView');
    }

    public function tambahDataPengguna()
    {
        return view('admin/pengguna/AddView');
    }

    public function kelolaProduk()
    {
        $products = DB::select('CALL tampilProduk()');
        return view('admin/products/DataView', compact('products'));
    }

    public function kelolaPengguna()
    {
        $pengguna = Pengguna::all();
        return view('admin/pengguna/DataView', compact('pengguna'));
    }

    public function hapusPengguna($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();
        return redirect()->route('kelolaPengguna')->with('success', 'Data pengguna berhasil dihapus.');
    }
    public function hapusProduk($id)
    {
        $pengguna = Product::findOrFail($id);
        $pengguna->delete();
        return redirect()->route('kelolaProduk')->with('success', 'Data pengguna berhasil dihapus.');
    }

    public function storeProduk(Request $request)
    {
        $validated = $request->validate([
            'nm_brg' => 'required|string|max:255',
            'hrg_brg' => 'required|numeric',
            'stok' => 'required|integer',
            'kategori' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('produk', 'public');
            $validated['gambar'] = $path;
        }

        Product::create($validated);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function editProduk($id)
    {
        $produk = Product::findOrFail($id);
        return view('admin.products.EditView', compact('produk'));
    }

    public function updateProduk(Request $request, $id)
    {
        $produk = Product::findOrFail($id);

        $validated = $request->validate([
            'nm_brg' => 'required|string|max:255',
            'hrg_brg' => 'required|numeric',
            'stok' => 'required|integer',
            'kategori' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('produk', 'public');
            $validated['gambar'] = $path;
        }

        $produk->update($validated);
        return redirect()->route('produk.index')->with('success', 'Produk berhasil diupdate.');
    }

    public function editPengguna($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('admin.pengguna.EditView', compact('pengguna'));
    }

    public function updatePengguna(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:1',
        ]);

        $pengguna = Pengguna::findOrFail($id);

        if (!empty($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        } else {
            unset($validated['password']);
        }

        $pengguna->update($validated);

        return redirect()->route('kelolaPengguna')->with('success', 'Data pengguna berhasil diupdate.');
    }

    public function storePengguna(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:pengguna,username',
            'email' => 'required|email|unique:pengguna,email',
            'password' => 'required|string|min:1',
        ]);

        Pengguna::create([
            'full_name' => $validated['nama_lengkap'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'profile' => null,
        ]);

        return redirect()->route('kelolaPengguna')->with('success', 'Data pengguna berhasil ditambahkan.');
    }
}
