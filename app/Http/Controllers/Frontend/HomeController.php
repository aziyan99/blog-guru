<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Article;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latest_articles = Article::with('writer')->latest()->limit(2)->get();
        $latest_announcements = Announcement::latest()->limit(4)->get();
        $setting = Setting::first();
        return view('frontend.home', compact('latest_articles', 'latest_announcements', 'setting'));
    }
}
