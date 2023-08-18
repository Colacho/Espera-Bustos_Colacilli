@ -41,20 +41,21 @@ class ProgramaController extends Controller

    public function ProgramasPendientes(){
     
        $anio = Anio::pluck('anio', 'id');
        $carreras = Carrera::pluck('descripcion','id');
        $comisiones = Comision::pluck('comision', 'id');
        $carreras = Carrera::pluck('descripcion', 'id');
        $materias = Materia::pluck('descripcion', 'id');
<<<<<<< HEAD
        $profesores = Profesor::pluck('nombre','apellido','id');
        $sede = Sede::pluck('descripcion','id');
        $programas = Programa::all();
        //dd($programas);
        //dd($programas);
=======
        $programas = Programa::all();
>>>>>>> ab738b8a8dff0b999d0f1488fed31c8d9ddf42ae
         //dd($programas[1]->carrera->descripcion);
         //dd($carreras);
         //dd($materias);
         return view('frontend.programa.programas_pendientes', compact('carreras','sede','comisiones','materias','profesores', 'anio', 'programas'));

        return view('frontend.programa.programas_pendientes', compact('programas'));
    }

    public function store(Request $request){
@ -95,9 +96,10 @@ class ProgramaController extends Controller

        $programa = Programa::where('sede_id', $request->sede_id)
                            ->where('carrera_id', $request->carrera_id)
                            
                            ->where('carrera_id', $request->carrera_id)
                            ->where('fechaentrega', 'LIKE', $request->anio_id.'%');
        dd($programa);
                            dd($programa);
    }

    /**
