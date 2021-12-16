@extends('includes.master')
@section('content')

<div class="container text-center">
<h5>welcome to our blog</h5>

<div class="row">
@forelse ($post as $item)
<div class="col-md-4 col-sm-5 blogindex">
  <a class="bloglink" href="details/{{$item['id']}}">
    <p>{{$item->category['catname']}}</p>
    @if ($item->image)
    <img src="{{Storage::url($item->image)}}" class="img-fluid blogimg"/>
    @endif
   <p>
       <div class="posttitle">{{Str::limit($item['post'],50,$end=" Read More...")}}</div>
       </p>
    </a>
       <p class="author">Author:{{$item->user['name']}}</p>
       <p class="author">{{$item->created_at->diffForHumans()}}</p>

</div>
@empty
<p>No blog avilabe</p>
@endforelse

</div>
</div>


@endsection
