@extends('layout.layout')
@section('content')
        <h2>All Pages</h2><br>
        <table class="table">
                <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Category</th>
                        <th>Picture</th>
                        <th>Comments</th>
                        <th>Writer</th>
                        <th>Actions</th>
                </tr>

                @foreach($pages as $page)
                       <tr>
                           <td><a href="/page/{{$page->id}}">{{$page->id}}</a></td>
                           <td> <a href="/page/{{$page->id}}">{{$page->title}}</a></td>
                            <td>{{$page->body}}</td>
                           <td>{{$page->category}}</td>
                           <td><img src="images/{{ $page->picture }}"  alt="pic"/></td>
                           <td>
                             <a href="/page/{{$page->id}}">
                               @foreach($page->comments as $p)
                                <ul>
                                     <li> {{$p->message}}</li>
                                </ul>
                               @endforeach
                            </a>
                         </td>
                         <td>{{$page->user->name}}</td>
                
                         <td>
                         <div class="container">
                            <div class="row">
                               <div class="col-md-6" style="padding-left:9px">
                                  <a class="btn btn-warning" href="{{url('/page_edit/'.$page->id)}}">Editer</a>
                                </div>
                        
                               <div class="col-md-6" >
                                 <a class="btn btn-primary" href="/page/{{$page->id}}">Afficher </a>
                               </div>
                             </div>
                         </div>
                         </td>
           
                         </tr>
               @endforeach
 

        </table>
@endsection
