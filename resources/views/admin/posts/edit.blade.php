@extends( 'layouts.app' );

@section('content')
<div class="container">
    <h1>Form modifica progetto</h1>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li> {{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route( 'admin.posts.update', $post ) }}" method="POST" >

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{$post->title}}">
        </div>

        <div class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$post->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Inserisci modifiche</button>

    </form>
</div>
@endsection