<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Buku</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; display: flex; justify-content: center; padding: 40px; }
        .card { background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 400px; }
        h1 { margin-bottom: 20px; font-size: 24px; color: #333; }
        input { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; background: #007bff; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background: #0056b3; }
        .back-link { display: block; margin-top: 15px; text-align: center; color: #666; text-decoration: none; }
    </style>
</head>
<body>
    <div class="card">
        <h1>{{ isset($buku) ? 'Edit Buku' : 'Tambah Buku' }}</h1>
        <form action="{{ isset($buku) ? '/buku/'.$buku->id : '/buku' }}" method="POST">
            @csrf
            @if(isset($buku)) @method('PUT') @endif

            <input type="text" name="judul" placeholder="Judul" value="{{ $buku->judul ?? '' }}" required>
            <input type="text" name="penulis" placeholder="Penulis" value="{{ $buku->penulis ?? '' }}" required>
            <input type="number" name="tahun" placeholder="Tahun" value="{{ $buku->tahun ?? '' }}" required>

            <button type="submit">{{ isset($buku) ? 'Update Data' : 'Simpan Data' }}</button>
        </form>
        <a href="/buku" class="back-link">← Kembali</a>
    </div>
</body>
</html>