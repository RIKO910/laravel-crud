<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories =Category::get(['id','name','created_at']);
        return view('Component.Category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Component.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {

        // dd($request->all());

        Category::create([
            'name' => $request->category_name,
            'slug' => Str::slug($request->category_name),
            'is_active' => $request->filled('is_active'),
        ]);

        Session::flash('Status','Category created Successfully!');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        return view('Component.Category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //dd($id);
        $categories =Category::get(['id','name']);
        $category =Category::find($id);
        return view('Component.Category.edit',compact('categories','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( CategoryUpdateRequest $request, string $id)
    {
        // dd($request->all());
        $category=Category::find($id);
        $category->update([
            'name' => $request->category_name,
            'slug' => Str::slug($request->category_name),
            'is_active' => $request->filled('is_active'),
        ]);

        Session::flash('Status','Category updated Successfully!');
        return redirect()->route('category.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{

        Category::find($id)->delete();
        Session::flash('status','Category delete sussessfully!');
        return redirect()->route('category.index');
        }
}
