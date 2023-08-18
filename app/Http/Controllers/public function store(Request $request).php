    public function store(Request $request)
    {
        //
        $programa = new Programa();
        $programa->sede_id = $request->input('sede_id');
        $programa->carrera_id = $request->input('carrera_id');
        $programa->anio_id = $request->input('anio_id');
        $programa->materia_id = $request->input('materia_id');
        $programa->comision_id = $request->input('comision_id');
        $programa->profesor_id = $request->input('profesor_id');
        $programa->fechaentrega = $request->input('fechaentrega');

        $programa->save();

        if ($request->hasFile('nombrearchivo')) {
            $archivo = $request->file('nombrearchivo');
            $path = $archivo->storeAs('public/programa/' . $programa->id, $archivo->getClientOriginalName() ); 
            $savedPath  =str_replace("public/", "", $path);
            $programa->nombrearchivo = $savedPath;   
            $programa->save();   
       } 