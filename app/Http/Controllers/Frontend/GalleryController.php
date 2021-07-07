<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\GalleryDetail;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = GalleryDetail::with('gallery')->latest()->get();
        return view('frontend.gallery.index', compact('images'));
    }
}
