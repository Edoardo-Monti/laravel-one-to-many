@extends('layouts.app')

@section('content')
<h1 class="text-center p-4">Singolo Post</h1>
<div class="card mx-auto" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $singoloPost->title }}</h5>
        <p class="card-text">{{$singoloPost->description}}</p>
        <a href="{{route('admin.posts.edit', $singoloPost)}}" class="btn btn-primary">Modifica</a>
        
    </div>
</div>




@endsection
