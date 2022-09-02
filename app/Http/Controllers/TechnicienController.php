<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class TechnicienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $user = User::find($user->id);

        return view('technicien.show', compact('user'));    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function show($id)
    {
        $user = User::find($id);

        return view('technicien.show', compact('user'));
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /*$public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        dd('Password change successfully.');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /* public function store(Request $request)
    {       
        //$user = User::find($id);
    
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password)]);

        return redirect()->route('techprofil.show');

    }*/

    public function update(Request $request, $id)
    {
 
         $this->validate($request, [
 
        'generated_password' => 'required',
        'password' => 'required',
        ]);
 
 
 
       $hashedPassword = Auth::user()->password;
 
       if (Hash::check($request->generated_password , $hashedPassword )) {
 
         if (!Hash::check($request->password , $hashedPassword)) {
 
              $users =User::find(Auth::user()->id);
              $users->password = bcrypt($request->password);
              User::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $users->password));
 
              session()->flash('message','password updated successfully');
              return redirect()->back();
            }
 
            else{
                  session()->flash('message','new password can not be the old password!');
                  return redirect()->back();
                }
 
           }
 
          else{
               session()->flash('message','old password doesnt matched ');
               return redirect()->back();
             }
 
       }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('technicien.changePassword', compact('user'));
    }

}
