<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('house');
    }


    //////////////////////////////////////////////

    // public function login(Request $request){
    //     $input = $request->all();
    //     $this->validate([
    //         'email'=>'required|email',
    //         'password'=>'required|password'
    //     ]);
    //     if(auth()->attempt(array('email'=>$input['email'],'password'=>$input['password']))){
    //         if(auth()->user()->is_admin == 1 ){
    //             return redirect('admin.home');
    //         }else {
    //             return redirect()->route('house');

    //         }
    //     }else{
    //         return redirect()->route('login')->with('error','input proper email or password');
    //     }
    // }
    public function login(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->route('login')->withErrors($validator)->withInput();
    }

    if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
        if (auth()->user()->is_admin == 1) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('house');
        }
    } else {
        return redirect()->route('login')->with('error', 'Incorrect email or password');
    }
}
}
