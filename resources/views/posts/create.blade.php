@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Articulo </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="">Titulo*</label>
                            <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Imagen</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="">Contenido </label>
                    <textarea name="body" rows="6" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                    <label for="">Contenido embebido</label>
                    <textarea name="body" rows="1" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        @csrf
                        <button class="btn btn-primary" type="submit" value="enviar">Enviar</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
