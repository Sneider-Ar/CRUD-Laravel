@extends('layaut/template')

@section('title', 'Editar alumno | Escuela')
    
@section('contenido')

<main>
    <div class="container py-4">
        <h2>Editar alumnos</h2>
    
        @if ($errors->any())

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endif

        <form action="{{url('alumnos/'.$alumno->id)}}" method="post">
            @method("PUT")
            @csrf

            <div>
                <label for="matricula" class="col-sm-2 col-form-lab">Matricula:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="matricula" id="matricula" value="{{$alumno -> matricula}}" >
                </div>
            </div>
            <div>
                <label for="nomnbre" class="col-sm-2 col-form-lab">Nombre completo:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{$alumno -> nombre}}" required>
                </div>
            </div>
            <div>
                <label for="fecha" class="col-sm-2 col-form-lab">Fecha de nacimiento:</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="fecha" id="fecha" value="{{$alumno -> fecha_nacimiento}}" required>
                </div>
            </div>
            <div>
                <label for="telefono" class="col-sm-2 col-form-lab">Telefono</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="telefono" id="telefono" value="{{$alumno -> telefono}}" required>
                </div>
            </div>
            <div>
                <label for="email" class="col-sm-2 col-form-lab">Email:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="email" id="email" value="{{$alumno -> email}}" >
                </div>
            </div>
            <div>
                <label for="nivel" class="col-sm-2 col-form-lab">Nivel:</label>
                <div class="col-sm-5">
                    <select name="nivel" id="nivel" class="form-select" required>
                        <option value="">Seleccionar nivel</option>
                        @foreach($niveles as $nivel)
                            <option value="{{$nivel->id}}"
                                @if ($nivel->id == $alumno->nivel_id) 
                                {{'selected'}}
                                @endif
                            >{{$nivel->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="container py-4">
                <a href="{{url('alumnos')}}"class="btn btn-secondary">Regresar</a>
                <button  type="submit" class="btn btn-success">Guardar</button>
            </div>
           

        </form>
    </div>
</main>