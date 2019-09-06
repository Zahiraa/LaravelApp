@extends('layout.layout')
@section('content')
    <h2>All Comments</h2><br>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Message</th>
            <th>Date</th>
            <th>Post</th>
            <th>Writer</th>

        </tr>

        @foreach($comments as $cmt)
            <tr>
                <td>{{$cmt->id}}</td>
                <td>{{$cmt->message}}</td>
                <td>{{$cmt->created_at->diffForHumans()}}</td>
                <td>
                    @if(($cmt->page_id))
                       <a href="/page/{{$cmt->page_id}}">{{$cmt->page_id}}</a>
                        @else
                        .
                    @endif
                </td>
                <td>
                    @foreach($user as $u)
                        @if($u->comment_id == $cmt->id)
                            {{$u->name}}
                        {{--@else--}}
                            {{--.--}}
                        @endif
                     @endforeach
                </td>
            </tr>

        @endforeach

    </table>
@endsection


