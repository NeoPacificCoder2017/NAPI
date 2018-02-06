<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Resources\UserResource as UserResources;
use App\User;
use App\ProfileType;



class UserController extends Controller
{
//     public function __construct()
//   {
//       $this->middleware('auth');
//   }

    public function APIall(){
            $users = User::paginate(15); 
           return UserResources::collection($users);
           
    }

    /** Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function APIshow($id)
    {
       $users = User::findOrFail($id);
       return new UserResources($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function APIstore(Request $request)
    {
        $users = $request->isMethod('put') ? User::findOrFail
        ($request->user_id) : new User;

        $$users->id = $request->input('user_id');
        $$users->lastname = $request->input('lastname');
        $$users->firstname = $request->input('firstname');
        $$users->pseudo = $request->input('pseudo');
        $$users->profile_type_id = $request->input('profile_type_id');
        $$users->birthday = $request->input('birthday');
        $$users->email = $request->input('email');

        if($users->save()){
            return new UserResources($users);
        }
    }

    public function APIdestroy($id)
    {
        $userapis = User::findOrFail($id);
        if($userapis->delete()){
       return new UserResources($userapis);
        }
    }
  
    //////////////////////////////////////////////////////////////////////// Partie pour affichage web////////////////////////////////////////////////////////////////////////////
    
    public function all(){
        // $profile_type = Auth::user();
        // $users = User::all();
        // // dump($users);
        // return view('users.users', ['users' => $users ,'profile_type' => $profile_type]);
        
        $usertypeid = Auth::user()->profile_type_id;
        $profile_type = Auth::user();
        $users = User::all();
        if($usertypeid == 1):
            return view('users.users',['users' => $users ,'profile_type' => $profile_type]);
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
        $users ->profile_type_id = Auth::id();
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
