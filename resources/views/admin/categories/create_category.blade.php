@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Creazione di una nuova categoria</h1>
        <form action="{{route('categories.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome della nuova categoria</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
            <a href="{{route('categories.index')}}"><button type="button" class="btn btn-success">Back Home Categories</button></a>
            <a href="{{route('posts.index')}}"><button type="button" class="btn btn-dark">Back Home Posts</button></a>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection