<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Inertia\Inertia;

class PageController extends Controller
{
    public function welcome()
    {
        return Inertia::render('Welcome');
    }
}
