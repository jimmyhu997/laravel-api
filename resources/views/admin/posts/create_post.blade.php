@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crea un nuovo post</h1>
    
        <form action="{{route("posts.store")}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del post" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="content">Post Text</label>
                <textarea class="form-control" id="content" name="content" rows="7" placeholder="Inserisci il testo del post">{{old('content')}}</textarea>
            </div>
            <div class="form-group">
                <select class="custom-select" name="category_id" id="category_id">
                    <option {{old('category_id') == '' ? 'selected' : ''}}>Seleziona una categoria</option>
                    @foreach ($dataCategories as $category)
                    <option {{old('category_id') == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="posted"  name="posted" {{old('posted') ? 'checked' : ''}}>
                <label  class="form-check-label" for="posted">Publish</label>
            </div>
            <h3><strong>Tags</strong></h3>
            <div class="d-flex">
                @foreach($tags as $tag)
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="{{$tag->slug}}"  name="tags[]" value="{{$tag->id}}">
                    <label  class="form-check-label" for="{{$tag->slug}}">{{$tag->name}}</label>
                </div>
                @endforeach
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Crea</button>
                <a href="{{route('posts.index')}}"><button type="button" class="btn btn-success">Back Home Page</button></a>
            </div>
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