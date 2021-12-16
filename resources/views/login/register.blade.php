@extends('includes.master')
@section('content')

<div class="container">
<h5>Form Registeration</h5>
<div class="myform">
    
<form action="{{route('registernow')}}" method="post">
    @csrf
<label>User Name</label>
<input type="text" class="form-control" name='name' />
<label>User Email</label>
<input type="email" class="form-control" name='email' />
<label>User Password</label>
<input type="password" class="form-control" name='password' />

<input type="submit" class="form-control btn btn-success"/>
</form>
</div>

</div>
@endsection