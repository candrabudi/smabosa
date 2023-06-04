<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\AboutSchool;
use App\Models\ImageSlider;
use App\Models\Event;
use App\Models\ActivitySchool;

class FrontendController extends Controller
{
    public function index()
    {

        $articles = Article::where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->get()
            ->take(6);

        $articles_achievment = Article::where('articles.is_active', 1)
            ->join('article_categories as ac', 'ac.id', '=', 'articles.category_id')
            ->where('ac.name', 'LIKE', '%Prestasi%')
            ->orderBy('articles.created_at', 'DESC')
            ->get()
            ->take(3);
        $articles_activity = Article::where('articles.is_active', 1)
            ->join('article_categories as ac', 'ac.id', '=', 'articles.category_id')
            ->where('ac.name', 'LIKE', '%Kegiatan%')
            ->orderBy('articles.created_at', 'DESC')
            ->get()
            ->take(3);
        $imageSliders = ImageSlider::where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->get()
            ->take(3);

        $events = Event::where('is_active', 1)
            ->orderBy('date_event', 'DESC')
            ->get()
            ->take(2);
        $eventLasts = [];
        if(!$events){
            $eventLasts = Event::where('is_active', 1)
                ->whereDate('date_event', '<', $events['1']['date_event'])
                ->where('id', '!=', $events['1']['id'])
                ->orderBy('date_event', 'DESC')
                ->get()
                ->take(2);
        }

        $about = AboutSchool::first();
        $activitySchool = ActivitySchool::where('is_active', 1)->get();
        return view('index', compact(
            'articles',
            'articles_achievment',
            'articles_activity',
            'imageSliders',
            'events',
            'eventLasts',
            'about',
            'activitySchool'
        ));
    }
}
