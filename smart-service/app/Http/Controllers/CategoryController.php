<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Category::all();
        // dd($cats);
        return view('backend.category.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $request->validate(
            [
                'cat_name' => 'required|max:10|min:3|unique:categories,name'
            ],
            [
                'required' => 'Category name must be entered',
                'min' => 'mimum 3 charter '
            ]
        );

        //data
        $category = ['name' => $request->cat_name];
        Category::create($category);
        //    return  redirect()->route('category.index');
        return  redirect()->route('category.index')->with('success', 'Catagory Added');
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
      return view('backend.category.edit', compact('category'));
     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
           //validation
        $request->validate(
            [
                'cat_name' => 'required|max:10|min:3|unique:categories,name'
            ],
            [
                'required' => 'Category name must be entered',
                'min' => 'mimum 3 charter '
            ]
        );
        //data

           $data =[
        'name'=> $request->cat_name
      ];
      $category->update($data);
      return redirect()->route('category.index')->with('success',"Successfuly Update");
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect("/category")->with('success', 'Successfully Deleted');
    }
}
