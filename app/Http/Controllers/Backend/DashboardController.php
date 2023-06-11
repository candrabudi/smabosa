<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $menu_active = 1;
        return view('backend.index', compact(
            'menu_active'
        ));
    }
}
