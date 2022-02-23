@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome Categoria</th>
                    <th scope="col">Slug Categoria</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>                
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>
                        <a href="{{route('categories.edit', $category->id)}}"><button type="button" class="btn btn-success">Modifica la categoria</button></a>
                    </td>
                    <td>
                        <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete the category</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <a href="{{route('categories.create')}}"><button type="button" class="btn btn-success">Crea una nuova categoria</button></a>
        </div>
    </div>
@endsection