<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::paginate(10);
        return view('Admin.Produk.pro_index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('Admin.Produk.pro_create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required',
            'cover'     => 'required',
            'links'     => 'required',
            'mk'        => 'required',
            'md'        => 'required',
            'desc'      => 'required',
            'price'     => 'required',
            'discount'  => 'required',
        ]);
        $linksName = $request->file('links')->getClientOriginalName() . '-' . Str::random(5);

        $produk             = new Produk();
        $produk->title      = $request->title;
        $produk->slug       = Str::slug($request->title);
        $produk->cover      = $request->file('cover')->store('produk');
        $produk->links      = $request->file('links')->storeAs('files', $linksName);
        $produk->md         = $request->md;
        $produk->mk         = $request->mk;
        $produk->desc       = $request->desc;
        $produk->price      = Str::replace('.', '', $request->price);
        $produk->discount   = $request->discount;
        $produk->user_id    = Auth::id();
        $produk->save();

        if ($request->has('categories')) {
            $produk->categories()->attach($request->categories);
        }

        if ($produk) {
            Alert::alert('Successfully', 'Data Has Been Created', 'success');
            return to_route('produk.index');
        } else {
            Alert::alert('Errors', 'Data Failed', 'error');
            return to_route('produk.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        $categories = Category::all();
        return view('Admin.Produk.pro_edit', compact('categories', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'title'     => 'required|unique:produks,title,' . $produk->id,
            'mk'        => 'required',
            'md'        => 'required',
            'desc'      => 'required',
            'price'     => 'required',
            'discount'  => 'required',
        ]);


        if ($request->hasFile('cover')) {
            Storage::delete($produk->cover);
            $produkIMG = $request->file('cover')->store('produk');
        } else {
            $produkIMG = $produk->cover;
        }

        if ($request->hasFile('links')) {
            Storage::delete($produk->links);
            $linksName  = $request->file('links')->getClientOriginalName() . '-' . Str::random(5);
            $filesPro   = $request->file('links')->storeAs('files', $linksName);
        } else {
            $filesPro   = $produk->links;
        }

        $produk->title      = $request->title;
        $produk->slug       = Str::slug($request->title);
        $produk->cover      = $produkIMG;
        $produk->links      = $filesPro;
        $produk->md         = $request->md;
        $produk->mk         = $request->mk;
        $produk->desc       = $request->desc;
        $produk->price      = Str::replace('.', '', $request->price);
        $produk->discount   = $request->discount;
        $produk->user_id    = Auth::id();
        $produk->save();

        if ($request->has('categories')) {
            $produk->categories()->sync($request->categories);
        }

        if ($produk) {
            Alert::alert('Successfully', 'Data Has Been Updated', 'success');
            return to_route('produk.index');
        } else {
            Alert::alert('Errors', 'Data Failed', 'error');
            return to_route('produk.create');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        Storage::delete([$produk->cover, $produk->links]);
        $produk->delete();
        if ($produk) {
            Alert::alert('Successfully', 'Data Has Been Deleted', 'success');
            return to_route('produk.index');
        } else {
            Alert::alert('Errors', 'Data Failed', 'error');
            return to_route('produk.create');
        }
    }

    public function cs(Request $request)
    {
        $produk = Produk::find($request->produk_id);
        $produk->status = $request->status;
        $produk->save();
        return response()->json(['success' => 'Status change successfully.']);
    }
}