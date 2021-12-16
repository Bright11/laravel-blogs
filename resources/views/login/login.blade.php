@extends('includes.master')
@section('content')

<div class="container">
<div class="myform">
<h5>Form Login</h5>
<form action="{{route('loginnow')}}" method="post">
    @csrf
<label>User Email</label>
<input type="email" class="form-control" name='email' />
<label>User Password</label>
<input type="password" class="form-control" name='password' />

<input type="submit" class="form-control btn btn-success"/>
</form>
</div>

</div>
@endsection