@extends('includes.master')
@section('content')

<div class="container">
<div class="myform">
<h5>Admin Login</h5>
<form action="{{route('adminloginnow')}}" method="post">
    @csrf
<label>Admin email</label>
<input type="text" class="form-control" name='adminemail' />
<input type="password" class="form-control" name='password' />

<input type="submit" class="form-control btn btn-success"/>
</form>
</div>

</div>
@endsection