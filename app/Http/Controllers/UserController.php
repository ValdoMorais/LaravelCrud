<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
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

    public function home(Request $request){


        $users = User::where('name', 'LIKE', "%{$request->search}%")->get();
        //dd($users);
        return view('users/show', compact('users'));
    }



    public function store(StoreUpdateUserFormRequest $request){

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
    public function cadastro(){
        //dd($users);
        return view('users.cadastrar');

    }

    public function edit($id){
        if(!$user = User::find($id))
            return redirect()->route('home');
        
        return view('users.editar', compact('user'));
    }

    public function showuser($id){
        if(!$user = User::find($id))
            return redirect()->route('home');

        //dd($user->name) ;  
        
        return view('users.detalhes', compact('user'));
    }


    public function update(StoreUpdateUserFormRequest $request,$id){

        if(!$user = User::find($id))
            return redirect()->route('home');

            $data = $request->only('name', 'email');
            if($request->password)
                $data['password'] = bcrypt($request->password);
            $user-> update($data);
            //dd($user);
        return redirect()->route('home');
    }
    public function destroy($id){
        if(!$user = User::find($id))
            return redirect()->route('home');
        $user -> delete();
            return redirect()->route('home');
    }
}
