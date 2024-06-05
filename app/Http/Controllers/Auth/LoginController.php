<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    // public function index1(){
    //     $admins = Admin::all();
    //     return view('auth.login',compact('admins'));

    // }

    public function __invoke(){
        return view ('administrador.login');
    }
}
    // public function store(Request $request){
    //     $supplier = new Admin();
    //     $supplier->name = $request->name;
    //     $supplier->codigo = $request->codigo;
    //     $supplier->save();
    //     return to_route('supplier
    //     .index');
    // }



    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    //     $this->middleware('auth')->only('logout');
    // }
// }
