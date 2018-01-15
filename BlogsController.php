<?php

namespace App\Http\Controllers;
use App\Blog;
use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
	//Show Top Events
    public function blog(){
    	

    	$blogs = DB::table('blogs')->get();
               return view('vblog',['blogs' => $blogs]);
          

    }
    //Add new blog
    public function plus(Request $request){

     $this->validate($request,[
      'author' => 'required',
      'description' => 'required'
	 
     ]);

     $blogs=new Blog;
     $blogs->author = $request->input('author');
     $blogs->description = $request->input('description');
     $blogs->save();
     return redirect('/vblog')->with('info','Post Created Succesfully!');
      
    }
    //Add reply
    public function added(Request $request){

     $this->validate($request,[
      'name' => 'required',
      'opinion' => 'required',


   
     ]);

     $replies=new Reply;
     $replies->name = $request->input('name');
     $replies->opinion = $request->input('opinion');
     $replies->save();
     return redirect('/readpost');
      
    }
    //View Single Blog
    public function read($id){

      $blogs=Blog::find($id);
      return view('readpost',['blogs' => $blogs]);
    }
//View Single reply
    public function readpost($id){

      $replies=Reply::find($id);
      return view('readpost',['replies' => $replies]);
    }


    //Delete Blog
    public function delete($id){

      Blog::where('id',$id)
      ->delete();
      return redirect('/vblog')->with('info','Post Deleted Succesfully!');
    }
}
