<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index(){
        // dd(request('search'));

        return view('galleries', [
            "galleries" => Gallery::latest()->get()
        ]);
    }

    public function show (Gallery $gallery){
        return view('gallery', [
            "gallery" => $gallery
        ]);
    }
}
