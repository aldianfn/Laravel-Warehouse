<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pengguna extends Controller
{
    public function index()
    {
        $title = 'Pengguna';
        $data = DB::table('cancer')->get();
        // $data = 'a';
        // dd($data);
        return view('pengguna', ['title' => $title, 'data' => $data]);
    }

    public function getPengguna($nama)
    {
        return $nama;
    }

    public function form()
    {
        $title = 'Form';
        return view('form', ['title' => $title]);
    }

    public function getData(Request $request)
    {
        $nama = $request->input('nama');
        $username = $request->input('username');

        return "Nama: " . $nama . "<br>Username: " . $username;
    }
}
