<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDaftarRequest;
use App\Http\Requests\UpdateDaftarRequest;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('daftar', [
            'prodies' => Prodi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required',
            'email' => 'required|email:dns',
            'nohp' => 'required',
            'prodi_id' => 'required',
            'motiv' => 'required',
            'perguruan' => 'required'
        ]);

        $number = $request->input('nohp');

            if (!is_numeric($number)) {
                return back()->with('toast_error', 'Input yang anda masukan bukan nomor hp')->withInput();
        }
        // if ($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('profile-images');
        // }

        // $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Daftar::create($validatedData);

        return redirect('/')->with('toast_success', 'Pendaftaran Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Daftar $daftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daftar $daftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDaftarRequest $request, Daftar $daftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daftar $daftar)
    {
        //
    }
}
