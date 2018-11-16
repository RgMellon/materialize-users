<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
   public function index()
   {
        return view('usuario.index');
   }

   public function store(Request $request)
   {

        $v = validator($request->only('email', 'name', 'password', 'level'), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'level' => 'required'
        ]);

        if ($v->fails()) {
            return response()->json($v->errors()->all(), 400);
        }

        $user = \App\User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'level' => $request->level
        ]);

        return redirect()->route('home');
   }

   public function create()
   {
       return view('usuario.create');
   }


}
