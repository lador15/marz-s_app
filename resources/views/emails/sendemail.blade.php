<!DOCTYPE html>
<html>
<head>
    <title>Kirim Pesan</title>
</head>
<body>
    <h1>Pesan Baru, {{ $siswa->nama }}! </h1>
    <p>Ini adalah pesan informasi bahwa anda telah terdaftar di Marz's App</p>
    <p>Waktu Pengiriman: {{ now() }}</p>
</body>
</html>