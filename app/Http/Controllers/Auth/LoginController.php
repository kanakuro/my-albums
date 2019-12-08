<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // ログインページ表示
    public function index()
    {
        return view('auth.login');
    }

    public function username()
    {
        return 'username';
    }

    // ログイン
    public function postLogin(Request $request)
    {
        $this->validate($request, [
    'user_name' => 'required|max:16',
    'password' => 'required|min:4'
    ]);
        if (Auth::attempt(['name' => $request->input('user_name'), 'password' => $request->input('password')])) {
            return redirect()->route('home');
        }
        return redirect()->back();
    }
}
