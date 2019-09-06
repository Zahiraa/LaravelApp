<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Page;

class CommentController extends Controller
{
    public  function edit($id)
    {
    
      $comment=Comment::find($id);
      // dd($comment);
      return view("Comments.edit",compact('comment'));
      
    }

    public  function update(Request $request,$id)

    {
     //  dd($request->all());
        if($request->method())
         {
            $comment=Comment::find($id);
          
           
            $comment->message=$request->get('message');
           

            $comment->save();

             return redirect("/page/".$comment->page_id);
      
    } 
    }

    public  function delete(Request $request,$id)
    {
     
      $comment=Comment::find($id);
      $comment->delete();
     
      return redirect("/page/".$comment->page_id);
      
    }

}
