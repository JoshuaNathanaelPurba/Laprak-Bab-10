<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku - Perpustakaan</title>
    <style>
        /* CSS Modern dengan Gradasi */
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
            height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            margin: 0; 
        }
        .card { 
            background: #fff; 
            padding: 40px; 
            border-radius: 15px; 
            box-shadow: 0 10px 25px rgba(0,0,0,0.2); 
            width: 100%; 
            max-width: 400px; 
        }
        h2 { 
            text-align: center; 
            color: #333; 
            margin-bottom: 30px; 
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #666;
        }
        input { 
            width: 100%; 
            padding: 12px; 
            margin-bottom: 20px; 
            border: 1px solid #ddd; 
            border-radius: 8px; 
            box-sizing: border-box; 
            font-size: 14px;
        }
        button { 
            width: 100%; 
            padding: 12px; 
            background: #667eea; 
            color: white; 
            border: none; 
            border-radius: 8px; 
            cursor: pointer; 
            font-size: 16px; 
            font-weight: bold; 
            transition: 0.3s; 
        }
        button:hover { 
            background: #5a67d8; 
        }
        .back-link { 
            display: block; 
            text-align: center; 
            margin-top: 20px; 
            font-size: 14px; 
            color: #666; 
            text-decoration: none; 
        }
        .back-link:hover { 
            color: #333; 
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Edit Buku</h2>

        <form action="/buku/{{ $buku->id }}" method="POST">
            @csrf
            @method('PUT')

            <label for="judul">Judul Buku</label>
            <input type="text" name="judul" id="judul" value="{{ $buku->judul }}" required>

            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" id="penulis" value="{{ $buku->penulis }}" required>

            <label for="tahun">Tahun Terbit</label>
            <input type="number" name="tahun" id="tahun" value="{{ $buku->tahun }}" required>

            <button type="submit">UPDATE DATA</button>
        </form>

        <a href="/buku" class="back-link">← Kembali ke Daftar Buku</a>
    </div>
</body>
</html>