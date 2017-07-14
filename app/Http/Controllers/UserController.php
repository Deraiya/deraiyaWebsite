<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use App\Contact;

class UserController extends Controller
{

  //  public function login_post(Request $request){

//       $this->validate($request, [
//            'email' => 'email|required',
//            'password' => 'required|min:6'
//        ]);

      /*  if(Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')]))
        {
          // return redirect()->route('admin');
            if(Auth::User()->role=='admin')
               return redirect()->route('admin_page');

        }
        else
            {
            return redirect()->back();
        }

    }*/
   public function admin_page()
   {
      $users = Contact::all();
       return view('admin_page',['users'=>$users]);
   }
   /*
   public function admin_reg(){
       return view('admin_reg');
   }
   public function reg_post(Request $request){

         $this->validate($request, [
            'username' => 'required|max:120',
             'password' => 'required',

        ]);
        $users =new User([
            'username'=>$request->input('username'),
            'password' => bcrypt($request->input('password')),

        ]);
        $users->save();
        return redirect()->back();
    }
*/

}
