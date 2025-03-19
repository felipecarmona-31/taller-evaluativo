@extends('layouts.app')

@section('title','Productos')
    
@section('content')

    <form method="POST" action="{{ route('producto.store') }}" class="producto_nuevo">
        @csrf
        <fieldset>
            <legend>Url de la imagen del producto</legend>
            <input type="text" name="img" id="url">
        </fieldset>
        <fieldset>
            <legend>Nombre del producto</legend>
            <input type="text" name="nombre" id="nombre">
        </fieldset>
        <fieldset>
            <legend>Descripcion del producto</legend>
            <input type="text" name="descripcion" id="descripcion">
        </fieldset>
        <fieldset>
            <legend>Stock del producto</legend>
            <input type="text" name="stock" id="stock">
        </fieldset>
        <fieldset>
            <legend>Categoria del producto</legend>
            <select name="categoria_id" id="categoria" autocomplete="off">
                <option value="null" selected disabled hidden>Categoria</option>
                @foreach ($categorias as $categoria )
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </fieldset>
        <fieldset>
            <legend>Precio del producto</legend>
            <input type="text" name="precio" id="precio">
        </fieldset>
        <button>Agregar producto</button>
    </form>
    @if ($errors->any())
        <div class="errors">
            @foreach ($errors->all() as $error)
                <p>{{ $errors }}</p>
            @endforeach
        </div>
        
    @endif
@endsection