@extends('includes.master')
@section('content')

<div class="container">
<div class="myform">
<h5>Add category</h5>
<form action="{{route('insertcategory')}}" method="post">
    @csrf
<label>Category</label>
<input type="text" class="form-control" name='catname' />

<input type="submit" class="form-control btn btn-success"/>
</form>
</div>

</div>
@endsection