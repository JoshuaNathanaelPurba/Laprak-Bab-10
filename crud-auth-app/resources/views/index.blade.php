<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku Perpustakaan</title>
    <style>
        /* Desain Seragam (Unified Design) */
        body { 
            font-family: 'Segoe UI', sans-serif; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
            min-height: 100vh; 
            padding: 40px; 
            margin: 0; 
            display: flex;
            justify-content: center;
        }
        .container { 
            background: #fff; 
            padding: 30px; 
            border-radius: 15px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.2); 
            width: 100%;
            max-width: 900px;
        }
        .header { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            margin-bottom: 25px; 
            border-bottom: 2px solid #f4f7f6;
            padding-bottom: 15px;
        }
        h1 { color: #333; margin: 0; font-size: 24px; }
        
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid #eee; }
        th { background: #667eea; color: white; text-transform: uppercase; font-size: 13px; }
        
        /* Gaya Tombol */
        .btn { padding: 8px 16px; border-radius: 6px; text-decoration: none; font-weight: bold; cursor: pointer; border: none; font-size: 13px; transition: 0.3s; display: inline-block; }
        .btn-auth { background: #667eea; color: white; }
        .btn-auth:hover { background: #5a67d8; }
        .btn-logout { background: #e3342f; color: white; }
        .btn-add { background: #48bb78; color: white; margin-bottom: 20px; }
        .btn-edit { background: #ecc94b; color: #744210; margin-right: 5px; }
        .btn-delete { background: #f56565; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Manajemen Buku</h1>
            
            @guest
                <a href="/login" class="btn btn-auth">LOGIN</a>
            @else
                <form action="/logout" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-logout">KELUAR </button>
                </form>
            @endguest
        </div>

        @auth
            <a href="/buku/create" class="btn btn-add">+ Tambah Buku</a>
        @endauth

        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    @auth <th>Aksi</th> @endauth
                </tr>
            </thead>
            <tbody>
                @forelse($bukus as $buku)
                <tr>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ $buku->tahun }}</td>
                    @auth
                    <td>
                        <a href="/buku/{{ $buku->id }}/edit" class="btn btn-edit">Edit</a>
                        <form action="/buku/{{ $buku->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                    @endauth
                </tr>
                @empty
                <tr>
                    <td colspan="{{ Auth::check() ? 4 : 3 }}" style="text-align: center; padding: 30px; color: #999;">
                        Tidak ada data buku saat ini.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>