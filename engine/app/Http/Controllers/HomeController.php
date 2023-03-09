<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Webinar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $d['testimonial'] = Testimonial::all();
        return view('home', $d);
    }

    public function getData(Request $request)
    {
        $webinar = Webinar::where('status', 1);

        if($request->status) {
            $webinar = $webinar->where('category', $request->status);
        }

        if($request->search) {
            $search = $request->search;
            $webinar = $webinar->where('title', 'LIKE', '%'. $search .'%');
        }

        $webinar = $webinar->get();

        return view('data_webinar', compact('webinar'))->render();
    }
}
