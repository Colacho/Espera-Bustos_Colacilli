<?php

namespace App\Http\Controllers;

use App\Models\Cupo;
use Illuminate\Http\Request;
use App\Models\ListaEspera;
use App\Models\Carrera;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CupoController extends Controller
{
    public function index()
    {
        $espera = ListaEspera::orderBy('nombre', 'desc')->paginate(8);
        $carreras = Carrera::pluck('descripcion', 'id');
        $cupos = Cupo::all();

        // if (Auth::user() && Auth::user()->is_admin == 1) {
        //     return view('backend.lista_espera.index', compact('espera', 'carreras'));
        // } //else return redirect()->route('inicio');
        // else
         return view('backend.cupos.index', compact('espera', 'carreras', 'cupos'));
    }

    public function create()
    {
        $carreras = Carrera::whereNotIn('id', function ($query) {
                        $query->select('carrera_id')
                            ->from('cupos');
                    })->pluck('descripcion', 'id');
        $cupos = Cupo::with('carrera')->whereColumn('carrera_id', '!=', 'id')->get();
        
        if (Auth::user() && Auth::user()->is_admin == 1) {
            return view('backend.lista_espera.create', compact('carreras', 'cupos'));
        } else {
            return view('backend.cupos.create', compact('carreras', 'cupos'));
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'carrera_id' => 'required',  
                'cupos' => 'required',
                'reservados' => 'required',
                'inscriptos' => 'required',
            ]
        );
        $cupos = new Cupo();
        $cupos->carrera_id = $request->input('carrera_id');
        $cupos->cupos = $request->input('cupos');
        $cupos->reservados = $request->input('reservados');
        $cupos->inscriptos = $request->input('inscriptos');
        $cupos->save();

        return redirect()->route('cupo.index')->with('success', '¡El formulario se ha enviado correctamente!');
    }

    public function show(Cupo $cupo)
    {
        //
    }

    //public function edit(Cupo $cupo)
    public function edit(string $cupo)
    {
        
        $cupos = Cupo::findOrFail($cupo);
        $carreras = Carrera::pluck('descripcion', 'id');
        //$cupos = Cupo::all();

       
        return view('backend.cupos.editar', compact('carreras', 'cupos'));
    }

    public function update(Request $request, string $cupo)
    {
        $cupos = Cupo::findOrFail($cupo);
        $validatedData = $request->validate(
            [
                'carrera_id' => 'required',  
                'cupos' => 'required',
                'reservados' => 'required',
                'inscriptos' => 'required',
            ]
        );

        $cupos->carrera_id = $request->input('carrera_id');
        $cupos->cupos = $request->input('cupos');
        $cupos->reservados = $request->input('reservados');
        $cupos->inscriptos = $request->input('inscriptos');
        $cupos->save();
        //$request->session()->flash('status', 'Se modificó correctamente el usuario ' . $espera->name);
        return redirect()->route('cupo.index', $cupos->id);
    }

    public function destroy(int $id)
    {
        $cupo = Cupo::findOrFail($id);
        $cupo->delete();
        return redirect()->route('cupo.index');
    }
    
    public function filtrar(Request $request)
    {
        $cupos = Cupo::where('carrera_id', $request->input('carrera_id'))->get();

        $carreras = Carrera::pluck('descripcion', 'id');
        return view('backend.cupos.index', compact('carreras', 'cupos'));
    }
}
