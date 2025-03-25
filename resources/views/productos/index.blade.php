@extends('layouts.app')

@section('title','Productos')
    
@section('content')

<form  method="get" action="{{ route( 'producto.index') }}" class="filtrar-productos" >
    <label for="categorias">Filtrar por categoria</label>
    <select name="categoria" id="categoria" onchange="this.form.submit()">
        <option value="">Todas</option>
        @foreach ($categorias as $categoria)
        <option value="{{ $categoria->id }}" {{ request('categoria') == $categoria->id ? 'selected' : ''}}</option>
            {{ $categoria->nombre }}
        </option>    
        @endforeach
    </select>
</form>

<div class="productos">
    @foreach($productos as $producto)
    <div class="producto">
        <img src="{{$producto->imagen}}" alt="">
        <h2>{{$producto->nombre}}</h2>
        <span class="precio">{{$producto->precio}}</span>
        <button title="añadir al carrito" class="agregar-compra">🛒</button>
        <div class="detalles">
            <a href=""> ver detalles</a>
            <a href=""> 
                <button title="editar producto">🖋️</button>
            </a>
            <form action="{{ route('producto.delete', $producto ) }}" method="POST">
                @csrf
                @method('DELETE')
                <button title="Eliminar producto">🗑️</button>
            </form>
        </div>
    </div>


    @endforeach
    </div>
    <a href="{{ route('producto.create') }}">Anadir un nuevo producto</a>
@endsection