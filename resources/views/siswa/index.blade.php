<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <a href="{{ route('siswa.create') }}">Tambah Siswa</a>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Nomor HP</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach($siswas as $siswa)
        <tr>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->kelas }}</td>
            <td>{{ $siswa->nomor_hp }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td>
                <a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
                <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
