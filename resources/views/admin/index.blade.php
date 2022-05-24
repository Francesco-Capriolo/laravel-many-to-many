@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <table class="table table-dark table-hover w-75 mx-auto">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                    <th scope="row">
                                        <a href="{{route('admin.posts.show',$post)}}">{{$post->title}}
                                        </a>
                                    </th>
                                    <td>{{$post->author}}</td>
                                    <td>{{$post->created_at}}</td>

                            </tr>
                        @empty
                            <tr>
                                <th scope="row">There are no posts to show</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
