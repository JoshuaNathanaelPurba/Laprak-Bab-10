<h1>Edit Buku</h1>

<form action="/buku/{{ $buku->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="judul" value="{{ $buku->judul }}"><br><br>

    <input type="text" name="penulis" value="{{ $buku->penulis }}"><br><br>

    <input type="number" name="tahun" value="{{ $buku->tahun }}"><br><br>

    <button type="submit">Update</button>
</form>