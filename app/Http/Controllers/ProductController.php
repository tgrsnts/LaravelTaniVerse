<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::orderBy('id', 'asc')->get();
        return view("admin.product.index", compact("data"));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required|max:45',
                'kategori' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required',
                'stok' => 'required',
                'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ],
            [
                'nama.required' => 'Nama Barang wajib diisi',
                'nama.max' => 'Nama Barang maksimal 45 karakter',
                'kategori.required' => 'Katgeori Barang wajib diisi',
                'deskripsi.required' => 'Deskripsi Barang wajib diisi',
                'harga.required' => 'Harga Barang wajib diisi',
                'stok.required' => 'Stok wajib diisi',
                'foto.max' => 'File maksimal 2 MB',
                'foto.mimes' => 'File ekstensi hanya bisa jpg, png, jpeg, gif, svg',
                'foto.image' => 'File harus berbentuk image'
            ]
        );

        if (!empty($request->foto)) {
            $fileName = 'foto-' . uniqid() . '.' . $request->foto->extension();
            $request->foto->move(public_path('assets/image'), $fileName);
        } else {
            $fileName = 'no_img.jpg';
        }

        Product::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'foto' => $fileName,
        ]);

        return redirect()->route('product');
    }

    public function edit(String $id)
    {
        $query = Product::where('id', $id)->first();
        if (!$query) {
            return redirect()->route('product')->withErrors('Product not found.');
        }

        return view("admin.product", compact("query"));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama' => 'required|max:45',
                'kategori' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required|numeric',
                'stok' => 'required|integer',
                'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ],
            [
                'nama.required' => 'Nama Barang wajib diisi',
                'nama.max' => 'Nama Barang maksimal 45 karakter',
                'kategori.required' => 'Kategori Barang wajib diisi',
                'deskripsi.required' => 'Deskripsi Barang wajib diisi',
                'harga.required' => 'Harga Barang wajib diisi',
                'stok.required' => 'Stok wajib diisi',
                'foto.max' => 'File maksimal 2 MB',
                'foto.mimes' => 'File ekstensi hanya bisa jpg, png, jpeg, gif, svg',
                'foto.image' => 'File harus berbentuk image'
            ]
        );

        // Ambil produk berdasarkan ID
        $product = Product::findOrFail($id);
        $oldFoto = $product->foto;
        if ($request->hasFile('foto')) {
            if ($oldFoto) {
                unlink(public_path('assets/image/' . $oldFoto));
            }

            // Simpan foto baru
            $fileName = 'foto-' . $id . '.' . $request->foto->extension();
            $request->foto->move(public_path('assets/image'), $fileName);
        } else {
            // Jika tidak ada foto baru, gunakan foto lama
            $fileName = $oldFoto;
        }

        // Update produk dengan data baru
        $product->update([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'foto' => $fileName,
        ]);

        return redirect()->route('product');
    }


    public function destroy(string $id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('product'); // Pastikan ini mengarah ke rute yang benar
    }
}
