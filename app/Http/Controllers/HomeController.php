<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\User;
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
        $qtdUsers = User::where('type', 0)->count();
        $qtdAulas = Classe::all()->count();
        $ultimasPostadas = Classe::limit(3)->orderBy('id', 'DESC')->get();
        return view('home',[
            'qtdUsers' => $qtdUsers,
            'qtdAulas' => $qtdAulas,
            'ultimasPostadas' => $ultimasPostadas
        ]);
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
