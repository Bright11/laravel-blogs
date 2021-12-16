@extends('includes.master')
@section('content')

<div class="container">
    @if (Session::has('user'))
    <p class="text-center mt-3">Welcome to your blogs {{Session::get('user')['name']}}</p>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Blog post</th>
                <th scope="col">Blog Status</th>
                <th scope="col">Delete post</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($post as $post)
            <tr>
                <th>{{Str::limit($post->title,20)}}</th>
                <th>{{Str::limit($post->post,20, $end=" read more")}}</th>
                <th>{{$post->status}}</th>
                <th> <a style="text-decoration: none,color:white" href="{{route('deleteblogerpost',$post->id)}}">Delete</a></th>
            </tr>
            @empty
            <tr>
                <th><p>No post available</p></th>
            </tr>

@endforelse
        </tbody>

    </table>

</div>
@endsection
