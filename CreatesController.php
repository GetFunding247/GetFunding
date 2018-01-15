<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Comment;
use App\Payment;
use Illuminate\Support\Facades\DB;

class CreatesController extends Controller
{

  //Show all events
    public function home(){
      $events=Event::all();
      return view('home',['events' => $events]);
    }
//Add new event
    public function add(Request $request){

     $this->validate($request,[
      
      'title' => 'required',
      'description' => 'required'
     ]);

     $events=new Event;
     $events->title = $request->input('title');
     $events->description = $request->input('description');
     $events->save();
     return redirect('/home')->with('info','Event Created Succesfully!');

    }
    
//View Single Event
    public function read($id){

      $events=Event::find($id);
      return view('read',['events' => $events]);
    }
//Delete Event
    public function delete($id){

    	Event::where('id',$id)
    	->delete();
    	return redirect('/home')->with('info','Event Deleted Succesfully!');
    }
//Show Top Events
    public function top(){
    	

    	$events = DB::table('events')->limit(3)->get();

         return view('top',['events' => $events]);

    }
    public function post(Request $request){
    $comments = Comment::with('replies')->where('reply_id','=',0)->get(['id','reply_id','body']);
   return response($comments);
 }
//Post Comments
    /*public function post(Request $request){

     $this->validate($request,[
      
      'name' => 'required',
      'email' => 'required',
      'comments' => 'required',
     ]);

     $comments=new Comment;
     $comments->name = $request->input('name');
     $comments->email = $request->input('email');
     $comments->comments = $request->input('comments');
     $comments->save();
     return redirect('/home')->with('msg','Comment Sent Succesfully!');

    }*/

    //Entry payment
    public function entry(Request $request){

     $this->validate($request,[
      
      'name'  => 'required',
      'email' => 'required',
      'phone' => 'required',
      'amount'     => 'required',
      'event' => 'required'
     ]);

     $payments=new Payment;
     $payments->cust_name = $request->input('cust_name');
     $payments->cust_email = $request->input('cust_email');
     $payments->cust_phone = $request->input('cust_phone');
     $payments->amount= $request->input('amount'); 
     $payments->product_details = $request->input('product_details');
     $payments->save();
     return redirect('http://developer.qpay.co/module/index.php');
  


    }
}
