<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function dicas()
    {
        return view('dicas');
    }

    public function todasAsAulas(){
        $aulas = Classe::all();
        return view('todasAsAulas', ['aulas' => $aulas]);
        
       
    }

    public function aulas()
    {
        $aulas = Classe::all();
        return view('aulas', ['aulas' => $aulas]);
    }

    

   
}
