<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()



    {
        $student = Student::all();
        return view('home', ['students' => $student, 'title'=>"All student"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function contact()
    {
        return view('contact');
    }
    public function gallery()
    {
        return view('gallery');
    }
}
