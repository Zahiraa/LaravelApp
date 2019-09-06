@extends('layout/layout')
@section('content')
<h2>Create a new Page</h2><br>

{{--<ul>--}}

        {{--@foreach($lists as $list)--}}
        {{--<li> <a href="/">id :{{ $list->id }}</a></li>--}}

       {{--<li> name : {{ $list->name }}</li><br>--}}
    {{--@endforeach--}}

{{--</ul>--}}

    <form method="post" action="/new_page">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">

            <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Title" name="title">
        </div>
        <div class="form-group">

            <textarea type="text" class="form-control" id="bodyy" placeholder="Body" name="body"></textarea>
        </div>
        <div class="form-group">

            <input type="file" class="form-control" id="pic" placeholder="Pic" name="picture" placeholder="Pic">
        </div>
        <div class="form-group">

            <input type="text" class="form-control" id="cat" placeholder="Category" name="category">
        </div>

        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
    </form>

<br>

@if(count($errors))     {{--display errors--}}
    <div class="container">
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>

    </div>
@endif
    @endsection

