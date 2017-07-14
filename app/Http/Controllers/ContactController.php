<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Contact;
class ContactController extends Controller
{

     public function admin_login(){
       return view('admin_login');
   }
  
    public function index(){

        return view('index');
    }
     public function about(){

        return view('about');
    }
     public function contact(){

        return view('contact');
    }
    public function contact_post(Request $request){

         $this->validate($request, [
            'fname' => 'required|max:120',
             'lname' => 'required|max:120',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'message' => 'required'

        ]);
        $contact =new Contact([
            'fname'=>$request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
           'phone'=>$request->input('phone'),
            'message'=>$request->input('message'),

        ]);
        $contact->save();
        return redirect()->back();
    }
}
