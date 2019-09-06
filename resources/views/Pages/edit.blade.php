@extends('layout.layout')
@section('content')
    <h2>Edit Page</h2><br>

    <form action="/page_update/{{$page->id}}" method="post">
    <div class="form-group">
    {{ csrf_field() }}
            
        </div>
        <div class="form-group">

            <input type="hidden" class="form-control" name="_method"  value="PUT">
        </div>
        <div class="form-group">

            <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{$page->title}}">
        </div>
        <div class="form-group">

            <textarea type="text" class="form-control" name="body" id="bodyy"  rows="8"  cols="10">{{$page->body}} ></textarea>
        </div>
        <div class="form-group">

            <input type="text" class="form-control" id="cat" name="category" value="{{$page->category}}">
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
