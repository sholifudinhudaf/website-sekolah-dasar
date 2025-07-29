<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    // ===================== USER ========================= //

    // Tampilkan semua pengumuman untuk user
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'latest');

        $query = Pengumuman::query();

        if ($sort === 'oldest') {
            $query->orderBy('created_at', 'asc');
        } else {
            $query->orderBy('created_at', 'desc');
        }

        $pengumumen = $query->paginate(6);

        return view('pages.user.pengumuman', compact('pengumumen'));
    }


    // Tampilkan detail pengumuman
    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumumanTerbaru = Pengumuman::latest()->limit(5)->get();

        return view('pages.admin.pengumuman.show-pengumuman', compact('pengumuman', 'pengumumanTerbaru'));
    }

    // ===================== ADMIN ========================= //

    // List semua pengumuman untuk admin
    public function adminIndex()
    {
        $pengumuman = Pengumuman::latest()->paginate(10);
        return view('pages.admin.pengumuman.index', compact('pengumuman'));
    }

    // Form tambah pengumuman
    public function create()
    {
        return view('pages.admin.pengumuman.create');
    }

    // Simpan pengumuman baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        Pengumuman::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('pengumuman.page')->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    // Form edit pengumuman
    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('pages/admin/pengumuman/edit-pengumuman', compact('pengumuman'));
    }

    // Simpan update pengumuman
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('pengumuman.page')->with('success', 'Pengumuman berhasil diupdate.');
    }

    // Hapus pengumuman
    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->delete();

        return redirect()->route('pengumuman.page')->with('success', 'Pengumuman berhasil dihapus.');
    }

    // Detail pengumuman untuk user// Tampilkan detail pengumuman untuk USER
    public function showUser($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumumanTerbaru = Pengumuman::latest()->limit(5)->get();

        return view('pages.user.show-pengumuman', compact('pengumuman', 'pengumumanTerbaru'));
    }


}
