@extends('includes.master')
@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Blog post</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($post as $post)
            <tr>
                <th>{{Str::limit($post->title,20)}}</th>
                <th>{{Str::limit($post->post,20, $end=" read more")}}</th>
                @if ($post->status==='active')
                <th>
                    <form action="{{route('approveblog',$post->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="status" value="Not active"/>
                        <input type="submit" value="Approved" class="btn btn-success"/>
                    </form>
                </th>
                @else
                <th>
                    <form action="{{route('Deactivatepost',$post->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="status" value="active"/>
                        <input type="submit" value="Not activate" class="btn btn-danger"/>
                    </form>
                </th>
                @endif
                <th> <a href="{{route('deletepost',$post->id)}}">Delete</a></th>
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
