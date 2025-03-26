@extends('layouts.app')

@section('title','Nuevo articulo')
    
@section('content')
    <form method="POST" action="{{ route('articulo.store') }}" class="articulo_nuevo">
        @csrf
        <fieldset>
            <legend>Url de la imagen del articulo</legend>
            <input value="{{ old('imagen_destacada', $articulo['imagen.destacada']) }}" type="url" name="imgen_destacada" id="url">
        </fieldset>
        <fieldset>
            <legend>Titulo del articulo</legend>
            <input value="{{ old('titulo', $articulo['articulo']) }}" type="text" name="titulo" id="titulo">
        </fieldset>
        <fieldset>
            <legend>Contenido del articulo</legend>
            <input value="{{ old('contenido', $articulo['contenido']) }}" type="text" name="contenido" id="contenido">
        </fieldset>
        <fieldset>
            <legend>Autor</legend>
            <input value="{{ old('autor', $articulo['autor']) }}" type="text" name="autor" id="autor">
        </fieldset>
        <fieldset>
            <legend>Categoria del blog</legend>
            <select name="categoria_blog-id" id="categoria-blog" autocomplete="off">
                @foreach ($categoriasBlog as $categoriaBlog )
                <option value="{{ $categoriaBlog->id }}" @if (old('categoria_blog_id', $articulo['categoria_blog_id']) == $categoriaBlog->id) selected @endif>{{ $categoriaBlog->nombre }}</option>
                @endforeach
            </select>
        </fieldset>
        <fieldset>
            <legend>Fecha de publicidad</legend>
            <input value="{{ old('fecha_publicacion', $articulo['fecha_publicacion']) }}" type="data" name="fecha_publicacion" id="fecha_publicacion">
        </fieldset>
        <button>Publicar articulo</button>
    </form>
@if ($errors->any())
        <div class="errors">
            @foreach ($errors->all() as $error)
                <p>{{ $errors }}</p>
            @endforeach
        </div>
        
    @endif

@endsession