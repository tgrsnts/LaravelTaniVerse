<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembelianController extends Controller
{
    public function index()
    {
        $data = Transaksi::where('user_id', Auth::user()->id);
        return view('account.pembelian.index', compact('data'));
    }
}
