<?php

namespace App\Http\Controllers;

use App\Models\Komik;
use Illuminate\Http\Request;

class BaseController
{
    protected function validateData(Request $request)
    {
        $validatedData = $request->validate([
            'judul_komik'  => 'required',
            'penulis'      => 'required',
            'penerbit'     => 'required',
            'genre_komik'  => 'required',
            'volume_komik' => 'required',
            'tahun_terbit' => 'required',
            'sinopsis'     => 'required',
            'cover_komik'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('cover_komik')) {
            $cover_komik = $request->file('cover_komik');
            $fileName  = pathinfo($cover_komik->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = pathinfo($cover_komik->getClientOriginalName(), PATHINFO_EXTENSION);
            $cover_komik->move(public_path('src/cover_komik/'), $fileName . time() . '.' . $extension);
            $validatedData['cover_komik'] = 'src/cover_komik/' . $fileName . time() . '.' . $extension;
        }

        return $validatedData;
    }
}

class KomikController extends BaseController
{
    public function index()
    {
        $komik = Komik::all();

        return view('komik.index', compact('komik'));
    }

    public function create()
    {
        return view('komik.create');
    }

    public function store(Request $request)
    {
        $validatedData = $this->validateData($request);

        Komik::create($validatedData);

        return to_route('komik.index')->with('success', 'Data Komik berhasil ditambah');
    }

    public function show(Komik $komik)
    {
        return view('komik.show', compact('komik'));
    }

    public function edit(Komik $komik)
    {
        return view('komik.edit', compact('komik'));
    }

    public function update(Request $request, Komik $komik)
    {
        $validatedData = $this->validateData($request);

        $isDataModified = false;
        $modifiedColumns = [];

        foreach ($validatedData as $key => $value) {
            if ($komik->$key != $value) {
                $isDataModified = true;
                $modifiedColumns[] = $key;
            }
        }

        if ($request->hasFile('cover_komik')) {
            if ($komik->cover_komik) {
                $file_old = public_path('/') . $komik->cover_komik;
                unlink($file_old);

                $isDataModified = true;
                $modifiedColumns[] = 'cover_komik';
            }
        }

        $komik->update($validatedData);

        if ($isDataModified) {
            return to_route('komik.index')->with('success', 'Data Komik berhasil diubah');
        } else {
            return to_route('komik.index')->with('success', 'Tidak ada perubahan data');
        }
    }

    public function destroy(Komik $komik)
    {
        if ($komik->cover_komik) {
            $file_old = public_path('/') . $komik->cover_komik;
            unlink($file_old);
        }
        $komik->delete();

        return redirect()->route('komik.index')->with('success', 'Data Komik berhasil dihapus');
    }
}
