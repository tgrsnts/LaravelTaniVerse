<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $data_pupuk = Product::where('kategori', 'Pupuk')->orderBy('id', 'asc')->get();
        $data_benih = Product::where('kategori', 'Benih')->orderBy('id', 'asc')->get();
        $data_sayur = Product::where('kategori', 'Sayur')->orderBy('id', 'asc')->get();
        return view('dashboard', compact('data_pupuk', 'data_benih', 'data_sayur'));
    }

    public function show($id) {
        $data = Product::where('id', $id)->first();
        if (!$data) {
            return redirect()->route('product')->withErrors('Product not found.');
        }

        return view("detail", compact("data"));
    }
}
