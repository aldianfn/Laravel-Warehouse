<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
</head>

<body>
    <header>
        <h2>Ini navbar</h2>
        <a href="/pengguna">Home</a>
        <a href="/form">Form</a>
    </header>
    <br><br><br>

    <h1>@yield('judul_halaman')</h1>
    @yield('konten')
    <br><br>
    <hr>
    <footer>
        <p>&copy; Saya. 2022</a></p>
    </footer>
</body>

</html>