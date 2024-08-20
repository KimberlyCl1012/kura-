<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;


class DashboardController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Dashboard');

    }

    public function settings()
    {
        return Inertia::render('Settings');

    }

    
}
