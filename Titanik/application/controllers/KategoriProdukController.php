<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Illuminate\Support\Facades\Session;

class KategoriProdukController extends Controller
{
   public function index($id, Request $request)
   {
		$request->session()->put('kategori',$id);
		return view('produk.produkKategori');
   }
}
