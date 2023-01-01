<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;

class AuthController extends Controller
{

    public function index(){
        return view('loginPage');
    }

    public function loginAction(Request $request)
    {
        $credentials = [
            "email" => $request->emailInput,
            "password" => $request->passwordInput
        ];

        if(Auth::attempt($credentials)){
            return redirect('/');
        }

        return redirect()->back()->withErrors("errors","Credential not found!");
    }

    public function regis(){
        return view('regisPage');
    }

    public function regisAction(Request $request){
        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'phone' => $request->phone,
        //     'address' => $request->address
        // ]);


            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|unique:users',
                'password' => 'required',
                'phone' => 'required',
                'address' => 'required'
            ]);
            $validatedData['password'] = Hash::make($validatedData['password']);
            User::create($validatedData);

        return redirect('/login')->with('success', 'Registration Succesfull! Please Login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
