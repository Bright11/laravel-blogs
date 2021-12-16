@extends('includes.master')
@section('content')

<div class="container">
<div class="myform">
<h5 class="text-center">Blogging page</h5>
<form action="{{route('postnow')}}" method="post" enctype="multipart/form-data">
    @csrf
<label>Blog title</label>
<input type="text" require="" name="title" class="form-control" maximum="40" name='title' />
<select required class="form-control" name="cat_id">
<option vlaue="">Selete Category</option>
@forelse ($cat as $item)
<option value="{{$item['id']}}">{{$item['catname']}}</option>
@empty

@endforelse
</select>
<label>Blog image Optional</label>
<input type="file" class="form-control"name='image' />
<textarea class="form-control" name="post"></textarea>
<!-- id="editor"-->
<input type="submit" class="form-control btn btn-success"/>
</form>
</div>

</div>
@endsection
