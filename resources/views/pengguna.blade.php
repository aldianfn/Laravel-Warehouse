<!-- Tutorial blade -->
@extends('template')

@section('judul_halaman', 'Ini bagian judul halaman')

@section('konten')
<h2>View pengguna</h2>
@foreach($data as $d)
<li>{{ $d->id }}</li>
<li>{{ $d->name }}</li>
@endforeach
@endsection