@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                    @if($post->image)
                        <img src="{{ $post->get_image }}" alt="" class="card-img-top">

                    @elseif($post->iframe)
                    <div class="ratio ratio-16x9">
                    {!! $post->iframe !!}
                    </div>

                    @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }} </h5>
                <p class="card-text">
                    {{ $post->body}}
                </p>
                <div class="txt-muted mb-0">
                    <em>
                    &ndash; {{ $post->user->name }} -
                    </em>
                    {{ $post->created_at->format('d M Y') }}
                </div>
            </div>

            </div>

        </div>
    </div>
</div>
@endsection
