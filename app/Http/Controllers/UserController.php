<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use App\NewActu;


class UserController extends Controller
{
    public function __construct()
  {
      $this->middleware('auth');
  }


    public function all(){
        // $users = User::all();
        // // dump($users);
        // return view('users.users', ['users' => $users]);
        
        $usertypeid = Auth::user()->profile_type_id;
        if($usertypeid == 1):
            return view('users.users',['users' => $users]);
        else:
            return("Vous n'avez pas accés a ces informations car vous êtes pas admin");
        endif;    
    }

    public function show($userId){
        $users = User::find($userId);
        return view('users.user');
    }

    public function new()
    {$usertypeid = Auth::user()->profile_type_id;
        if($usertypeid == 1):
            return view('users.user-form');
        else:
            return("Vous n'avez pas accés a ces informations car vous êtes pas admin");
        endif; 
        
    }

    public function create(Request $request){
        $input = $request->all();
        $users = new User();
        $users ->lastname = $input['lastname'];
        $users ->firstname = $input['firstname'];
        $users ->pseudo = $input['pseudo'];
        $users ->profile_type_id = $input['profile_type_id'];
        $users ->birthday = $input['birthday'];
        $users ->email = $input['email'];
        $users ->password = bcrypt($input['password']);
        $users ->save();

        return view('users.user-create-confirmation');
    }

    public function destroy($userId){
        $users = User::find($userId);
        $users ->delete();
        return view('users.user-delete');
    }
}
