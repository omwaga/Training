<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      // abort_if(auth()->user()->role == 'admin', 403);
      //   $countries = Country::all();
        $courses = Course::all();
        return view('index', compact('courses'));
    }

    public function profile()
    {
        return view('customers.profile.personal');
    }

    public function professional()
    {
        return view('customers.profile.professional');
    }

    public function career()
    {
        return view('customers.profile.career');
    }

    public function others()
    {
        return view('customers.profile.others');
    }
}
