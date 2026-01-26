<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = JobCategory::all();
        return view('backend.jobcategory.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.jobcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'cat_name' => 'required|min:3|max:50|unique:job_categories,name',
            'description' => 'nullable',
        ], [
            'cat_name.required' => 'Category name must be entered',
            'cat_name.min' => 'Minimum 3 characters required',
        ]);

        // insert
        JobCategory::create([
            'name' => $request->cat_name,
            'description' => $request->description ?? '',
        ]);
        

        return redirect()
            ->route('jobcategory.index')
            ->with('success', 'Category Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobCategory $jobCategory)
    {
        return view('backend.jobcategory.show', compact('jobCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobCategory $jobCategory)
    {
        return view('backend.jobcategory.edit', compact('jobCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobCategory $jobCategory)
    {
        $request->validate([
            'cat_name' => 'required|min:3|max:50|unique:job_categories,name,' . $jobCategory->id,
            'description' => 'nullable',
        ]);

        $jobCategory->update([
            'name' => $request->cat_name,
            'description' => $request->description ?? '',
        ]);

        return redirect()
            ->route('jobcategory.index')
            ->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobCategory $jobCategory)
    {
        $jobCategory->delete();

        return redirect()
            ->route('jobcategory.index')
            ->with('success', 'Category Deleted Successfully');
    }
}
