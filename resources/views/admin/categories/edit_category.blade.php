@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica della categoria {{$category->name}}</h1>
        <form action="{{route('categories.update', $category->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">{{old('name'),$category->name}}</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name',$category->name)}}">
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
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