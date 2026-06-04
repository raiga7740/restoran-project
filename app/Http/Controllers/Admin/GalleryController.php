<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();

        return view('admin.galeri.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image'
        ]);

        $gambar = $request->file('gambar')->store('gallery', 'public');

        Gallery::create([
            'judul' => $request->judul,
            'gambar' => $gambar
        ]);

        return redirect()->route('admin.galeri.index');
    }

    public function edit(Gallery $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Gallery $galeri)
    {
        $request->validate([
            'judul' => 'required'
        ]);

        if ($request->hasFile('gambar')) {

            Storage::disk('public')->delete($galeri->gambar);

            $galeri->gambar = $request->file('gambar')
                ->store('gallery', 'public');
        }

        $galeri->judul = $request->judul;
        $galeri->save();

        return redirect()->route('admin.galeri.index');
    }

    public function destroy(Gallery $galeri)
    {
        Storage::disk('public')->delete($galeri->gambar);

        $galeri->delete();

        return back();
    }
}