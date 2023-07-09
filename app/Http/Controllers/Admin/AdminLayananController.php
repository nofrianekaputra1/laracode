<?php

namespace App\Http\Controllers\Admin;

use App\Models\Layanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanan::get();
        return view('Admin.Layanan.lay_index', compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Layanan.lay_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|unique:layanans',
            'konten'    => 'required',
            'mk'        => 'required',
            'md'        => 'required',
            'cover'     => 'required',
        ]);

        $layanan = new Layanan();
        $layanan->cover     = $request->file('cover')->store('cover');
        $layanan->title     = $request->title;
        $layanan->slug      = Str::slug($request->title);
        $layanan->mk        = $request->mk;
        $layanan->md        = $request->md;
        $layanan->konten    = $request->konten;
        $layanan->save();

        if ($layanan) {
            Alert::alert('Successfully', 'Data Has Been Created', 'success');
            return to_route('layanan.index');
        } else {
            Alert::alert('Errors', 'Data Failed', 'error');
            return to_route('layanan.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layanan $layanan)
    {
        return view('Admin.Layanan.lay_edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'title'     => 'required|unique:layanans,title,' . $layanan->id,
            'konten'    => 'required',
            'mk'        => 'required',
            'md'        => 'required',
        ]);

        if ($request->hasFile('cover')) {
            Storage::delete($layanan->cover);
            $cover = $request->file('cover')->store('cover');
        } else {
            $cover = $layanan->cover;
        }

        $layanan->cover     = $cover;
        $layanan->title     = $request->title;
        $layanan->slug      = Str::slug($request->title);
        $layanan->mk        = $request->mk;
        $layanan->md        = $request->md;
        $layanan->konten    = $request->konten;
        $layanan->save();

        if ($layanan) {
            Alert::alert('Successfully', 'Data Has Been Updated', 'success');
            return to_route('layanan.index');
        } else {
            Alert::alert('Errors', 'Data Failed', 'error');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layanan $layanan)
    {
        Storage::delete($layanan->cover);
        $layanan->delete();
        if ($layanan) {
            Alert::alert('Successfully', 'Data Has Been Delete!', 'success');
            return to_route('layanan.index');
        } else {
            Alert::alert('Errors', 'Data Failed', 'error');
            return back();
        }
    }
}
