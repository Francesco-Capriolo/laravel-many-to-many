@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 col-md-9 col-lg-6">
                    <div class="card mb-3">
                        <img src="{{$post->image_url}}" class="card-img-top" alt="Image of {{$post->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->author}}</p>
                            <p class="card-text">{{$post->content}}</p>
                            <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
