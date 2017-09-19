<?php

namespace App\Http\Controllers;

use App\UploadService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function profileUpdate(Request $request, UploadService $service)
    {
        $fileName = $service->store($request->file('image'));

        $request->user()->images()->save(
            new \App\Image([
                'path' => $fileName
            ])
        );

        return back();
    }
}
