<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Master;
use App\Workshop;

class Site extends Controller
{
    public function home_page()
    {
        return view('site/evenement');
    }

    public function page_ecole()
    {
        return view('site/ecole');
    }

    public function nosClasses()
    {
        return view('site/nosClasse');
    }
}
