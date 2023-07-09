<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::get();
        return view('Admin.Category.cat_index', compact('categories'));
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
        $request->validate([
            'title' => 'required|unique:categories'
        ]);
        $category = new Category();
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        $category->save();
        if ($category) {
            Alert::alert('Successfully', 'Data Has Been Created', 'success');
            return to_route('category.index');
        } else {
            Alert::alert('Errors', 'Data Failed', 'error');
            return to_route('category.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $categories = Category::get();
        return view('Admin.Category.cat_index', compact('categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => 'required|unique:categories,title,' . $category->id
        ]);
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        $category->save();
        if ($category) {
            Alert::alert('Successfully', 'Data Has Been Updated', 'success');
            return to_route('category.index');
        } else {
            Alert::alert('Errors', 'Data Failed', 'error');
            return to_route('category.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        if ($category) {
            Alert::alert('Successfully', 'Data Has Been Deleted', 'success');
            return to_route('category.index');
        } else {
            Alert::alert('Errors', 'Data Failed', 'error');
            return to_route('category.index');
        }
    }
}