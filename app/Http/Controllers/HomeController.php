<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $agendas = Agenda::latest()->take(5)->get();
        return view('LandingPage', compact('agendas'));
    }
}
