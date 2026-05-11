<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('Index', compact('bukus')); 
    }

    public function create()
    {
        return view('Create');
    }

    public function store(Request $request)
    {
        Buku::create($request->all());
        return redirect('/buku');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('Edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->update($request->all());
        return redirect('/buku');
    }

    public function destroy($id)
    {
        Buku::destroy($id);
        return redirect('/buku');
    }
}