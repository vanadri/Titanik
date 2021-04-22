<?php

namespace App\Http\Controllers;
use App\Produk;
use App\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $produks = Produk::paginate(6);
        return view('home.home', compact('produks'));
    }
    public function kategori()
    {   
        $kategoris = Kategori::all();
        return view('layout.layout', compact('kategoris'));
    }
	
	public function show(Produk $produks)
	{
		return view('produk.produkDetail', compact('produks'));
	}
}
