<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }

    public function ceo_message()
    {
        return view('about.ceo_message');
    }

    public function statement()
    {
        return view('about.statement');
    }

    public function why()
    {
        return view('about.why');
    }

    public function team()
    {
        $teams = Team::all();
        return view('about.team', compact('teams'));
    }

    public function school()
    {
        return view('about.school');
    }
    
    public function technical()
    {
        return view('about.technical');
    }
    
    public function overall()
    {
        return view('about.overall');
    }
}
