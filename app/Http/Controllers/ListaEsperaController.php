<?php

namespace App\Http\Controllers;

use App\Models\ListaEspera;
use App\Models\Carrera;
use App\Models\Cupo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListaEsperaController extends Controller
{
    public function index()
    {
        
        
        $espera = ListaEspera::orderBy('nombre', 'desc')->paginate(7);
        
       
        $carreras = Carrera::pluck('descripcion', 'id');
        
        return view('backend.lista_espera.index', compact('espera', 'carreras'));
    }

    public function create()
    {
        
       
        $cupos = Cupo::join('carreras', 'cupos.carrera_id', '=', 'carreras.id')->select('descripcion', 'carrera_id', 'cupos')->whereColumn('reservados', '<=', 'cupos')->get()->pluck('descripcion', 'carrera_id');
        //dump($cupos);
        
        return view('backend.lista_espera.create', compact('cupos'));
    }

    public function store(Request $request)
    {
         $validatedData = $request->validate(
            [
                'carrera_id' => 'required|int',  
                'nombre' => 'required|string',
                'apellido' => 'required|string',
                'dni' => 'required|int|digits:8',
                'caractel' => 'required|int|digits:3',
                'telefono' => 'required|int|digits:7',
                'caractalt' => 'nullable|int|digits:3',         
                'tel_alternativo' => 'nullable|int|digits:7',        
                'email' => 'required|email',
            ]
        ); 

        $espera = new ListaEspera();
        $espera->carrera_id = $request->input('carrera_id');
        $espera->nombre = $request->input('nombre');
        $espera->apellido = $request->input('apellido');
        $espera->dni = $request->input('dni');
        $espera->telefono = $request->input('caractel').$request->input('telefono');
        $espera->tel_alternativo = $request->input('caractalt').$request->input('tel_alternativo');
        $espera->email = $request->input('email');
        $espera->save();
        //php artisan storage:link

        return redirect()->route('espera.create');
    }

    public function show(string $id)
    {
        //dump($id);
        $espera = ListaEspera::findOrFail($id);
        $carreras = Carrera::pluck('descripcion', 'id');
        return view('backend.lista_espera.editar', compact('espera', 'carreras'));
    }

    public function edit(ListaEspera $listaEspera)
    {
        
    }

    public function update(Request $request, string $listaEspera)
    {
        $espera = ListaEspera::findOrFail($listaEspera);
        $validatedData = $request->validate(
            [
                'carrera_id' => 'required|int',  
                'nombre' => 'required|string',
                'apellido' => 'required|string',
                'dni' => 'required|int|digits:8',
                'caractel' => 'required|int|digits:3',
                'telefono' => 'required|int|digits:7',
                'caractalt' => 'nullable|int|digits:3',         
                'tel_alternativo' => 'nullable|int|digits:7',         
                'email' => 'required|email',
            ]
        );

        $espera->carrera_id = $request->input('carrera_id');
        $espera->nombre = $request->input('nombre');
        $espera->apellido = $request->input('apellido');
        $espera->dni = $request->input('dni');
        $espera->telefono = $request->input('caractel').$request->input('telefono');
        $espera->tel_alternativo = $request->input('caractalt').$request->input('tel_alternativo');
        $espera->email = $request->input('email');
        $espera->save();
        //$request->session()->flash('status', 'Se modificó correctamente el usuario ' . $espera->name);
        return redirect()->route('espera.index', $espera->id);
    }

    
    public function destroy(int $id)
    {
        
        $espera = ListaEspera::findOrFail($id);
        $espera->delete();
        return redirect()->route('espera.index');
    }

     public function filtrar(Request $request)
    {
        $espera = ListaEspera::where('carrera_id', $request->input('carrera_id')) 
        ->where('carrera_id', $request->input('carrera_id'))->get();

        $carreras = Carrera::pluck('descripcion', 'id');
        return view('frontend.lista_espera.index', compact('espera', 'carreras'));
    }

    public function create_espera()
    {
        
        $cupos = Cupo::join('carreras', 'cupos.carrera_id', '=', 'carreras.id')->select('descripcion', 'carrera_id', 'cupos')->whereColumn('reservados', '<=', 'cupos')->get()->pluck('descripcion', 'carrera_id');
       
        
       
        
        return view('frontend.lista_espera.create', compact('cupos'));
    }

    public function store_espera(Request $request)
    {
         $validatedData = $request->validate(
            [
                'carrera_id' => 'required|int',  
                'nombre' => 'required|string',
                'apellido' => 'required|string',
                'dni' => 'required|int|digits:8',
                'caractel' => 'required|int|digits:3',
                'telefono' => 'required|int|digits:7',
                'caractalt' => 'nullable|int|digits:3',         
                'tel_alternativo' => 'nullable|int|digits:7',         
                'email' => 'required|email',
            ]
        ); 
        
        $espera = new ListaEspera();
        $espera->carrera_id = $request->input('carrera_id');
        $espera->nombre = $request->input('nombre');
        $espera->apellido = $request->input('apellido');
        $espera->dni = $request->input('dni');
        $espera->telefono = $request->input('caractel').$request->input('telefono');
        $espera->tel_alternativo = $request->input('caractalt').$request->input('tel_alternativo');
        $espera->email = $request->input('email');
        $espera->save();
        //php artisan storage:link

        return redirect()->route('lista.espera');
    }


}
