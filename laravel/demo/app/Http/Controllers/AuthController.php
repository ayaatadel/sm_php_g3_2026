<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{



    //
    function dashboard()
    {
        // $users = User::all();
        // $categories = Category::all();
        // $products = Product::all();

        $userCount = User::count();
        $categoryCount = Category::count();
        $productCount = Product::count();
        $latestProducts = Product::latest()->take(5)->get();

        return view('dashboard', compact('userCount', 'categoryCount', 'productCount', 'latestProducts'));
    }


    function showRegister()
    {
        // show form register ==> return view

        return view('auth.register');
    }

    function register(AuthRequest $request)
    {
        // dd($request);
        $requestedData = $request->validated();
        // dd($requestedData->name);
        // $requestedData['password']=Hash::make($requestedData['password']);
        User::create([
            'name' => $requestedData['name'],
            'email' => $requestedData['email'],
            'password' => Hash::make($requestedData['password'])
        ]);
        // User::create($requestedData);
        $request->session()->regenerate();
        return to_route('welcome');
    }

    function showLogin()
    {
        // show form register ==> return view

        return view('auth.login');
    }

    function login(Request $request)
    {
        // dd($request);
        $requestedData = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );
        /**
         *  $requestedData=[
         * 'email'=>'user@gmail.com',
         * 'password'=>'12345678'
         * ]
         *
         */
        if (Auth::attempt($requestedData)) {
            $request->session()->regenerate();
            return to_route('welcome');
        } else {
        //    return back()->withErrors([
        //         'email' => "ckeck your email or password incorrect",
        //         'password'=>'check your password'
        //     ]);
           return back()->withErrors([
                'email' => "ckeck your email or password incorrect"
            ])->onlyInput('email');
        }
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('welcome');
    }
}
