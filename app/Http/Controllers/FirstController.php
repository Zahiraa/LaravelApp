<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Page;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Input;
use phpDocumentor\Reflection\Types\Integer;


class FirstController extends Controller
{

    public function index()
    {
        return view('layout.layout');
    }

   public function allPages()
   {
       $pages=Page::all();
       return view('Pages/all',compact('pages'));
   }

    public function storePage(Request $request)
    {
        if($request->input('submit')) {
//dd($request->all());

//            $lists = User::all();
//          $this->validate($request,[   //if error redirect to form
//              'title' => 'required'
//              ]
//              );
//
//            //add new page
            $page = new Page();
            $page->title = $request->get('title');
            $page->body = $request->get('body');
            $page->category = $request->get('category');
            $page->picture = $request->get('picture');
            $path='public/images';
//            $request->get('picture')->move($path, $request->get('picture'));
            $file=$request->get('picture');
//            dd(public_path()."/images");
//            $files = $request->file('file');
//            foreach ($files as $f) {//this statement will loop through all files.
//                $file_name = $f->getClientOriginalName(); //Get file original name
//                $file->move(public_path()."/images" , $file_name); // move files to destination folder
//            }
//
//            $file->move(public_path()."/images");


            $page->save();
            return redirect('pages');
        }
        return view('about',compact('user'));
    }

    public function showUser(User $user)
    {
//        $user=User::find($id);
//        $lists= DB::table('User')->find($id);
//        if key word $user(controller)==$user(routing) add User $user
        return view('Users.show',compact('user'));
    }

    public function newPage()
    {

        $lists=User::all();
        return view('about',compact('lists'));
    }

    public function showPage(Page $page)
    {
        $user=User::all();
        return view('Pages.show',compact('page','user'));
    }

    public function allComments()
    {
        $comments=Comment::all();
        $user=User::all();

        return view("Comments.index",compact('comments','user'));
    }

    public function newComment(Request $request,int $id)
    {
        $page_a=Page::find($id);
        if($request->method()) {
//            dd($request->get('message'));
            $comment = new Comment();
            $comment->message = $request->get('message');

            $comment->page()->associate($page_a);

            $comment->save();


//            $page_a->hasMany($comment);
            $comment->belongsTo($page_a);
            $page_a->save();

            return redirect("page/".$id)->with('page',$id);
//            return Redirect::route('Pages.show', array('page' => $page_a));
        }
        return view("Pages.show",['page'=> $page_a]);
    }
}
