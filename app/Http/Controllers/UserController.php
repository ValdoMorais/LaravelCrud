<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show(){
        $users = User::get();
        //dd($users);
        return view('users/show', compact('users'));
    }

    public function store(Request $request){

        //metodo 1 de insersao de dados na tabela
        $user = new User;
        $user -> name = $request-> name;
        $user -> email = $request-> email;
        $user -> password = bcrypt($request-> password);
        $user->save();

        //metodo 2
        // $data = $request->all();
        // $data['name'] =$request-> name;
        // $data['email'] =$request->email;
        // $data['password'] =bcrypt($request-> password);
        // User::create();

        return redirect()->route('home');

        // dd($request->only([
        //     'name', 'email', 'password'
        //  ]));
    }
    public function home(){
        $users = User::get();
        //dd($users);
        return view('users.show', compact('users'));
    }
}
