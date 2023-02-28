<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    protected $_userModel;

    public function __construct()
    {
        $this->_userModel = new User;
    }

    public function logout(Request $request){
        Auth::guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->put('guest', true);
    
        return redirect('/');
    }

    public function authentication(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = $this->_userModel->where('username', $username)->first();

        if (!is_null($user) && Hash::check($password, $user->password)) {
            Auth::loginUsingId(1);
            return redirect()->route('home');
        }
        else{
            return 'errore';
        }
    }
}
