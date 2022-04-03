<?php

namespace App\Http\Controllers;

use App\Models\Pelajaran;
use App\Http\Requests\UpdatePelajaranRequest;
use App\Models\Jenjang;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.pelajaran.index', [
            'pelajarans' => Pelajaran::all()
        ]);
    }

    public function coba()
    {
        return view('app.pelajaran.coba');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.pelajaran.create', [
            'jenjangs' => Jenjang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePelajaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = request()->validate([
            'nama' => 'required|max:255|unique:pelajarans',
            'slug' => 'required|max:255|unique:pelajarans',
            'jenjang_id' => 'required',
            'image' => 'required|image|file|max:2000'
        ]);

        $validatedData['image'] = $request->file('image')->store('pelajaran-images');

        Pelajaran::create($validatedData);

        return redirect('/pelajarans')->with('toast_success', 'Pelajaran baru berhasil di tambahkan! ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pelajaran $pelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelajaran $pelajaran)
    {
        return view('app.pelajaran.edit', [
            'pelajaran' => $pelajaran,
            'jenjangs' => Jenjang::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePelajaranRequest  $request
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelajaran $pelajaran)
    {
        $rules = [
            'image' => 'image|file|max:2000'
        ];

        if ($request->nama != $pelajaran->nama) {
            $rules['name'] = 'required|max:255|unique:pelajarans';
        }

        if ($request->slug != $pelajaran->slug) {
            $rules['slug'] = 'required|max:255|unique:pelajarans';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            Storage::delete($request->oldImage);

            $validatedData['image'] = $request->file('image')->store('pelajaran-images');
        }

        Pelajaran::where('id', $pelajaran->id)
                ->update($validatedData);

        return redirect('/pelajarans')->with('toast_success', 'Pelajaran berhasil di Update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelajaran $pelajaran)
    {
        if ($pelajaran->image) {
            Storage::delete($pelajaran->image);
        }

        Pelajaran::destroy($pelajaran->id);

        return redirect('/pelajarans')->with('info', 'Pelajaran telah berhasil dihapus!');

    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Pelajaran::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
