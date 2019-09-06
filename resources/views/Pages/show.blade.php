
    @extends('layout.layout')
    @section('content')

        <h2 class="text-center">{{$page->title}}</h2><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                  <small> <p>published in {{$page->created_at->diffForHumans()}}</p></small>
                </div>
                <div class="col-md-3">
                @if(!($page->user_id)==null)
                  <small> by {{$page->user->name}}</small>
                @endif
                </div>
            </div>
        </div>
        <hr>

        <p>{{$page->body}}</p><br>
       
        @if(!($page->comments)->isEmpty())
           <h5>Comments</h5> <br>
        @foreach($page->comments as $cmt)

            <ul>
                <li>{{$cmt->message}} <br>&nbsp;
               
                @foreach($user as $u)
                    @if($u->comment_id == $cmt->id)
                    
                         by <strong>{{$u->name}}</strong>
                        {{--@else--}}
                        {{--.--}}
                    @endif
                @endforeach
                    <strong>{{$cmt->created_at->diffForHumans()}}</strong>
                    <a href="/comment_edit/{{$cmt->id}}" class="btn btn-warning">Edit</a>
                    <form action="{{url('comment/'.$cmt->id)}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                       <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                  
                </li>
                {{--by {{$cmt->user->name}}--}}
            </ul>

        @endforeach
        @endif

        <br><h5>Add a comment</h5>
        <form action="/new/comment/{{$page->id}}" method="post">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            <div class="form-group">
              <textarea placeholder="Your comment..." name="message" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Publish</button>
        </form>
        <hr><br>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <small>Category : {{$page->category}}</small>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-danger" href="/pages" style="padding: 10px">Back to list</a>
                </div>
            </div>
        </div>


    @endsection
