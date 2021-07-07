<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\AnnouncementCategory;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index(Request $request)
    {
        $isByCategory = false;
        if ($request->get('cari')) {
            $cari = urlencode($request->get('cari'));
            $announcements = Announcement::with('category')->where('title', 'LIKE', '%' . $cari . '%')
                ->orWhere('body', 'LIKE', '%' . $cari . '%')->get();
            return view('frontend.announcement.index', compact('announcements', 'isByCategory'));
        } else {
            $announcements = Announcement::with('category')->latest()->get();
            return view('frontend.announcement.index', compact('announcements', 'isByCategory'));
        }
    }

    public function show($slug)
    {
        $announcement = Announcement::where('slug', $slug)->first();
        if (!$announcement) {
            abort(404);
        } else {
            return view('frontend.announcement.show', compact('announcement'));
        }
    }

    public function showByCategory($id)
    {
        $isByCategory = true;
        $announcements = AnnouncementCategory::with('announcements')->where('id', $id)->firstOrFail();
        return view('frontend.announcement.index', compact('announcements', 'isByCategory'));
    }
}
