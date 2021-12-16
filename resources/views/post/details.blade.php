@extends('includes.master')
@section('content')

<div class="container detailscontainer">
    <div class="category">Category/{{$post->category['catname']}}</div>
<div class="col-md-8">
    <p>{{$post->title}}<p>
    <img src="{{Storage::url($post->image)}}" class="img-fluid detailsimg">
    <p>{{$post->post}}</p>
</div>
<div class="col-md-8">
@forelse ($comment as $comment)
<div class="commentdiv">
    <p class="comment">{{$comment->user->name}} ::
        {{$comment->user->created_at->diffForHumans()}}</p>
   <p class="comment">{{$comment->comment}}<p>
</div>
@empty
<p class="comment">Be the first to comment</p>
    <a class="nav-link" href="{{route('register')}}">Register</a>

    <a class="nav-link" href="{{route('login')}}">Login</a>
@endforelse
</div>
<div class="col-md-8">
    <form action="/postcomment/{{$post->id}}" method="post" >
        @csrf
        <input type="hidden" name="post_id" value="{{$post->id}}"/>
    <textarea class="form-control" name="comment" placeholder="Comment section"></textarea>
    <!-- id="editor"-->
    @if(Session::has('user'))
    <input type="submit" class="form-control btn btn-success"/>
    @else
    <p>Register or Login to comment</p>
        <a class="detailslogin" href="{{route('register')}}">Register</a>
        <a class="detailslogin" href="{{route('login')}}">Login</a>
    @endif
    </form>
</div>
</div>
@endsection
