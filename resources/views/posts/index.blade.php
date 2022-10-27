@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Articulos
                    <a href="{{ route('posts.create') }}" class='btn btn-sm btn-primary float-rigth'> Crear </a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th>Imagen</th>
                                <th>Iframe</th>

                                <th colspan="4">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>

                                <td> @if($post->image)
                                   <center><p>SI</p></center>
                                    @else
                                   <center><p>NO</p></center>
                                    @endif
                                </td>
                                <td> @if($post->iframe)
                                <center><p>SI</p></center>
                                    @else
                                    <center><p>NO</p></center>
                                    @endif
                                </td>
                                <!-- <td>{{ $post->image }}</td> -->
                                <td>
                                    <a href="{{ route('posts.edit',$post) }}" class="btn btn-sm btn-primary"> Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('posts.destroy', $post )}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="eliminar" class="btn btn-sm btn-danger" onclick="return confirm('¿Quieres eliminar?')">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
