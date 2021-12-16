@extends('includes.master')
@section('content')
@if (Session::has('user'))

<div class="container">
<div class="row">
<div class="col-md-3">
<div id="postlink">
@if (Session::has('user'))
<div class="sidebarcat">
<li>
    <a style="text-decoration: none" href="{{route('postblog')}}">Post a blog</a>
   </li>
   <li>
       <a href="{{route('bloggerpost')}}">My blog post</a>
      </li>
</div>
@endif
</div>
</div>
<div class="col-md-8">
<h1>main content</h1>
</div>

<div>

</div>
@else
    <p>Sorry you made a mistake</p>
@endif
@endsection
