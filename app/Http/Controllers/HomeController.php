<?php

namespace App\Http\Controllers;

use App\JorgChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
     public function jorgchart()
    {
        $jorgchat=JorgChart::all();
        return view('jorgchart',compact('jorgchat'));
    }
     public function chart()
    {
        $chart=JorgChart::all();
        return response()->json($chart);
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('frontend_home');
    }

}
