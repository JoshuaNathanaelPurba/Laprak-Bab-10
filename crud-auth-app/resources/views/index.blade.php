<h1>Data Buku</h1>

<a href="/buku/create">Tambah Buku</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
        <th>Aksi</th>
    </tr>

    @foreach($bukus as $buku)
    <tr>
        <td>{{ $buku->judul }}</td>
        <td>{{ $buku->penulis }}</td>
        <td>{{ $buku->tahun }}</td>
        <td>
            <a href="/buku/{{ $buku->id }}/edit">Edit</a>

            <form action="/buku/{{ $buku->id }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>