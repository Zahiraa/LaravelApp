@extends('layout.layout')
@section('content')
    <h2>Form</h2>

    <form>
        <div class="form-group">

            <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Title">
        </div>
        <div class="form-group">

            <textarea type="text" class="form-control" id="bodyy" placeholder="Body"></textarea>
        </div>
        <div class="form-group">

            <input type="text" class="form-control" id="cat" placeholder="Category">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

