@extends('template')

@section('judul_halaman', 'Bagian Judul')
@section('konten')
<form action="/form/getData" method="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
    <span>Nama : </span><input type="text" name="nama"><br>
    <span>Username: </span><input type="text" name="username"><br>
    <input type="submit" name="save">
</form>
@endsection