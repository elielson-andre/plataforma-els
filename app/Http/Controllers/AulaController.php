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
        $aulas = Classe::all();
        return view('admin/home', ['aulas' => $aulas]);
    }

    public function publicarGet()
    {
        return view('admin/publicarAula');
    }

    public function getInfo(Request $request)
    {

        if(Classe::where('slug', $request->slug)->count() > 0){
            $aulaInfo = Classe::where('slug', $request->slug)->first();

            $aulas = Classe::all();

            return view('aulas', [
                'title' => $aulaInfo->title,
                'slug' => $aulaInfo->slug,
                'link' => $aulaInfo->link,
                'type' => $aulaInfo->type,
                'description' => $aulaInfo->description,
                //
                'aulas' => $aulas
            ]);
        }else{
            $aulas = Classe::all();
            return view('todasAsAulas', ['aulas' => $aulas]);
        }
        
        
    }


    public function editarGet(Request $request)
    {
        try {


            if (Classe::where('slug', $request->slug)->get()->count() > 0) {
                $aula = Classe::where('slug', $request->slug)->first();
                return view('admin/editarAula', ['aula' => $aula]);
            } else {
                echo "<script> alert('Aula não existe') </script>";
                $aulas = Classe::all();
                return view('admin/home/', ['aulas' => $aulas]);
            }
        } catch (\Throwable $th) {
            echo "<script> alert('Erro ao obter dados da aula') </script>";
            $aulas = Classe::all();
            return view('admin/home', ['aulas' => $aulas]);
        }
    }

    public function excluirGet(Request $request){
        if (Classe::where('slug', $request->slug)->get()->count() > 0) {

            Classe::where('slug', $request->slug)->delete();

            echo "<script> alert('Aula excluida com sucesso') </script>";
            $aulas = Classe::all();
            return view('admin/home', ['aulas' => $aulas]);
        } else {
            echo "<script> alert('Erro ao excluir a aula informada nao existe') </script>";
            $aulas = Classe::all();
            return view('admin/home', ['aulas' => $aulas]);
        }
    }

    //Post

    public function publicarPost(Request $request)
    {

        try {
            Classe::create([
                'title' => $request->title,
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

    public function editarPost(Request $request)
    {

        if (Classe::where('id', $request->id)->get()->count() > 0) {

            Classe::where('id', $request->id)
                ->update([
                    'title' => $request->title,
                    'slug' => $request->slug,
                    'link' => $request->link,
                    'type' => $request->type,
                    'description' => $request->description
                ]);

            echo "<script> alert('Sucesso ao editar!') </script>";
            $aulas = Classe::all();
            return view('admin/home', ['aulas' => $aulas]);
        } else {
            echo "<script> alert('Aula não existe') </script>";
            $aulas = Classe::all();
            return view('admin/home', ['aulas' => $aulas]);
        }
    }


}
