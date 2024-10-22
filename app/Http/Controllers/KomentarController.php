<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function index()
    {
        $komentars = Komentar::latest()->get();
        return view('index', compact('komentars'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|max:255',
            'komentar' => 'required',
        ]);

        // Simpan data komentar
        Komentar::create($request->only('nama', 'komentar')); // Hanya ambil field yang valid

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Komentar berhasil dikirim!');
    }

}
