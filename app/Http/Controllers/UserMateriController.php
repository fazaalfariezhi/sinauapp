<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Pelajaran;
use App\Models\Jenjang;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.usercourse.index', [
            'materis' => Materi::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.usercourse.create', [
            'pelajarans' => Pelajaran::all(),
            'jenjangs' => Jenjang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = request()->validate([
            'title' => 'required|max:255|min:8',
            'slug' => 'required|max:255|unique:materis',
            'jenjang_id' => 'required',
            'pelajaran_id' => 'required',
            'image' => 'image|file|max:5000',
            'video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100000|required',
            'body' => 'required'
        ]);


        $validatedData['image'] = $request->file('image')->store('materi-thumbnail');
        $validatedData['video'] = $request->file('video')->store('video-materi');

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request -> body) , 100,);

        Materi::create($validatedData);

        return redirect('/home/mycourse')->with('success', 'Selamat! Kamu telah berhasil membuat Materi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        return view('app.layouts.video');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        return view('app.usercourse.edit', [
             'materis' => $materi,
            'pelajarans' => Pelajaran::all(),
            'jenjangs' => Jenjang::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materi $materi)
    {
        $rules = [
            'title' => 'required|max:255|min:8',
            'jenjang_id' => 'required',
            'pelajaran_id' => 'required',
            'image' => 'image|file|max:5000',
            'video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100000|required',
            'body' => 'required'
        ];

        if ($request->slug != $materi->slug) {
            $rules['slug'] = 'required|max:255|unique:materis';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            Storage::delete($request->oldImage);

            $validatedData['image'] = $request->file('image')->store('thumbnail-materi');
        }

        Materi::where('id', $materi->id)
                ->update($validatedData);

        return redirect('/home/mycourse')->with('toast_success', 'Materi berhasil di Update!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi, $slug)
    {
        Materi::where('slug', $slug)->delete();

        return redirect('/home/mycourse')->with('info', 'Materi telah berhasil dihapus!');
    }
}
