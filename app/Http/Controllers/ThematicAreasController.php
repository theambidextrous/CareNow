<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThematicAreasController extends Controller
{
    public function health()
    {
        return view('web.causes.health');
    }

    public function agriculture()
    {
        return view('web.causes.agriculture');
    }

    public function education()
    {
        return view('web.causes.education');
    }

    public function energy()
    {
        return view('web.causes.energy');
    }

    public function water()
    {
        return view('web.causes.water');
    }
}
