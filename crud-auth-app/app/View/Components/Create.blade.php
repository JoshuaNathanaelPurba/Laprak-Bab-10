<h1>Tambah Buku</h1>

<form action="/buku" method="POST">
    @csrf

    <input type="text" name="judul" placeholder="Judul"><br><br>

    <input type="text" name="penulis" placeholder="Penulis"><br><br>

    <input type="number" name="tahun" placeholder="Tahun"><br><br>

    <button type="submit">Simpan</button>
</form>