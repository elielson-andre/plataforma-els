<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AulaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin/home');
    }

    public function publicarAulaGet(){
        return view('admin/publicarAula');
    }

    public function getInfo(Request $request){
       
        $aulaInfo = Classe::where('slug',$request->slug)->first();

        $aulas = Classe::all();

        return view('aulas',[
            'title' => $aulaInfo->title,
            'slug' => $aulaInfo->slug,
            'link' => $aulaInfo->link,
            'type' => $aulaInfo->type,
            'description' => $aulaInfo->description,
            //
            'aulas' => $aulas
        ]);
    }

    //Post
    public function publicarAulaPost(Request $request ){

        try {
            Classe::create([
                'title'=> $request->title,
                'slug' => $request->slug,
                'link' => $request->link,
                'type' => $request->type,
                'description' => $request->description
            ]);
            $msg = 'success';
        } catch (\Throwable $th) {
            $msg = 'error';
        }
        

        return Redirect::to('admin/publicar-aula')->with('message', $msg);
    }
}
