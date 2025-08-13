<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>
    <h1>Edit Siswa</h1>
    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $siswa->nama }}" required>
        <br>
        <label>Kelas:</label>
        <input type="text" name="kelas" value="{{ $siswa->kelas }}" required>
        <br>
        <label>Nomor HP:</label>
        <input type="text" name="nomor_hp" value="{{ $siswa->nomor_hp }}" required>
        <br>
        <label>Alamat:</label>
        <textarea name="alamat" required>{{ $siswa->alamat }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('siswa.index') }}">Kembali</a>
</body>
</html>
