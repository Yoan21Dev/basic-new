@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="card mb-4">


                @if($post->iframe && $post->image)

                <div class="card">
                    <div class="card-body">
                        <div class="ratio ratio-16x9">
                            {!! $post->iframe !!}
                        </div>
                    </div>
                    <img src=" {{ $post->get_image }}" class="card-img-fluid" alt="...">
                </div>

                @elseif ($post->iframe)
                <div class="ratio ratio-16x9">
                    {!! $post->iframe !!}
                </div>

                @else ($post->image)
                <img src="{{ $post->get_image }}" class="img-fluid rounded-start">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">

                        {{ $post->get_excerpt }}
                        <a href="{{ route('post', $post) }}">Leer mas</a>
                    </p>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $post->user->name }}
                        </em>
                        {{ $post->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>
            @endforeach
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
