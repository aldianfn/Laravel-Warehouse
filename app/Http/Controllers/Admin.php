<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pengguna;
use App\Models\Barang;
use App\Models\Product;

class Admin extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        // $data = Product::
        return view('admin/home', ['title' => $title]);
    }
    public function getUsers()
    {
        $pengguna = Pengguna::paginate(10);
        return view('admin/users', ['pengguna' => $pengguna]);
    }
    public function getProducts()
    {
        $title = 'Products';
        $products = Product::paginate(2);
        return view('admin/product', ['title' => $title, 'products' => $products]);
    }
    public function detailProduct(Product $product)
    {
        return view('admin/detail_product', ['title' => 'Product', 'product' => $product]);
    }
}
