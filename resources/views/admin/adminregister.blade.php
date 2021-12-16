@extends('includes.master')
@section('content')

<div class="container">
<h5>Admin Registeration</h5>
<div class="myform">
    
<form action="{{route('adminregisternow')}}" method="post" enctype="multipart/form-data">
    @csrf
<label>User Name</label>
<input type="text" class="form-control" name='name' />
<label>Admin Email</label>
<input type="email" class="form-control" name='adminemail' />
<input type="file" class="form-control" name='image' />
<label>User Password</label>
<input type="password" class="form-control" name='password' />

<input type="submit" class="form-control btn btn-success"/>
</form>
</div>

</div>
@endsection