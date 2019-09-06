@extends('layout.layout')
@section('content')
    <h2>Edit Comment</h2><br>

    <form action="/comment_update/{{$comment->id}}" method="post">
    <div class="form-group">
    {{ csrf_field() }}
            
        </div>
        <div class="form-group">

            <input type="hidden" class="form-control" name="_method"  value="PUT">
        </div>
       
        <div class="form-group">

            <textarea type="text" class="form-control" name="message"   rows="8"  cols="10">{{$comment->message}}</textarea>
        </div>
        

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection