<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>
    <h1>Tambah Siswa</h1>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label>Kelas:</label>
        <input type="text" name="kelas" required>
        <br>
        <label>Nomor HP:</label>
        <input type="text" name="nomor_hp" required>
        <br>
        <label>Alamat:</label>
        <textarea name="alamat" required></textarea>
        <br>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('siswa.index') }}">Kembali</a>
</body>
</html>
