<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public  function edit($id)
    {
      $page=Page::find($id);
      return view("Pages.edit",compact('page'));
      
    }

    public  function update(Request $request,$id)

    {
       //dd($request->all());
        if($request->method())
         {
            $page=Page::find($id);

            $page->title=$request->get('title');
            $page->body=$request->get('body');
            $page->category=$request->get('category');

            $page->save();

             return redirect("/pages");
      
    } 
    }
}
