<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class PassportAuthController extends Controller
{
    /**
     * Registration Req
     */
    public function register(Request $request)
    {
        //todo validate
//        $this->validate($request, [
//            'username' => 'required|min:4',
//            'date_birth' => 'required',
//            'phone' => 'required|min:9',
//            'email' => 'required|email|unique:users',
//            'password' => 'required|min:8',
//        ]);

        $user = User::create([
                                 'full_name' => $request->username,
                                 'date_birth' => $request->date_birth,
                                 'phone_number' => $request->phone,
                                 'email' => $request->email,
                                 'password' => bcrypt($request->password),
                                 'role_id' => 2 // той хто здає в оренду
                             ]);

        $token = $user->createToken('Laravel8PassportAuth')->accessToken;

        if (auth()->attempt($user->only('email', 'password'))) {
            $token = auth()->user()->createToken('Laravel8PassportAuth')->accessToken;
            return redirect('/home');
            //return response()->json(['token' => $token], 200);
        } else {
            $errors = new MessageBag(['email' => ['These credentials do not match our records.']]);

            return Redirect::back()->withErrors($errors);
//            return response()->json(['error' => 'Unauthorised'], 401);
        }
        return redirect('/home');
    }

    /**
     * Login Req
     */
    public function login(Request $request)
    {

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('Laravel8PassportAuth')->accessToken;
            return redirect('/home');
            //return response()->json(['token' => $token], 200);
        } else {
            $errors = new MessageBag(['email' => ['These credentials do not match our records.']]);

            return Redirect::back()->withErrors($errors);
//            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    public function userInfo()
    {

        $user = auth()->user();

        return response()->json(['user' => $user], 200);

    }

    public function loginView()
    {
        return view('auth.login');
    }

    public function registerView()
    {
        return view('auth.register');
    }

}

