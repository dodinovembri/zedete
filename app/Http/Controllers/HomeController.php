<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;
use App\Models\Products;
use App\Models\Home;
use App\Models\HomeSlides;
use App\Models\Testimonial;
use App\Models\ContactUs;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['teams'] = Teams::all();
        $data['products'] = Products::where('active', 1)->get();
        $data['home_slides'] = HomeSlides::all();
        $data['home'] = Home::first();
        $data['testimoni'] = Testimonial::all();
        $data['contact_us'] = ContactUs::first();
        
        return view('home', $data);
    }

    public function product($id)
    {
        return view('frontend.product');
    }
}
