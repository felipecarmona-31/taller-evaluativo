@extends('layouts.app')

@section('title','Categorias')
    
@section('content')
    <div class="categorias">
        <table class="categorias">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria )
                    <tr>
                        <td>{{ $categoria->nombre }}</td>
                        <td>{{ $categoria->descripcion }}</td>
                        <td>
                            <a href="{{ route('categoria.edit', $categoria) }}">
                                <button title="Editar categoria">🖋️</button>
                            </a>
                            <form action="{{ route('categoria.delete', $categoria) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button title="Eliminar categoria">🚮</button>
                            </form>
                        </td>
                    </tr>  
                @endforeach
                <form  method="POST" action="{{ route('categoria.store') }}">
                    @csrf
                    <td><input type="text" name="nombre" id="nombre" placeholder="Nombre"></td>
                    <td><input type="text" name="descripcion" id="descripcion" placeholder="Desripcion"></td>
                    <td>
                        <button title="Agregar categoria">➕</button>
                    </td>
                </form>
            </tbody>
        </table>
    </div>


@if ($errors->any())
        <div class="errors">
            @foreach ($errors->all() as $error)
                <p>{{ $errors }}</p>
            @endforeach
        </div>
        
    @endif

@endsection